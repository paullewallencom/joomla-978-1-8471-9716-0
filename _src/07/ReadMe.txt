CodePack for Chapters 7

This Pack contains the final template that was completed in Chapter 7, 

It also contains the sample fla file for the Flash header. It was created using Flash CS3. You must have Flash CS3 or later to open and edit it.

Errata Notice:
This chapter had the following errors which have been corrected in this code pack:

The Satay Objct Embed code in the "Time for action: Prepping the Flash file" section has an old swf file targeted in it. And the PHP has some incorrect syntax. The template for Chapter 7 has corrected this code.

It should be directed to the swf in your Joomla template, be sure to target the active template with the appropriate Joomla PHP functions:

the object embed tag should read:
<div id="flashHeader">
<object data="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/green-flash-sample.swf" 
      type="application/x-shockwave-flash" 
      width="320" 
      height="75" 
      FlashVars="itemID=<?php echo $newItemid;?>"> 
  <param name="movie" value="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/green-flash-sample.swf" /> 
  <param name="menu" value="false" /> 
   <param name="FlashVars" value="itemID=<?php echo $newItemid;?>"/>  
  <param name="wmode" value="transparent" /> 
  <param name="quality" value="best" /> 
</object>
