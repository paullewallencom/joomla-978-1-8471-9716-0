<!--//--><![CDATA[//><!--

sfHover = function() {
	var sfEls = document.getElementById("top_navlist").getElementsByTagName("LI");
	for (var i=0; i<sfEls.length; i++) {
		sfEls[i].onmouseover=function() {
			this.className+=" sfhover";
		}
		sfEls[i].onmouseout=function() {
			this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
		}
	}
}
if (window.attachEvent) window.attachEvent("onload", sfHover);

function doClear(theText) {
     if (theText.value == theText.defaultValue) {
         theText.value = ""
     }
}//end clear form




//--><!]]>