<?php

require_once __DIR__ . "/../vendor/autoload.php";

use srag\DIC\SrLpReport\DICTrait;
use srag\Plugins\SrLpReport\Report\Matrix\MatrixReportGUI;
use srag\Plugins\SrLpReport\Report\ReportGUI;
use srag\Plugins\SrLpReport\Report\Reports;
use srag\Plugins\SrLpReport\Report\Summary\SummaryReportGUI;
use srag\Plugins\SrLpReport\Report\User\UserReportGUI;
use srag\Plugins\SrLpReport\Staff\Courses\CoursesStaffGUI;
use srag\Plugins\SrLpReport\Staff\StaffGUI;
use srag\Plugins\SrLpReport\Staff\User\UserStaffGUI;
use srag\Plugins\SrLpReport\Staff\Users\UsersStaffGUI;
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
	const REDIRECT = "redirect";
	const TYPE_CRS = "crs";
	/**
	 * @var bool[]
	 */
	protected static $load = [
		self::REDIRECT => false
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
		$a_par = [])/*: void*/ {
		if (!self::$load[self::REDIRECT]) {

			// Redirect not to early, causes endless loop because wrong baseClass in URL!
			if ($a_part === self::PAR_TABS) {

				if (self::dic()->ctrl()->getCmdClass() === strtolower(ilLPListOfObjectsGUI::class)) {

					if (self::dic()->objDataCache()->lookupType(self::dic()->objDataCache()->lookupObjId(self::reports()->getReportObjRefId()))
						=== self::TYPE_CRS) {

						self::$load[self::REDIRECT] = true;

						self::dic()->ctrl()->setParameterByClass(ReportGUI::class, Reports::GET_PARAM_REF_ID, self::reports()->getReportObjRefId());

						switch (self::dic()->ctrl()->getCmd()) {
							case "showUserObjectMatrix":
								self::dic()->ctrl()->redirectByClass([ ilUIPluginRouterGUI::class, ReportGUI::class, MatrixReportGUI::class ]);
								break;

							case "showObjectSummary":
								self::dic()->ctrl()->redirectByClass([ ilUIPluginRouterGUI::class, ReportGUI::class, SummaryReportGUI::class ]);
								break;

							case "":
								self::dic()->ctrl()->redirectByClass([ ilUIPluginRouterGUI::class, ReportGUI::class, UserReportGUI::class ]);
								break;

							default:
								break;
						}

						return;
					}
				}

				if (self::dic()->ctrl()->getCmdClass() === strtolower(ilMyStaffGUI::class)
					|| self::dic()->ctrl()->getCmdClass() === strtolower(ilMStListUsersGUI::class)) {
					self::$load[self::REDIRECT] = true;

					self::dic()->ctrl()->redirectByClass([
						ilUIPluginRouterGUI::class,
						StaffGUI::class,
						UsersStaffGUI::class
					]);

					return;
				}

				if (self::dic()->ctrl()->getCmdClass() === strtolower(ilMStListCoursesGUI::class)) {
					self::$load[self::REDIRECT] = true;

					self::dic()->ctrl()->redirectByClass([
						ilUIPluginRouterGUI::class,
						StaffGUI::class,
						CoursesStaffGUI::class
					]);
				}

				if (self::dic()->ctrl()->getCmdClass() === strtolower(ilMStShowUserGUI::class)) {
					self::$load[self::REDIRECT] = true;

					self::dic()->ctrl()->redirectByClass([
						ilUIPluginRouterGUI::class,
						StaffGUI::class,
						UserStaffGUI::class
					]);
				}
			}
		}
	}
}
