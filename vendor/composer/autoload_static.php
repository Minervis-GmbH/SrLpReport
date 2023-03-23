<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc782db8ddd5f29172129184e2711b5cc
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'srag\\RemovePluginDataConfirm\\' => 29,
            'srag\\Plugins\\SrLpReport\\' => 24,
            'srag\\PieChart\\' => 14,
            'srag\\LibrariesNamespaceChanger\\' => 31,
            'srag\\LearningProgressPieUI\\' => 27,
            'srag\\DIC\\' => 9,
            'srag\\CustomInputGUIs\\' => 21,
            'srag\\CommentsUI\\' => 16,
            'srag\\ActiveRecordConfig\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'srag\\RemovePluginDataConfirm\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src',
        ),
        'srag\\Plugins\\SrLpReport\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'srag\\PieChart\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/piechart/src',
        ),
        'srag\\LibrariesNamespaceChanger\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src',
        ),
        'srag\\LearningProgressPieUI\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/learningprogresspieui/src',
        ),
        'srag\\DIC\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/dic/src',
        ),
        'srag\\CustomInputGUIs\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/custominputguis/src',
        ),
        'srag\\CommentsUI\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/commentsui/src',
        ),
        'srag\\ActiveRecordConfig\\' => 
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
        'srag\\ActiveRecordConfig\\SrLpReport\\ActiveRecordConfigFactory' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfig.php',
        'srag\\ActiveRecordConfig\\SrLpReport\\ActiveRecordConfigFormGUI' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfigFormGUI.php',
        'srag\\ActiveRecordConfig\\SrLpReport\\ActiveRecordConfigGUI' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfigGUI.php',
        'srag\\ActiveRecordConfig\\SrLpReport\\ActiveRecordConfigRepository' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfig.php',
        'srag\\ActiveRecordConfig\\SrLpReport\\ActiveRecordConfigTableGUI' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfigTableGUI.php',
        'srag\\ActiveRecordConfig\\SrLpReport\\ActiveRecordObjectFormGUI' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordObjectFormGUI.php',
        'srag\\ActiveRecordConfig\\SrLpReport\\Config\\AbstractFactory' => __DIR__ . '/..' . '/srag/activerecordconfig/src/Config/AbstractFactory.php',
        'srag\\ActiveRecordConfig\\SrLpReport\\Config\\AbstractRepository' => __DIR__ . '/..' . '/srag/activerecordconfig/src/Config/AbstractRepository.php',
        'srag\\ActiveRecordConfig\\SrLpReport\\Config\\Config' => __DIR__ . '/..' . '/srag/activerecordconfig/src/Config/Config.php',
        'srag\\ActiveRecordConfig\\SrLpReport\\Exception\\ActiveRecordConfigException' => __DIR__ . '/..' . '/srag/activerecordconfig/src/Exception/ActiveRecordConfigException.php',
        'srag\\CommentsUI\\SrLpReport\\Comment\\Comment' => __DIR__ . '/..' . '/srag/commentsui/src/Comment/Comment.php',
        'srag\\CommentsUI\\SrLpReport\\Comment\\CommentAR' => __DIR__ . '/..' . '/srag/commentsui/src/Comment/CommentAR.php',
        'srag\\CommentsUI\\SrLpReport\\Comment\\Factory' => __DIR__ . '/..' . '/srag/commentsui/src/Comment/Factory.php',
        'srag\\CommentsUI\\SrLpReport\\Comment\\FactoryInterface' => __DIR__ . '/..' . '/srag/commentsui/src/Comment/FactoryInterface.php',
        'srag\\CommentsUI\\SrLpReport\\Comment\\Repository' => __DIR__ . '/..' . '/srag/commentsui/src/Comment/Repository.php',
        'srag\\CommentsUI\\SrLpReport\\Comment\\RepositoryInterface' => __DIR__ . '/..' . '/srag/commentsui/src/Comment/RepositoryInterface.php',
        'srag\\CommentsUI\\SrLpReport\\Ctrl\\AbstractCtrl' => __DIR__ . '/..' . '/srag/commentsui/src/Ctrl/AbstractCtrl.php',
        'srag\\CommentsUI\\SrLpReport\\Ctrl\\CtrlInterface' => __DIR__ . '/..' . '/srag/commentsui/src/Ctrl/CtrlInterface.php',
        'srag\\CommentsUI\\SrLpReport\\UI\\UI' => __DIR__ . '/..' . '/srag/commentsui/src/UI/UI.php',
        'srag\\CommentsUI\\SrLpReport\\UI\\UIInterface' => __DIR__ . '/..' . '/srag/commentsui/src/UI/UIInterface.php',
        'srag\\CommentsUI\\SrLpReport\\Utils\\CommentsUITrait' => __DIR__ . '/..' . '/srag/commentsui/src/Utils/CommentsUITrait.php',
        'srag\\CustomInputGUIs\\SrLpReport\\CheckboxInputGUI\\AjaxCheckbox' => __DIR__ . '/..' . '/srag/custominputguis/src/AjaxCheckbox/AjaxCheckbox.php',
        'srag\\CustomInputGUIs\\SrLpReport\\CheckboxInputGUI\\CheckboxInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/CheckboxInputGUI/CheckboxInputGUI.php',
        'srag\\CustomInputGUIs\\SrLpReport\\ColorPickerInputGUI\\ColorPickerInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/ColorPickerInputGUI/ColorPickerInputGUI.php',
        'srag\\CustomInputGUIs\\SrLpReport\\CustomInputGUIs' => __DIR__ . '/..' . '/srag/custominputguis/src/CustomInputGUIs.php',
        'srag\\CustomInputGUIs\\SrLpReport\\CustomInputGUIsTrait' => __DIR__ . '/..' . '/srag/custominputguis/src/CustomInputGUIsTrait.php',
        'srag\\CustomInputGUIs\\SrLpReport\\DateDurationInputGUI\\DateDurationInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/DateDurationInputGUI/DateDurationInputGUI.php',
        'srag\\CustomInputGUIs\\SrLpReport\\FormBuilder\\AbstractFormBuilder' => __DIR__ . '/..' . '/srag/custominputguis/src/FormBuilder/AbstractFormBuilder.php',
        'srag\\CustomInputGUIs\\SrLpReport\\FormBuilder\\FormBuilder' => __DIR__ . '/..' . '/srag/custominputguis/src/FormBuilder/FormBuilder.php',
        'srag\\CustomInputGUIs\\SrLpReport\\GlyphGUI\\GlyphGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/GlyphGUI/GlyphGUI.php',
        'srag\\CustomInputGUIs\\SrLpReport\\HiddenInputGUI\\HiddenInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/HiddenInputGUI/HiddenInputGUI.php',
        'srag\\CustomInputGUIs\\SrLpReport\\InputGUIWrapperUIInputComponent\\AbstractRenderer' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/AbstractRenderer.php',
        'srag\\CustomInputGUIs\\SrLpReport\\InputGUIWrapperUIInputComponent\\InputGUIWrapperConstraint' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/InputGUIWrapperConstraint.php',
        'srag\\CustomInputGUIs\\SrLpReport\\InputGUIWrapperUIInputComponent\\InputGUIWrapperConstraint54' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/InputGUIWrapperConstraint54.php',
        'srag\\CustomInputGUIs\\SrLpReport\\InputGUIWrapperUIInputComponent\\InputGUIWrapperConstraintTrait' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/InputGUIWrapperConstraintTrait.php',
        'srag\\CustomInputGUIs\\SrLpReport\\InputGUIWrapperUIInputComponent\\InputGUIWrapperUIInputComponent' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/InputGUIWrapperUIInputComponent.php',
        'srag\\CustomInputGUIs\\SrLpReport\\InputGUIWrapperUIInputComponent\\Renderer' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/Renderer.php',
        'srag\\CustomInputGUIs\\SrLpReport\\Loader\\CustomInputGUIsLoaderDetector' => __DIR__ . '/..' . '/srag/custominputguis/src/Loader/CustomInputGUIsLoaderDetector.php',
        'srag\\CustomInputGUIs\\SrLpReport\\MultiLineInputGUI\\MultiLineInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiLineInputGUI/MultiLineInputGUI.php',
        'srag\\CustomInputGUIs\\SrLpReport\\MultiLineNewInputGUI\\MultiLineNewInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiLineNewInputGUI/MultiLineNewInputGUI.php',
        'srag\\CustomInputGUIs\\SrLpReport\\MultiSelectSearchInputGUI\\MultiSelectSearchInput2GUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchInputGUI/MultiSelectSearchInput2GUI.php',
        'srag\\CustomInputGUIs\\SrLpReport\\MultiSelectSearchInputGUI\\MultiSelectSearchInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchInputGUI/MultiSelectSearchInputGUI.php',
        'srag\\CustomInputGUIs\\SrLpReport\\MultiSelectSearchNewInputGUI\\AbstractAjaxAutoCompleteCtrl' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchNewInputGUI/AbstractAjaxAutoCompleteCtrl.php',
        'srag\\CustomInputGUIs\\SrLpReport\\MultiSelectSearchNewInputGUI\\MultiSelectSearchNewInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchNewInputGUI/MultiSelectSearchNewInputGUI.php',
        'srag\\CustomInputGUIs\\SrLpReport\\MultiSelectSearchNewInputGUI\\ObjectChildrenAjaxAutoCompleteCtrl' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchNewInputGUI/class.ObjectChildrenAjaxAutoCompleteCtrl.php',
        'srag\\CustomInputGUIs\\SrLpReport\\MultiSelectSearchNewInputGUI\\ObjectsAjaxAutoCompleteCtrl' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchNewInputGUI/class.ObjectsAjaxAutoCompleteCtrl.php',
        'srag\\CustomInputGUIs\\SrLpReport\\MultiSelectSearchNewInputGUI\\OrgUnitAjaxAutoCompleteCtrl' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchNewInputGUI/class.OrgUnitAjaxAutoCompleteCtrl.php',
        'srag\\CustomInputGUIs\\SrLpReport\\MultiSelectSearchNewInputGUI\\UsersAjaxAutoCompleteCtrl' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchNewInputGUI/class.UsersAjaxAutoCompleteCtrl.php',
        'srag\\CustomInputGUIs\\SrLpReport\\NumberInputGUI\\NumberInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/NumberInputGUI/NumberInputGUI.php',
        'srag\\CustomInputGUIs\\SrLpReport\\PropertyFormGUI\\ConfigPropertyFormGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/ConfigPropertyFormGUI.php',
        'srag\\CustomInputGUIs\\SrLpReport\\PropertyFormGUI\\Exception\\PropertyFormGUIException' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/Exception/PropertyFormGUIException.php',
        'srag\\CustomInputGUIs\\SrLpReport\\PropertyFormGUI\\Items\\Items' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/Items/Items.php',
        'srag\\CustomInputGUIs\\SrLpReport\\PropertyFormGUI\\ObjectPropertyFormGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/ObjectPropertyFormGUI.php',
        'srag\\CustomInputGUIs\\SrLpReport\\PropertyFormGUI\\PropertyFormGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/PropertyFormGUI.php',
        'srag\\CustomInputGUIs\\SrLpReport\\ScreenshotsInputGUI\\ScreenshotsInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/ScreenshotsInputGUI/ScreenshotsInputGUI.php',
        'srag\\CustomInputGUIs\\SrLpReport\\StaticHTMLPresentationInputGUI\\StaticHTMLPresentationInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/StaticHTMLPresentationInputGUI/StaticHTMLPresentationInputGUI.php',
        'srag\\CustomInputGUIs\\SrLpReport\\TableGUI\\Exception\\TableGUIException' => __DIR__ . '/..' . '/srag/custominputguis/src/TableGUI/Exception/TableGUIException.php',
        'srag\\CustomInputGUIs\\SrLpReport\\TableGUI\\TableGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TableGUI/TableGUI.php',
        'srag\\CustomInputGUIs\\SrLpReport\\TabsInputGUI\\MultilangualTabsInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TabsInputGUI/MultilangualTabsInputGUI.php',
        'srag\\CustomInputGUIs\\SrLpReport\\TabsInputGUI\\TabsInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TabsInputGUI/TabsInputGUI.php',
        'srag\\CustomInputGUIs\\SrLpReport\\TabsInputGUI\\TabsInputGUITab' => __DIR__ . '/..' . '/srag/custominputguis/src/TabsInputGUI/TabsInputGUITab.php',
        'srag\\CustomInputGUIs\\SrLpReport\\Template\\Template' => __DIR__ . '/..' . '/srag/custominputguis/src/Template/Template.php',
        'srag\\CustomInputGUIs\\SrLpReport\\TextAreaInputGUI\\TextAreaInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TextAreaInputGUI/TextAreaInputGUI.php',
        'srag\\CustomInputGUIs\\SrLpReport\\TextInputGUI\\TextInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TextInputGUI/TextInputGUI.php',
        'srag\\CustomInputGUIs\\SrLpReport\\TextInputGUI\\TextInputGUIWithModernAutoComplete' => __DIR__ . '/..' . '/srag/custominputguis/src/TextInputGUI/TextInputGUIWithModernAutoComplete.php',
        'srag\\CustomInputGUIs\\SrLpReport\\UIInputComponentWrapperInputGUI\\UIInputComponentWrapperInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/UIInputComponentWrapperInputGUI/UIInputComponentWrapperInputGUI.php',
        'srag\\CustomInputGUIs\\SrLpReport\\UIInputComponentWrapperInputGUI\\UIInputComponentWrapperNameSource' => __DIR__ . '/..' . '/srag/custominputguis/src/UIInputComponentWrapperInputGUI/UIInputComponentWrapperNameSource.php',
        'srag\\CustomInputGUIs\\SrLpReport\\ViewControlModeUI\\ViewControlModeUI' => __DIR__ . '/..' . '/srag/custominputguis/src/ViewControlModeGUI/ViewControlModeUI.php',
        'srag\\CustomInputGUIs\\SrLpReport\\Waiter\\Waiter' => __DIR__ . '/..' . '/srag/custominputguis/src/Waiter/Waiter.php',
        'srag\\CustomInputGUIs\\SrLpReport\\WeekdayInputGUI\\WeekdayInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/WeekdayInputGUI/WeekdayInputGUI.php',
        'srag\\DIC\\SrLpReport\\DICStatic' => __DIR__ . '/..' . '/srag/dic/src/DICStatic.php',
        'srag\\DIC\\SrLpReport\\DICStaticInterface' => __DIR__ . '/..' . '/srag/dic/src/DICStaticInterface.php',
        'srag\\DIC\\SrLpReport\\DICTrait' => __DIR__ . '/..' . '/srag/dic/src/DICTrait.php',
        'srag\\DIC\\SrLpReport\\DIC\\AbstractDIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/AbstractDIC.php',
        'srag\\DIC\\SrLpReport\\DIC\\DICInterface' => __DIR__ . '/..' . '/srag/dic/src/DIC/DICInterface.php',
        'srag\\DIC\\SrLpReport\\DIC\\Implementation\\ILIAS54DIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/Implementation/ILIAS54DIC.php',
        'srag\\DIC\\SrLpReport\\DIC\\Implementation\\ILIAS60DIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/Implementation/ILIAS60DIC.php',
        'srag\\DIC\\SrLpReport\\Database\\AbstractILIASDatabaseDetector' => __DIR__ . '/..' . '/srag/dic/src/Database/AbstractILIASDatabaseDetector.php',
        'srag\\DIC\\SrLpReport\\Database\\DatabaseDetector' => __DIR__ . '/..' . '/srag/dic/src/Database/DatabaseDetector.php',
        'srag\\DIC\\SrLpReport\\Database\\DatabaseInterface' => __DIR__ . '/..' . '/srag/dic/src/Database/DatabaseInterface.php',
        'srag\\DIC\\SrLpReport\\Database\\PdoContextHelper' => __DIR__ . '/..' . '/srag/dic/src/Database/PdoContextHelper.php',
        'srag\\DIC\\SrLpReport\\Database\\PdoStatementContextHelper' => __DIR__ . '/..' . '/srag/dic/src/Database/PdoStatementContextHelper.php',
        'srag\\DIC\\SrLpReport\\Exception\\DICException' => __DIR__ . '/..' . '/srag/dic/src/Exception/DICException.php',
        'srag\\DIC\\SrLpReport\\Loader\\AbstractLoaderDetector' => __DIR__ . '/..' . '/srag/dic/src/Loader/AbstractLoaderDetector.php',
        'srag\\DIC\\SrLpReport\\Output\\Output' => __DIR__ . '/..' . '/srag/dic/src/Output/Output.php',
        'srag\\DIC\\SrLpReport\\Output\\OutputInterface' => __DIR__ . '/..' . '/srag/dic/src/Output/OutputInterface.php',
        'srag\\DIC\\SrLpReport\\PHPVersionChecker' => __DIR__ . '/..' . '/srag/dic/src/PHPVersionChecker.php',
        'srag\\DIC\\SrLpReport\\Plugin\\Plugin' => __DIR__ . '/..' . '/srag/dic/src/Plugin/Plugin.php',
        'srag\\DIC\\SrLpReport\\Plugin\\PluginInterface' => __DIR__ . '/..' . '/srag/dic/src/Plugin/PluginInterface.php',
        'srag\\DIC\\SrLpReport\\Plugin\\Pluginable' => __DIR__ . '/..' . '/srag/dic/src/Plugin/Pluginable.php',
        'srag\\DIC\\SrLpReport\\Util\\LibraryLanguageInstaller' => __DIR__ . '/..' . '/srag/dic/src/Util/LibraryLanguageInstaller.php',
        'srag\\DIC\\SrLpReport\\Version\\Version' => __DIR__ . '/..' . '/srag/dic/src/Version/Version.php',
        'srag\\DIC\\SrLpReport\\Version\\VersionInterface' => __DIR__ . '/..' . '/srag/dic/src/Version/VersionInterface.php',
        'srag\\LearningProgressPieUI\\SrLpReport\\AbstractLearningProgressPieUI' => __DIR__ . '/..' . '/srag/learningprogresspieui/src/AbstractLearningProgressPieUI.php',
        'srag\\LearningProgressPieUI\\SrLpReport\\CountLearningProgressPieUI' => __DIR__ . '/..' . '/srag/learningprogresspieui/src/CountLearningProgressPieUI.php',
        'srag\\LearningProgressPieUI\\SrLpReport\\Factory' => __DIR__ . '/..' . '/srag/learningprogresspieui/src/Factory.php',
        'srag\\LearningProgressPieUI\\SrLpReport\\LearningProgressPieUITrait' => __DIR__ . '/..' . '/srag/learningprogresspieui/src/LearningProgressPieUITrait.php',
        'srag\\LearningProgressPieUI\\SrLpReport\\ObjIdsLearningProgressPieUI' => __DIR__ . '/..' . '/srag/learningprogresspieui/src/ObjIdsLearningProgressPieUI.php',
        'srag\\LearningProgressPieUI\\SrLpReport\\UsrIdsLearningProgressPieUI' => __DIR__ . '/..' . '/srag/learningprogresspieui/src/UsrIdsLearningProgressPieUI.php',
        'srag\\LibrariesNamespaceChanger\\GeneratePluginPhpAndXml' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/GeneratePluginPhpAndXml.php',
        'srag\\LibrariesNamespaceChanger\\LibrariesNamespaceChanger' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/LibrariesNamespaceChanger.php',
        'srag\\LibrariesNamespaceChanger\\PHP72Backport' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/PHP72Backport.php',
        'srag\\LibrariesNamespaceChanger\\PHP7Backport' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/PHP7Backport.php',
        'srag\\LibrariesNamespaceChanger\\RemovePHP72Backport' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/RemovePHP72Backport.php',
        'srag\\LibrariesNamespaceChanger\\UpdatePluginReadme' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/UpdatePluginReadme.php',
        'srag\\PieChart\\SrLpReport\\Component\\Factory' => __DIR__ . '/..' . '/srag/piechart/src/Component/Factory.php',
        'srag\\PieChart\\SrLpReport\\Component\\LegendEntry' => __DIR__ . '/..' . '/srag/piechart/src/Component/LegendEntry.php',
        'srag\\PieChart\\SrLpReport\\Component\\PieChart' => __DIR__ . '/..' . '/srag/piechart/src/Component/PieChart.php',
        'srag\\PieChart\\SrLpReport\\Component\\PieChartItem' => __DIR__ . '/..' . '/srag/piechart/src/Component/PieChartItem.php',
        'srag\\PieChart\\SrLpReport\\Component\\Section' => __DIR__ . '/..' . '/srag/piechart/src/Component/Section.php',
        'srag\\PieChart\\SrLpReport\\Component\\SectionValue' => __DIR__ . '/..' . '/srag/piechart/src/Component/SectionValue.php',
        'srag\\PieChart\\SrLpReport\\Implementation\\Factory' => __DIR__ . '/..' . '/srag/piechart/src/Implementation/Factory.php',
        'srag\\PieChart\\SrLpReport\\Implementation\\LegendEntry' => __DIR__ . '/..' . '/srag/piechart/src/Implementation/LegendEntry.php',
        'srag\\PieChart\\SrLpReport\\Implementation\\PieChart' => __DIR__ . '/..' . '/srag/piechart/src/Implementation/PieChart.php',
        'srag\\PieChart\\SrLpReport\\Implementation\\PieChartItem' => __DIR__ . '/..' . '/srag/piechart/src/Implementation/PieChartItem.php',
        'srag\\PieChart\\SrLpReport\\Implementation\\Renderer' => __DIR__ . '/..' . '/srag/piechart/src/Implementation/Renderer.php',
        'srag\\PieChart\\SrLpReport\\Implementation\\Section' => __DIR__ . '/..' . '/srag/piechart/src/Implementation/Section.php',
        'srag\\PieChart\\SrLpReport\\Implementation\\SectionValue' => __DIR__ . '/..' . '/srag/piechart/src/Implementation/SectionValue.php',
        'srag\\Plugins\\SrLpReport\\Access\\Access' => __DIR__ . '/../..' . '/src/Access/Access.php',
        'srag\\Plugins\\SrLpReport\\Access\\Ilias' => __DIR__ . '/../..' . '/src/Access/Ilias.php',
        'srag\\Plugins\\SrLpReport\\Block\\BaseCommentsCourseBlock' => __DIR__ . '/../..' . '/src/Block/BaseCommentsCourseBlock.php',
        'srag\\Plugins\\SrLpReport\\Block\\BaseCommentsPersonalDesktopBlock' => __DIR__ . '/../..' . '/src/Block/BaseCommentsPersonalDesktopBlock.php',
        'srag\\Plugins\\SrLpReport\\Block\\CommentsCourseBlock53' => __DIR__ . '/../..' . '/src/Block/CommentsCourseBlock53.php',
        'srag\\Plugins\\SrLpReport\\Block\\CommentsCourseBlock54' => __DIR__ . '/../..' . '/src/Block/CommentsCourseBlock54.php',
        'srag\\Plugins\\SrLpReport\\Block\\CommentsPersonalDesktopBlock53' => __DIR__ . '/../..' . '/src/Block/CommentsPersonalDesktopBlock53.php',
        'srag\\Plugins\\SrLpReport\\Block\\CommentsPersonalDesktopBlock54' => __DIR__ . '/../..' . '/src/Block/CommentsPersonalDesktopBlock54.php',
        'srag\\Plugins\\SrLpReport\\Comment\\Ctrl\\AbstractCtrl' => __DIR__ . '/../..' . '/src/Comment/Ctrl/AbstractCtrl.php',
        'srag\\Plugins\\SrLpReport\\Comment\\Ctrl\\CourseCtrl' => __DIR__ . '/../..' . '/src/Comment/Ctrl/class.CourseCtrl.php',
        'srag\\Plugins\\SrLpReport\\Comment\\Ctrl\\PersonalDesktopCtrl' => __DIR__ . '/../..' . '/src/Comment/Ctrl/class.PersonalDesktopCtrl.php',
        'srag\\Plugins\\SrLpReport\\Comment\\Ctrl\\ReportCtrl' => __DIR__ . '/../..' . '/src/Comment/Ctrl/class.ReportCtrl.php',
        'srag\\Plugins\\SrLpReport\\Config\\Config' => __DIR__ . '/../..' . '/src/Config/Config.php',
        'srag\\Plugins\\SrLpReport\\Config\\ConfigFormGUI' => __DIR__ . '/../..' . '/src/Config/ConfigFormGUI.php',
        'srag\\Plugins\\SrLpReport\\Report\\AbstractReport2TableGUI' => __DIR__ . '/../..' . '/src/Report/AbstractReport2TableGUI.php',
        'srag\\Plugins\\SrLpReport\\Report\\AbstractReportGUI' => __DIR__ . '/../..' . '/src/Report/AbstractReportGUI.php',
        'srag\\Plugins\\SrLpReport\\Report\\AbstractReportTableGUI' => __DIR__ . '/../..' . '/src/Report/AbstractReportTableGUI.php',
        'srag\\Plugins\\SrLpReport\\Report\\ConfigPerObject\\ConfigPerObject' => __DIR__ . '/../..' . '/src/Report/ConfigPerObject/ConfigPerObject.php',
        'srag\\Plugins\\SrLpReport\\Report\\ConfigPerObject\\ConfigPerObjectFormGUI' => __DIR__ . '/../..' . '/src/Report/ConfigPerObject/ConfigPerObjectFormGUI.php',
        'srag\\Plugins\\SrLpReport\\Report\\ConfigPerObject\\ConfigPerObjectGUI' => __DIR__ . '/../..' . '/src/Report/ConfigPerObject/class.ConfigPerObjectGUI.php',
        'srag\\Plugins\\SrLpReport\\Report\\ConfigPerObject\\ConfigPerObjects' => __DIR__ . '/../..' . '/src/Report/ConfigPerObject/ConfigPerObjects.php',
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
        'srag\\Plugins\\SrLpReport\\Staff\\CourseAdministration\\CourseAdministration' => __DIR__ . '/../..' . '/src/Staff/CourseAdministration/CourseAdministration.php',
        'srag\\Plugins\\SrLpReport\\Staff\\CourseAdministration\\CourseAdministrationEnrollment' => __DIR__ . '/../..' . '/src/Staff/CourseAdministration/CourseAdministrationEnrollment.php',
        'srag\\Plugins\\SrLpReport\\Staff\\CourseAdministration\\CourseAdministrationMultiEnrollSelectFormGUI' => __DIR__ . '/../..' . '/src/Staff/CourseAdministration/CourseAdministrationMultiEnrollSelectFormGUI.php',
        'srag\\Plugins\\SrLpReport\\Staff\\CourseAdministration\\CourseAdministrationMultiSignoutSelectFormGUI' => __DIR__ . '/../..' . '/src/Staff/CourseAdministration/CourseAdministrationMultiSignoutSelectFormGUI.php',
        'srag\\Plugins\\SrLpReport\\Staff\\CourseAdministration\\CourseAdministrationStaffGUI' => __DIR__ . '/../..' . '/src/Staff/CourseAdministration/class.CourseAdministrationStaffGUI.php',
        'srag\\Plugins\\SrLpReport\\Staff\\CourseAdministration\\CourseAdministrationTableGUI' => __DIR__ . '/../..' . '/src/Staff/CourseAdministration/CourseAdministrationTableGUI.php',
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
        'srag\\RemovePluginDataConfirm\\SrLpReport\\BasePluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/BasePluginUninstallTrait.php',
        'srag\\RemovePluginDataConfirm\\SrLpReport\\PluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/PluginUninstallTrait.php',
        'srag\\RemovePluginDataConfirm\\SrLpReport\\RemovePluginDataConfirmCtrl' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/class.RemovePluginDataConfirmCtrl.php',
        'srag\\RemovePluginDataConfirm\\SrLpReport\\RepositoryObjectPluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/RepositoryObjectPluginUninstallTrait.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc782db8ddd5f29172129184e2711b5cc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc782db8ddd5f29172129184e2711b5cc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc782db8ddd5f29172129184e2711b5cc::$classMap;

        }, null, ClassLoader::class);
    }
}
