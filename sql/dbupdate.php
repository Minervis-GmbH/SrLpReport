<#1>
<?php
\srag\Plugins\SrLpReport\Config\Config::updateDB();
?>
<#2>
<?php
\srag\CommentsUI\SrLpReport\Comment\Repository::getInstance()->installTables();
?>
<#3>
<?php
\srag\CommentsUI\SrLpReport\Comment\Repository::getInstance()->installTables();
?>
<#4>
<?php
\srag\Plugins\SrLpReport\Staff\CourseAdministration\CourseAdministrationEnrollment::updateDB();
\srag\DIC\SrLpReport\DICStatic::dic()->database()->createAutoIncrement(\srag\Plugins\SrLpReport\Staff\CourseAdministration\CourseAdministrationEnrollment::TABLE_NAME, "id");
?>
