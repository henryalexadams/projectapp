<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to the Curious Little <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>This is a code test project.</p>

<p>Here is a brief paraphrasing of the requirements for the project:</p>
<ul>
	<li>There will projects and sub projects that exist in the same table.</li>
	<li>These sub project will be connected to projects.</li>
    <li>This app is built in the Yii Framework, which is the framework the developer is most proficient in.</li>
    <li>Bonus Item 1 deals with an ajax file upload.  This is not implemented here, but ajax is used in other areas, such as the paging in the right sidebar.</li>
    <li>Bonus Item 2 deals with validation and storage of the uploaded item.  This is not implemented here, though validation is implemented in other data areas.</li>
    <li>Super Bonus Item 1 deals with a multi-tenant capability.  This is not implemented here.</li>
    <li>Super Bonus Item 2 deals with the implementation of bootstrap.  Bootstrap is fully implemented in this site.</li>
</ul>
<p>Notes about this development.</p>
<ul>
	<li>This is a fully compliant Yii site.</li>
    <li>This is a pure MVC site.</li>
    <li>All Yii conventions have been followed.</li>
    <li>Custom coding does exist, but has been avoided.</li>
    <li>Instead, Yii widgets, extensions, and components have been used wherever possible.</li>
    <li>Full authentication has been included in the site.</li>
</ul>
<p>Due to the time required to develop this little app, I choose to create something that will have lasting value to me.  Therefore some liberties have been taken with the requirements.</p>
<p>The data structure has been embellished to encompass tables and fields used in the "insight.ly" app, plus other information to conform with my own development standards.</p>
<p>All of the data structures included in the site have full CRUD functionality, but only the pages supporting projects and their derivative tables have been finished to any degree of refinement.</p>
<p>Some functionality is denied to the unauthenticated user.  To experience full functionality, please log in with the username and password that were supplied to you via email.</p>
<p>The About page explains the connections between projects.</p>
