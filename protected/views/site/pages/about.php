<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'About',
);
?>
<h1>About</h1>

<p>This is how projects are related or connected to other projects.</p>
<p>The main project view page, the one that focuses you on a single project record, also lists other projects that are connected to the focus project below the single record.  It also displays a list of all projects in the right sidebar.</p>
<p>You will notice, if you are logged in, that the sub projects in the connected list have a small "disconnect" icon in the top right of their "tile".  Similarly, each tile in the sidebar project list has a "connect" icon in the upper right corner.</p>
<p>To connect a project to the currently focused project, simply click the "connect" icon in any project tile in the sidebar list.  To disconnect a sub project from a project, simply click the "disconnect" icon in any project tile in the sub project list.</p>
<p>That's all there is to it.</p>
<p>Note:  This is deliberately a looser relationship structure than a traditional parent/child relationship, due to the requirements for the future intentions for this app.</p>
