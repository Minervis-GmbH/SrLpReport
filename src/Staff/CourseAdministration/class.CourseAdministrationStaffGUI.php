<?php

namespace srag\Plugins\SrLpReport\Staff\CourseAdministration;

use ilUtil;
use srag\Plugins\SrLpReport\Config\Config;
use srag\Plugins\SrLpReport\Report\Reports;
use srag\Plugins\SrLpReport\Staff\AbstractStaffGUI;
use srag\Plugins\SrLpReport\Staff\AbstractStaffTableGUI;

/**
 * Class CourseAdministrationStaffGUI
 *
 * @package           srag\Plugins\SrLpReport\Staff\CourseAdministration
 *
 * @author            studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 *
 * @ilCtrl_isCalledBy srag\Plugins\SrLpReport\Staff\CourseAdministration\CourseAdministrationStaffGUI: srag\Plugins\SrLpReport\Staff\StaffGUI
 * @ilCtrl_isCalledBy srag\CustomInputGUIs\SrLpReport\MultiSelectSearchNewInputGUI\OrgUnitAjaxAutoCompleteCtrl: srag\Plugins\SrLpReport\Staff\CourseAdministration\CourseAdministrationStaffGUI
 */
class CourseAdministrationStaffGUI extends AbstractStaffGUI
{

    const TAB_ID = "course_administration";
    const CMD_ENROLL = "enroll";
    const CMD_SIGNOUT = "signout";
    const CMD_MULTI_ENROLL = "multiEnroll";
    const CMD_MULTI_ENROLL_SELECT = "multiEnrollSelect";
    const ENABLE_CONFIG_KEY = Config::KEY_ENABLE_COURSE_ADMINISTRATION;
    const LANG_MODULE = "course_administration";
    const CMD_MULTI_SIGNOUT = "multiSignout";
    const CMD_MULTI_SIGNOUT_SELECT = "multiSignoutSelect";


    /**
     * @inheritdoc
     */
    public function executeCommand()/*: void*/
    {
        self::dic()->mainTemplate()->addCss(self::plugin()->directory() . "/css/srcrsreport.css");

        parent::executeCommand();

        $cmd = self::dic()->ctrl()->getCmd();

        switch ($cmd) {
            case self::CMD_ENROLL:
            case self::CMD_SIGNOUT:
            case self::CMD_MULTI_ENROLL:
            case self::CMD_MULTI_ENROLL_SELECT:
            case self::CMD_MULTI_SIGNOUT:
            case self::CMD_MULTI_SIGNOUT_SELECT:
                $this->{$cmd}();
                break;

            default:
                break;
        }
    }


    /**
     * @inheritDoc
     */
    protected function setTabs()/*: void*/
    {

    }


    /**
     * @inheritDoc
     */
    protected function getTable(string $cmd = self::CMD_INDEX) : AbstractStaffTableGUI
    {
        $table = new CourseAdministrationTableGUI($this, $cmd);

        return $table;
    }


    /**
     * @inheritDoc
     */
    protected function getActionsArray() : array
    {
        return [];
    }


    /**
     *
     */
    protected function enroll()/*:void*/
    {
        $usr_id = self::reports()->getUsrId();
        $crs_obj_id = intval(filter_input(INPUT_GET, Reports::GET_PARAM_COURSE_OBJ_ID));

        $result = self::ilias()->staff()->courseAdministration()->enroll([$usr_id], [$crs_obj_id]);

        ilUtil::sendSuccess($result, true);

        self::dic()->ctrl()->redirect($this, self::CMD_INDEX);
    }


    /**
     *
     */
    protected function signout()/*:void*/
    {
        $usr_id = self::reports()->getUsrId();
        $crs_obj_id = intval(filter_input(INPUT_GET, Reports::GET_PARAM_COURSE_OBJ_ID));

        $result = self::ilias()->staff()->courseAdministration()->signout([$usr_id], [$crs_obj_id]);

        ilUtil::sendSuccess($result, true);

        self::dic()->ctrl()->redirect($this, self::CMD_INDEX);
    }


    /**
     * @param int[] $usr_ids
     *
     * @return CourseAdministrationMultiEnrollSelectFormGUI
     */
    protected function getCourseAdministrationMultiEnrollSelectForm(array $usr_ids = []) : CourseAdministrationMultiEnrollSelectFormGUI
    {
        $form = new CourseAdministrationMultiEnrollSelectFormGUI($this, $usr_ids);

        return $form;
    }


    /**
     *
     */
    protected function multiEnrollSelect()/*:void*/
    {
        $usr_ids = filter_input(INPUT_POST, Reports::GET_PARAM_USR_ID, FILTER_DEFAULT, FILTER_FORCE_ARRAY);
        if (!is_array($usr_ids)) {
            $usr_ids = [];
        }

        $form = $this->getCourseAdministrationMultiEnrollSelectForm($usr_ids);

        self::output()->output($form, true);
    }


    /**
     *
     */
    protected function multiEnroll()/*:void*/
    {
        $form = $this->getCourseAdministrationMultiEnrollSelectForm();

        if (!$form->storeForm()) {
            self::output()->output($form);

            return;
        }

        $result = self::ilias()->staff()->courseAdministration()->enroll($form->getUsrIds(), $form->getCrsObjIds());

        ilUtil::sendSuccess($result, true);

        self::dic()->ctrl()->redirect($this, self::CMD_INDEX);
    }
/**
     * @param int[] $usr_ids
     *
     * @return CourseAdministrationMultiSignoutSelectFormGUI
     */
    protected function getCourseAdministrationMultiSignoutSelectForm(array $usr_ids = []) : CourseAdministrationMultiSignoutSelectFormGUI
    {
        $form = new CourseAdministrationMultiSignoutSelectFormGUI($this, $usr_ids);

        return $form;
    }


    /**
     *
     */
    protected function multiSignoutSelect()/*:void*/
    {
        $usr_ids = filter_input(INPUT_POST, Reports::GET_PARAM_USR_ID, FILTER_DEFAULT, FILTER_FORCE_ARRAY);
        if (!is_array($usr_ids)) {
            $usr_ids = [];
        }

        $form = $this->getCourseAdministrationMultiSignoutSelectForm($usr_ids);

        self::output()->output($form, true);
    }


    /**
     *
     */
    protected function multiSignout()/*:void*/
    {
        $form = $this->getCourseAdministrationMultiSignoutSelectForm();

        if (!$form->storeForm()) {
            self::output()->output($form);

            return;
        }

        $result = self::ilias()->staff()->courseAdministration()->signout($form->getUsrIds(), $form->getCrsObjIds());
        ilUtil::sendSuccess($result, true);
        ;self::dic()->ctrl()->redirect($this, self::CMD_INDEX); 
    }
}
