<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit06901a3fc8b25ef2373f3623ac991335
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'srag\\RemovePluginDataConfirm\\SrLpReport\\' => 40,
            'srag\\Plugins\\SrLpReport\\' => 24,
            'srag\\LibrariesNamespaceChanger\\' => 31,
            'srag\\DIC\\SrLpReport\\' => 20,
            'srag\\CustomInputGUIs\\SrLpReport\\' => 32,
            'srag\\CommentsUI\\' => 16,
            'srag\\ActiveRecordConfig\\SrLpReport\\' => 35,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'srag\\RemovePluginDataConfirm\\SrLpReport\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src',
        ),
        'srag\\Plugins\\SrLpReport\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'srag\\LibrariesNamespaceChanger\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src',
        ),
        'srag\\DIC\\SrLpReport\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/dic/src',
        ),
        'srag\\CustomInputGUIs\\SrLpReport\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/custominputguis/src',
        ),
        'srag\\CommentsUI\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/commentsui/src',
        ),
        'srag\\ActiveRecordConfig\\SrLpReport\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/activerecordconfig/src',
        ),
    );

    public static $classMap = array (
        'SrLpReportRemoveDataConfirm' => __DIR__ . '/../..' . '/classes/uninstall/class.SrLpReportRemoveDataConfirm.php',
        'ilSrLpReportConfigGUI' => __DIR__ . '/../..' . '/classes/class.ilSrLpReportConfigGUI.php',
        'ilSrLpReportPlugin' => __DIR__ . '/../..' . '/classes/class.ilSrLpReportPlugin.php',
        'ilSrLpReportUIHookGUI' => __DIR__ . '/../..' . '/classes/class.ilSrLpReportUIHookGUI.php',
        'srag\\ActiveRecordConfig\\SrLpReport\\ActiveRecordConfig' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfig.php',
        'srag\\ActiveRecordConfig\\SrLpReport\\ActiveRecordConfigFormGUI' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfigFormGUI.php',
        'srag\\ActiveRecordConfig\\SrLpReport\\ActiveRecordConfigGUI' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfigGUI.php',
        'srag\\ActiveRecordConfig\\SrLpReport\\ActiveRecordConfigTableGUI' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfigTableGUI.php',
        'srag\\ActiveRecordConfig\\SrLpReport\\ActiveRecordObjectFormGUI' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordObjectFormGUI.php',
        'srag\\ActiveRecordConfig\\SrLpReport\\Exception\\ActiveRecordConfigException' => __DIR__ . '/..' . '/srag/activerecordconfig/src/Exception/ActiveRecordConfigException.php',
        'srag\\CommentsUI\\SrLpReport\\Comment\\AbstractComment' => __DIR__ . '/..' . '/srag/commentsui/src/Comment/AbstractComment.php',
        'srag\\CommentsUI\\SrLpReport\\Comment\\Factory' => __DIR__ . '/..' . '/srag/commentsui/src/Comment/Factory.php',
        'srag\\CommentsUI\\SrLpReport\\Comment\\Repository' => __DIR__ . '/..' . '/srag/commentsui/src/Comment/Repository.php',
        'srag\\CommentsUI\\SrLpReport\\Ctrl\\AbstractCtrl' => __DIR__ . '/..' . '/srag/commentsui/src/Ctrl/AbstractCtrl.php',
        'srag\\CommentsUI\\SrLpReport\\UI\\UI' => __DIR__ . '/..' . '/srag/commentsui/src/UI/UI.php',
        'srag\\CommentsUI\\SrLpReport\\Utils\\CommentsUITrait' => __DIR__ . '/..' . '/srag/commentsui/src/Utils/CommentsUITrait.php',
        'srag\\CustomInputGUIs\\SrLpReport\\CheckboxInputGUI\\CheckboxInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/CheckboxInputGUI/CheckboxInputGUI.php',
        'srag\\CustomInputGUIs\\SrLpReport\\CustomInputGUIs' => __DIR__ . '/..' . '/srag/custominputguis/src/CustomInputGUIs.php',
        'srag\\CustomInputGUIs\\SrLpReport\\CustomInputGUIsTrait' => __DIR__ . '/..' . '/srag/custominputguis/src/CustomInputGUIsTrait.php',
        'srag\\CustomInputGUIs\\SrLpReport\\DateDurationInputGUI\\DateDurationInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/DateDurationInputGUI/DateDurationInputGUI.php',
        'srag\\CustomInputGUIs\\SrLpReport\\GlyphGUI\\GlyphGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/GlyphGUI/GlyphGUI.php',
        'srag\\CustomInputGUIs\\SrLpReport\\HiddenInputGUI\\HiddenInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/HiddenInputGUI/HiddenInputGUI.php',
        'srag\\CustomInputGUIs\\SrLpReport\\LearningProgressPieUI\\AbstractLearningProgressPieUI' => __DIR__ . '/..' . '/srag/custominputguis/src/LearningProgressPieUI/AbstractLearningProgressPieUI.php',
        'srag\\CustomInputGUIs\\SrLpReport\\LearningProgressPieUI\\CountLearningProgressPieUI' => __DIR__ . '/..' . '/srag/custominputguis/src/LearningProgressPieUI/CountLearningProgressPieUI.php',
        'srag\\CustomInputGUIs\\SrLpReport\\LearningProgressPieUI\\LearningProgressPieUI' => __DIR__ . '/..' . '/srag/custominputguis/src/LearningProgressPieUI/LearningProgressPieUI.php',
        'srag\\CustomInputGUIs\\SrLpReport\\LearningProgressPieUI\\ObjIdsLearningProgressPieUI' => __DIR__ . '/..' . '/srag/custominputguis/src/LearningProgressPieUI/ObjIdsLearningProgressPieUI.php',
        'srag\\CustomInputGUIs\\SrLpReport\\LearningProgressPieUI\\UsrIdsLearningProgressPieUI' => __DIR__ . '/..' . '/srag/custominputguis/src/LearningProgressPieUI/UsrIdsLearningProgressPieUI.php',
        'srag\\CustomInputGUIs\\SrLpReport\\MultiLineInputGUI\\MultiLineInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiLineInputGUI/MultiLineInputGUI.php',
        'srag\\CustomInputGUIs\\SrLpReport\\MultiSelectSearchInputGUI\\MultiSelectSearchInput2GUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchInputGUI/MultiSelectSearchInput2GUI.php',
        'srag\\CustomInputGUIs\\SrLpReport\\MultiSelectSearchInputGUI\\MultiSelectSearchInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchInputGUI/MultiSelectSearchInputGUI.php',
        'srag\\CustomInputGUIs\\SrLpReport\\NumberInputGUI\\NumberInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/NumberInputGUI/NumberInputGUI.php',
        'srag\\CustomInputGUIs\\SrLpReport\\ProgressMeter\\Component\\Factory' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Component/Factory.php',
        'srag\\CustomInputGUIs\\SrLpReport\\ProgressMeter\\Component\\FixedSize' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Component/FixedSize.php',
        'srag\\CustomInputGUIs\\SrLpReport\\ProgressMeter\\Component\\Mini' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Component/Mini.php',
        'srag\\CustomInputGUIs\\SrLpReport\\ProgressMeter\\Component\\ProgressMeter' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Component/ProgressMeter.php',
        'srag\\CustomInputGUIs\\SrLpReport\\ProgressMeter\\Component\\Standard' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Component/Standard.php',
        'srag\\CustomInputGUIs\\SrLpReport\\ProgressMeter\\Implementation\\Factory' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Implementation/Factory.php',
        'srag\\CustomInputGUIs\\SrLpReport\\ProgressMeter\\Implementation\\FixedSize' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Implementation/FixedSize.php',
        'srag\\CustomInputGUIs\\SrLpReport\\ProgressMeter\\Implementation\\Mini' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Implementation/Mini.php',
        'srag\\CustomInputGUIs\\SrLpReport\\ProgressMeter\\Implementation\\ProgressMeter' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Implementation/ProgressMeter.php',
        'srag\\CustomInputGUIs\\SrLpReport\\ProgressMeter\\Implementation\\Renderer' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Implementation/Renderer.php',
        'srag\\CustomInputGUIs\\SrLpReport\\ProgressMeter\\Implementation\\Standard' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Implementation/Standard.php',
        'srag\\CustomInputGUIs\\SrLpReport\\PropertyFormGUI\\ConfigPropertyFormGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/ConfigPropertyFormGUI.php',
        'srag\\CustomInputGUIs\\SrLpReport\\PropertyFormGUI\\Exception\\PropertyFormGUIException' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/Exception/PropertyFormGUIException.php',
        'srag\\CustomInputGUIs\\SrLpReport\\PropertyFormGUI\\Items\\Items' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/Items/Items.php',
        'srag\\CustomInputGUIs\\SrLpReport\\PropertyFormGUI\\ObjectPropertyFormGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/ObjectPropertyFormGUI.php',
        'srag\\CustomInputGUIs\\SrLpReport\\PropertyFormGUI\\PropertyFormGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/PropertyFormGUI.php',
        'srag\\CustomInputGUIs\\SrLpReport\\ScreenshotsInputGUI\\ScreenshotsInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/ScreenshotsInputGUI/ScreenshotsInputGUI.php',
        'srag\\CustomInputGUIs\\SrLpReport\\StaticHTMLPresentationInputGUI\\StaticHTMLPresentationInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/StaticHTMLPresentationInputGUI/StaticHTMLPresentationInputGUI.php',
        'srag\\CustomInputGUIs\\SrLpReport\\TableGUI\\Exception\\TableGUIException' => __DIR__ . '/..' . '/srag/custominputguis/src/TableGUI/Exception/TableGUIException.php',
        'srag\\CustomInputGUIs\\SrLpReport\\TableGUI\\TableGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TableGUI/TableGUI.php',
        'srag\\CustomInputGUIs\\SrLpReport\\Template\\Template' => __DIR__ . '/..' . '/srag/custominputguis/src/Template/Template.php',
        'srag\\CustomInputGUIs\\SrLpReport\\TextAreaInputGUI\\TextAreaInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TextAreaInputGUI/TextAreaInputGUI.php',
        'srag\\CustomInputGUIs\\SrLpReport\\TextInputGUI\\TextInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TextInputGUI/TextInputGUI.php',
        'srag\\CustomInputGUIs\\SrLpReport\\ViewControlModeUI\\ViewControlModeUI' => __DIR__ . '/..' . '/srag/custominputguis/src/ViewControlModeGUI/ViewControlModeUI.php',
        'srag\\CustomInputGUIs\\SrLpReport\\Waiter\\Waiter' => __DIR__ . '/..' . '/srag/custominputguis/src/Waiter/Waiter.php',
        'srag\\DIC\\SrLpReport\\DICStatic' => __DIR__ . '/..' . '/srag/dic/src/DICStatic.php',
        'srag\\DIC\\SrLpReport\\DICStaticInterface' => __DIR__ . '/..' . '/srag/dic/src/DICStaticInterface.php',
        'srag\\DIC\\SrLpReport\\DICTrait' => __DIR__ . '/..' . '/srag/dic/src/DICTrait.php',
        'srag\\DIC\\SrLpReport\\DIC\\AbstractDIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/AbstractDIC.php',
        'srag\\DIC\\SrLpReport\\DIC\\DICInterface' => __DIR__ . '/..' . '/srag/dic/src/DIC/DICInterface.php',
        'srag\\DIC\\SrLpReport\\DIC\\Implementation\\ILIAS52DIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/Implementation/ILIAS52DIC.php',
        'srag\\DIC\\SrLpReport\\DIC\\Implementation\\ILIAS53DIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/Implementation/ILIAS53DIC.php',
        'srag\\DIC\\SrLpReport\\DIC\\Implementation\\ILIAS54DIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/Implementation/ILIAS54DIC.php',
        'srag\\DIC\\SrLpReport\\DIC\\Implementation\\LegacyDIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/Implementation/LegacyDIC.php',
        'srag\\DIC\\SrLpReport\\Exception\\DICException' => __DIR__ . '/..' . '/srag/dic/src/Exception/DICException.php',
        'srag\\DIC\\SrLpReport\\Output\\Output' => __DIR__ . '/..' . '/srag/dic/src/Output/Output.php',
        'srag\\DIC\\SrLpReport\\Output\\OutputInterface' => __DIR__ . '/..' . '/srag/dic/src/Output/OutputInterface.php',
        'srag\\DIC\\SrLpReport\\PHPVersionChecker' => __DIR__ . '/..' . '/srag/dic/src/PHPVersionChecker.php',
        'srag\\DIC\\SrLpReport\\Plugin\\Plugin' => __DIR__ . '/..' . '/srag/dic/src/Plugin/Plugin.php',
        'srag\\DIC\\SrLpReport\\Plugin\\PluginInterface' => __DIR__ . '/..' . '/srag/dic/src/Plugin/PluginInterface.php',
        'srag\\DIC\\SrLpReport\\Plugin\\Pluginable' => __DIR__ . '/..' . '/srag/dic/src/Plugin/Pluginable.php',
        'srag\\DIC\\SrLpReport\\Version\\Version' => __DIR__ . '/..' . '/srag/dic/src/Version/Version.php',
        'srag\\DIC\\SrLpReport\\Version\\VersionInterface' => __DIR__ . '/..' . '/srag/dic/src/Version/VersionInterface.php',
        'srag\\LibrariesNamespaceChanger\\LibrariesNamespaceChanger' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/LibrariesNamespaceChanger.php',
        'srag\\Plugins\\SrLpReport\\Access\\Access' => __DIR__ . '/../..' . '/src/Access/Access.php',
        'srag\\Plugins\\SrLpReport\\Access\\Ilias' => __DIR__ . '/../..' . '/src/Access/Ilias.php',
        'srag\\Plugins\\SrLpReport\\Block\\BaseCommentsCourseBlock' => __DIR__ . '/../..' . '/src/Block/BaseCommentsCourseBlock.php',
        'srag\\Plugins\\SrLpReport\\Block\\BaseCommentsPersonalDesktopBlock' => __DIR__ . '/../..' . '/src/Block/BaseCommentsPersonalDesktopBlock.php',
        'srag\\Plugins\\SrLpReport\\Block\\CommentsCourseBlock53' => __DIR__ . '/../..' . '/src/Block/CommentsCourseBlock53.php',
        'srag\\Plugins\\SrLpReport\\Block\\CommentsCourseBlock54' => __DIR__ . '/../..' . '/src/Block/CommentsCourseBlock54.php',
        'srag\\Plugins\\SrLpReport\\Block\\CommentsPersonalDesktopBlock53' => __DIR__ . '/../..' . '/src/Block/CommentsPersonalDesktopBlock53.php',
        'srag\\Plugins\\SrLpReport\\Block\\CommentsPersonalDesktopBlock54' => __DIR__ . '/../..' . '/src/Block/CommentsPersonalDesktopBlock54.php',
        'srag\\Plugins\\SrLpReport\\Comment\\Comment' => __DIR__ . '/../..' . '/src/Comment/Comment.php',
        'srag\\Plugins\\SrLpReport\\Comment\\Ctrl\\AbstractCtrl' => __DIR__ . '/../..' . '/src/Comment/Ctrl/AbstractCtrl.php',
        'srag\\Plugins\\SrLpReport\\Comment\\Ctrl\\CourseCtrl' => __DIR__ . '/../..' . '/src/Comment/Ctrl/class.CourseCtrl.php',
        'srag\\Plugins\\SrLpReport\\Comment\\Ctrl\\PersonalDesktopCtrl' => __DIR__ . '/../..' . '/src/Comment/Ctrl/class.PersonalDesktopCtrl.php',
        'srag\\Plugins\\SrLpReport\\Comment\\Ctrl\\ReportCtrl' => __DIR__ . '/../..' . '/src/Comment/Ctrl/class.ReportCtrl.php',
        'srag\\Plugins\\SrLpReport\\Config\\Config' => __DIR__ . '/../..' . '/src/Config/Config.php',
        'srag\\Plugins\\SrLpReport\\Config\\ConfigFormGUI' => __DIR__ . '/../..' . '/src/Config/ConfigFormGUI.php',
        'srag\\Plugins\\SrLpReport\\Report\\AbstractReport2TableGUI' => __DIR__ . '/../..' . '/src/Report/AbstractReport2TableGUI.php',
        'srag\\Plugins\\SrLpReport\\Report\\AbstractReportGUI' => __DIR__ . '/../..' . '/src/Report/AbstractReportGUI.php',
        'srag\\Plugins\\SrLpReport\\Report\\AbstractReportTableGUI' => __DIR__ . '/../..' . '/src/Report/AbstractReportTableGUI.php',
        'srag\\Plugins\\SrLpReport\\Report\\Matrix\\MatrixReportGUI' => __DIR__ . '/../..' . '/src/Report/Matrix/class.MatrixReportGUI.php',
        'srag\\Plugins\\SrLpReport\\Report\\Matrix\\MatrixTableGUI' => __DIR__ . '/../..' . '/src/Report/Matrix/MatrixTableGUI.php',
        'srag\\Plugins\\SrLpReport\\Report\\Matrix\\Single\\MatrixSingleReportGUI' => __DIR__ . '/../..' . '/src/Report/Matrix/Single/class.MatrixSingleReportGUI.php',
        'srag\\Plugins\\SrLpReport\\Report\\Matrix\\Single\\MatrixSingleTableGUI' => __DIR__ . '/../..' . '/src/Report/Matrix/Single/MatrixSingleTableGUI.php',
        'srag\\Plugins\\SrLpReport\\Report\\ReportGUI' => __DIR__ . '/../..' . '/src/Report/class.ReportGUI.php',
        'srag\\Plugins\\SrLpReport\\Report\\Reports' => __DIR__ . '/../..' . '/src/Report/Reports.php',
        'srag\\Plugins\\SrLpReport\\Report\\Summary\\SummaryReportGUI' => __DIR__ . '/../..' . '/src/Report/Summary/class.SummaryReportGUI.php',
        'srag\\Plugins\\SrLpReport\\Report\\Summary\\SummaryTableGUI' => __DIR__ . '/../..' . '/src/Report/Summary/SummaryTableGUI.php',
        'srag\\Plugins\\SrLpReport\\Report\\User\\UserReportGUI' => __DIR__ . '/../..' . '/src/Report/User/class.UserReportGUI.php',
        'srag\\Plugins\\SrLpReport\\Report\\User\\UserTableGUI' => __DIR__ . '/../..' . '/src/Report/User/UserTableGUI.php',
        'srag\\Plugins\\SrLpReport\\Staff\\AbstractStaffGUI' => __DIR__ . '/../..' . '/src/Staff/AbstractStaffGUI.php',
        'srag\\Plugins\\SrLpReport\\Staff\\AbstractStaffTableGUI' => __DIR__ . '/../..' . '/src/Staff/AbstractStaffTableGUI.php',
        'srag\\Plugins\\SrLpReport\\Staff\\Courses\\Courses' => __DIR__ . '/../..' . '/src/Staff/Courses/Courses.php',
        'srag\\Plugins\\SrLpReport\\Staff\\Courses\\CoursesStaffGUI' => __DIR__ . '/../..' . '/src/Staff/Courses/class.CoursesStaffGUI.php',
        'srag\\Plugins\\SrLpReport\\Staff\\Courses\\CoursesTableGUI' => __DIR__ . '/../..' . '/src/Staff/Courses/CoursesTableGUI.php',
        'srag\\Plugins\\SrLpReport\\Staff\\Staff' => __DIR__ . '/../..' . '/src/Staff/Staff.php',
        'srag\\Plugins\\SrLpReport\\Staff\\StaffGUI' => __DIR__ . '/../..' . '/src/Staff/class.StaffGUI.php',
        'srag\\Plugins\\SrLpReport\\Staff\\User\\User' => __DIR__ . '/../..' . '/src/Staff/User/User.php',
        'srag\\Plugins\\SrLpReport\\Staff\\User\\UserStaffGUI' => __DIR__ . '/../..' . '/src/Staff/User/class.UserStaffGUI.php',
        'srag\\Plugins\\SrLpReport\\Staff\\User\\UserTableGUI' => __DIR__ . '/../..' . '/src/Staff/User/UserTableGUI.php',
        'srag\\Plugins\\SrLpReport\\Staff\\Users\\Users' => __DIR__ . '/../..' . '/src/Staff/Users/Users.php',
        'srag\\Plugins\\SrLpReport\\Staff\\Users\\UsersStaffGUI' => __DIR__ . '/../..' . '/src/Staff/Users/class.UsersStaffGUI.php',
        'srag\\Plugins\\SrLpReport\\Staff\\Users\\UsersTableGUI' => __DIR__ . '/../..' . '/src/Staff/Users/UsersTableGUI.php',
        'srag\\Plugins\\SrLpReport\\Utils\\SrLpReportTrait' => __DIR__ . '/../..' . '/src/Utils/SrLpReportTrait.php',
        'srag\\RemovePluginDataConfirm\\SrLpReport\\AbstractPluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/AbstractPluginUninstallTrait.php',
        'srag\\RemovePluginDataConfirm\\SrLpReport\\AbstractRemovePluginDataConfirm' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/AbstractRemovePluginDataConfirm.php',
        'srag\\RemovePluginDataConfirm\\SrLpReport\\Exception\\RemovePluginDataConfirmException' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/Exception/RemovePluginDataConfirmException.php',
        'srag\\RemovePluginDataConfirm\\SrLpReport\\PluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/PluginUninstallTrait.php',
        'srag\\RemovePluginDataConfirm\\SrLpReport\\RepositoryObjectPluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/RepositoryObjectPluginUninstallTrait.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit06901a3fc8b25ef2373f3623ac991335::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit06901a3fc8b25ef2373f3623ac991335::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit06901a3fc8b25ef2373f3623ac991335::$classMap;

        }, null, ClassLoader::class);
    }
}
