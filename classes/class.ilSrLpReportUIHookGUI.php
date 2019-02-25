<?php

require_once __DIR__ . "/../vendor/autoload.php";

use srag\DIC\SrLpReport\DICTrait;
use srag\Plugins\SrLpReport\GUI\BaseGUI;
use srag\Plugins\SrLpReport\Report\ReportFactory;
use srag\Plugins\SrLpReport\User\UserGUI;
use srag\Plugins\SrLpReport\Utils\SrLpReportTrait;

/**
 * Class ilSrLpReportUIHookGUI
 *
 * @author studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class ilSrLpReportUIHookGUI extends ilUIHookPluginGUI {

	use DICTrait;
	use SrLpReportTrait;
	const PLUGIN_CLASS_NAME = ilSrLpReportPlugin::class;
	const PAR_TABS = "tabs";
	const MAIN_TEMPLATE_ID = "tpl.main.html";
	const MAIN_MENU_TEMPLATE_ID = "Services/MainMenu/tpl.main_menu.html";
	const STARTUP_SCREEN_TEMPLATE_ID = "Services/Init/tpl.startup_screen.html";
	const TEMPLATE_ADD = "template_add";
	const TEMPLATE_GET = "template_get";
	const TEMPLATE_SHOW = "template_show";
	const DESKTOP_PERS_LP_TAB_LOADER = "trac_progress";
	const LP_REPORT_REDIRECTER_LOADER = "report_redirecter";
	/*const TILE_CONTAINER_LOADER = "tile_container";
	const TILE_FAVORITES_LOADER = "tile_desktop_loader";
	const TILE_RECOMMEND_MODAL = "tile_recommend_modal";*/
	const TEMPLATE_ID_CONTAINER_PAGE = "Services/Container/tpl.container_page.html";
	const TEMPLATE_ID_FAVORITES = "Services/PersonalDesktop/tpl.pd_list_block.html";
	const GET = 'template_get';
	const TAB_ID = "lp_config";
	const ADMIN_FOOTER_TPL_ID = "tpl.adm_content.html";
	/**
	 * @var bool[]
	 */
	protected static $load = [
		self::DESKTOP_PERS_LP_TAB_LOADER => false,
		self::LP_REPORT_REDIRECTER_LOADER => false
	];


	/**
	 * ilSrLpReportUIHookGUI constructor
	 */
	public function __construct() {

	}


	/**
	 * @param string $a_comp
	 * @param string $a_part
	 * @param array  $a_par
	 */
	public function modifyGUI(/*string*/
		$a_comp, /*string*/
		$a_part, /*array*/
		$a_par = []) {
		if ($a_part === self::PAR_TABS && !self::$load[self::LP_REPORT_REDIRECTER_LOADER] && !$_GET['sr_rp'] && ReportFactory::getReportObjRefId() > 0
			&& self::dic()->objDataCache()->lookupType(self::dic()->objDataCache()->lookupObjId(ReportFactory::getReportObjRefId())) == "crs") {

			if (self::access()->hasReportingAccess()) {

				self::$load[self::LP_REPORT_REDIRECTER_LOADER] = true;

				self::dic()->ctrl()->setParameterByClass(UserGUI::class, 'ref_id', ReportFactory::getReportObjRefId());

				self::dic()->ctrl()->redirectByClass(array( ilUIPluginRouterGUI::class, BaseGUI::class, UserGUI::class ));
			}
		}

		if (!self::$load[self::DESKTOP_PERS_LP_TAB_LOADER]) {
			if ($a_part === self::PAR_TABS) {
				self::$load[self::DESKTOP_PERS_LP_TAB_LOADER] = true;

				// TODO: user
				//Don't Display Personal Learning Progress for Reporting User
				if (self::dic()->tabs()->getActiveTab() == self::DESKTOP_PERS_LP_TAB_LOADER) {
					self::dic()->ctrl()->redirectByClass(ilLPListOfObjectsGUI::class);
				}

				if (self::dic()->tabs()->getActiveTab() == 'trac_objects') {
					self::dic()->tabs()->removeTab('trac_progress');
				}
			}
		}
	}
}
