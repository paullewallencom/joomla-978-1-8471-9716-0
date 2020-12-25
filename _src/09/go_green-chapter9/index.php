<?php
defined('_JEXEC') or die('Restricted access');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>">
<head>
<jdoc:include type="head" />

<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery.lightbox-0.5.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/suckerfish.js"></script>

<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />

<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />

<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/jquery.lightbox-0.5.css" media="screen" />

<script type="text/javascript">
$(function() {
	$('#page p:not(.buttonheading) a:has(img)').lightBox(); // Select all links in an XHTML area with page ID
});
</script>


</head>

<body>
<?php //print_r($this->_file); ?>
<a name="top"></a><!--anchor for top-->
<div id="container" class="<?php echo $this->params->get("logoType"); ?>"><!--container goes here-->

<!-- Begin #container2 this holds the content and container 3-->
<div id="container2">


<!-- Begin #container3 keeps the left col and right col positioned-->
<div id="container3">
<div id="header" class="<?php echo $this->params->get("logoType"); ?>">

<!--//start top mod-->
<jdoc:include type="modules" name="top" style="xhtml" />
<!--//end top mod-->


<h1><?php echo $this->params->get("logoText"); ?></h1>
<h4><?php echo $this->params->get("sloganText"); ?></h4>

<div class="leftWidth quickMargin">
<div id="user1">

<!--//start user1 mod-->
<jdoc:include type="modules" name="user1" style="beezDivision" />
<!--//end user1 mod-->

</div><!--//user1-->

<div id="user2">

<!--//start user2 mod-->
<jdoc:include type="modules" name="user2" style="xhtml" />
<!--//end user2 mod-->
 
</div><!--//user2-->

</div><!--//user container-->
</div><!--//header-->

<?php if (!$this->countModules('user3') and $this->countModules('right')): ?>
<!--there are no user 3 items-->

<!-- Begin #content -->
<div id="contentWide">

<!--//start joomla component-->
<jdoc:include type="component" />
<!--//end joomla component-->

</div><!-- //contentWide -->

</div><!--//container3-->

<!-- #right sidebar -->
<div id="sidebarRT">

<div id="user4">

<!--//start user4 mod-->
<jdoc:include type="modules" name="user4" style="xhtml" />
<!--//end user4 mod-->

</div><!--//user4-->

<div id="right">

<!--//start right mod-->
<jdoc:include type="modules" name="right" style="xhtml" />
<!--//end right mod-->

</div><!--//right-->

</div><!--//sidebarRT --> 

<?php  elseif (!$this->countModules('user3 and right')): ?>
<!--there are no user3 AND no right modules-->

<!-- Begin #fullScreen -->
<div id="fullScreen">

<!--//start joomla component-->
<jdoc:include type="component" />
<!--//end joomla component-->

</div><!-- //fullScreen -->

</div><!--//container3-->

<?php else:?>
<!--//there is at least user3 modules-->

<!-- Begin #content -->
<div id="content">

<!--//start joomla component-->
<jdoc:include type="component" />
<!--//end joomla component-->

</div><!-- //content -->


<!-- #left sidebar -->
<div id="sidebarLT">

<div id="user3">
 
<!--//start user3 mod-->
<jdoc:include type="modules" name="user3" style="xhtml" />
<!--//end user3 mod-->

</div><!--//user3-->

</div><!--//sidebarLT  -->

</div><!--//container3-->

<!-- #right sidebar -->
<div id="sidebarRT">

<div id="user4">

<!--//start user4 mod-->
<jdoc:include type="modules" name="user4" style="xhtml" />
<!--//end user4 mod-->

</div><!--//user4-->

<div id="right">

<!--//start right mod-->
<jdoc:include type="modules" name="right" style="xhtml" />
<!--//end right mod-->

</div><!--//right-->

</div><!--//sidebarRT --> 


<?php endif; ?>


<div id="pushbottom"> </div><!--//this div will span across the 3 divs above it making sure the footer stays at the bottom of the longest column-->

</div><!--//container2-->

<div id="top_navlist">
<!--//start left mod-->
<jdoc:include type="modules" name="left" style="xhtml" />
<!--//end left mod-->
</div><!--//top_navlist-->


</div><!--//container-->

<div id="acrossBottom">

<div id="footer">

<!--//start footer mod-->
<jdoc:include type="modules" name="footer" style="xhtml" />
<!--//end footer mod-->

</div><!--//footer-->


</div><!--//acrossBottom-->

<div id="debug"><br/>debug area<br/>
<!--//start deug mod-->
<jdoc:include type="modules" name="debug" style="xhtml" />
<!--//end debug mod-->

</div><!--//debug-->



</body>

</html>