<?php

namespace srag\Plugins\SrLpReport\Menu;

use ilAdministrationGUI;
use ilDBConstants;
use ILIAS\GlobalScreen\Scope\MainMenu\Factory\AbstractBaseItem;
use ILIAS\GlobalScreen\Scope\MainMenu\Provider\AbstractStaticMainMenuPluginProvider;
use ILIAS\UI\Component\Symbol\Icon\Standard;
use ilObjComponentSettingsGUI;
use ilSrLpReportConfigGUI;
use ilSrLpReportPlugin;
use ilUIPluginRouterGUI;
use srag\DIC\SrLpReport\DICTrait;
use srag\Plugins\SrLpReport\Staff\CourseAdministration\CourseAdministration;
use srag\Plugins\SrLpReport\Staff\CourseAdministration\CourseAdministrationStaffGUI;
use srag\Plugins\SrLpReport\Utils\SrLpReportTrait;

/**
 * Class Menu
 *
 * @package srag\Plugins\SrLpReport\Menu
 */
class Menu extends AbstractStaticMainMenuPluginProvider
{

    use DICTrait;
    use SrLpReportTrait;

    const PLUGIN_CLASS_NAME = ilSrLpReportPlugin::class;


    /**
     * @inheritDoc
     */
    public function getStaticSubItems() : array
    {
        $parent = $this->getStaticTopItems()[0];

        self::dic()
            ->ctrl()
            ->setParameterByClass(CourseAdministrationStaffGUI::class, "ref_id", self::dic()
                                                                               ->database()
                                                                               ->queryF('SELECT ref_id FROM object_data INNER JOIN object_reference ON object_data.obj_id=object_reference.obj_id WHERE type=%s',
                                                                                   [ilDBConstants::T_TEXT], ["cmps"])
                                                                               ->fetchAssoc()["ref_id"]);
        self::dic()->ctrl()->setParameterByClass(CourseAdministrationStaffGUI::class, "ctype", IL_COMP_SERVICE);
        self::dic()->ctrl()->setParameterByClass(CourseAdministrationStaffGUI::class, "cname", "UIComponent");
        self::dic()->ctrl()->setParameterByClass(CourseAdministrationStaffGUI::class, "slot_id", "uihk");
        self::dic()->ctrl()->setParameterByClass(CourseAdministrationStaffGUI::class, "pname", ilSrLpReportPlugin::PLUGIN_NAME);

        return [
            $this->symbol($this->mainmenu->topLinkItem($this->if->identifier(ilSrLpReportPlugin::PLUGIN_ID . "_participants"))
                ->withTitle(self::plugin()->translate("title", CourseAdministrationStaffGUI::LANG_MODULE))->withAction( str_replace("\\", "%5C", self::dic()->ctrl()
                    ->getLinkTargetByClass([
                        ilUIPluginRouterGUI::class,
                        CourseAdministrationStaffGUI::class
                    ])))->withAvailableCallable(function () : bool {
                    return self::plugin()->getPluginObject()->isActive();
                })->withVisibilityCallable(function () : bool {
                    return self::dic()->rbac()->review()->isAssigned(self::dic()->user()->getId(), SYSTEM_ROLE_ID) || self::access()->hasCurrentUserAccessToMyStaff();
                }))
        ];
    }


    /**
     * @inheritDoc
     */
    public function getStaticTopItems() : array
    {
        return [];
    }


    /**
     * @param AbstractBaseItem $entry
     *
     * @return AbstractBaseItem
     */
    protected function symbol(AbstractBaseItem $entry) : AbstractBaseItem
    {
        $entry = $entry->withSymbol(self::dic()->ui()->factory()->symbol()->icon()->standard(Standard::GRP, ilSrLpReportPlugin::PLUGIN_NAME)->withIsOutlined(true));

        return $entry;
    }
}
