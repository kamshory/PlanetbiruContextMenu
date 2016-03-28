<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Context Menu</title>
<link rel="stylesheet" type="text/css" href="kamscontextmenu.css">
<style type="text/css">
.context-menu, .context-menu-merged, #context-menu{
	border:1px solid #DDDDDD;
	width:400px;
	height:200px;
	padding:20px;
	margin-bottom:10px;
}
pre{
	background-color:#FAFAFA;
	border:1px solid #EEEEEE;
	padding:10px;
	overflow:auto;
}



#kamscontextmenu ul > li > a.merged-icon{
background-repeat:no-repeat;
background-image:url(merged.gif);
}
#kamscontextmenu ul > li > a.merged-icon.edit-copy{background-position:6px -51px;}
#kamscontextmenu ul > li > a.merged-icon.copy-dir{background-position:6px -79px;}
#kamscontextmenu ul > li > a.merged-icon.file-new{background-position:6px -135px;}
#kamscontextmenu ul > li > a.merged-icon.edit-cut{background-position:6px -163px;}
#kamscontextmenu ul > li > a.merged-icon.file-save{background-position:6px -219px;}
#kamscontextmenu ul > li > a.merged-icon.file-open{background-position:6px -443px;}
#kamscontextmenu ul > li > a.merged-icon.edit-paste{background-position:6px -499px;}

</style>
<script type="text/javascript" src="kamscontextmenu.js"></script>
<script type="text/javascript">
window.onload = function()
{
	var menu2 = {'item':[
		{'text':'Menu 1', 'onclick':function(e){alert('You click Menu 1');e.preventDefault();}},
		{'text':'Planetbiru', 'href':'http://www.planetbiru.com'},
		{'text':'Planetbiru', 'href':'http://www.planetbiru.com', 'target':'_blank'}
	]};
	var menu_edit = {'title':'Edit Document', 'item':[
		{'text':'Copy', 'onclick':function(e){alert('You click Copy');e.preventDefault();}, 'class':'edit-copy', 'icon':'edit-copy.png'},
		{'text':'Paste', 'onclick':function(e){alert('You click Paste');e.preventDefault();}, 'class':'edit-paste', 'icon':'edit-paste.png'},
		{'text':'Cut', 'onclick':function(e){alert('You click Cut');e.preventDefault();}, 'class':'edit-cut', 'icon':'edit-cut.png'},
		{'text':'Undo', 'onclick':function(e){alert('You click Undo');e.preventDefault();}, 'class':'edit-undo', 'icon':'edit-undo.png'},
		{'text':'Redo', 'onclick':function(e){alert('You click Redo');e.preventDefault();}, 'class':'edit-redo', 'icon':'edit-redo.png'},
		{'text':'Find', 'onclick':function(e){alert('You click Find');e.preventDefault();}, 'class':'edit-find', 'icon':'edit-find.png'},
		{'text':'Replace', 'onclick':function(e){alert('You click Replace');e.preventDefault();}, 'class':'edit-replace', 'icon':'edit-replace.png'},

	]};

	var menu_export = {'title':'Export Document', 'item':[
		{'text':'Word Document', 'onclick':function(e){alert('You click Word Document');e.preventDefault();}},
		{'text':'Worksheet Document', 'onclick':function(e){alert('You click Worksheet Document');e.preventDefault();}},
		{'text':'Portable Document Format', 'onclick':function(e){alert('You click Portable Document Format');e.preventDefault();}}
	]};

	var menu_import = {'title':'Import Document', 'item':[
		{'text':'Word Document', 'onclick':function(e){alert('You click Word Document');e.preventDefault();}},
		{'text':'Worksheet Document', 'onclick':function(e){alert('You click Worksheet Document');e.preventDefault();}},
		{'text':'Portable Document Format', 'onclick':function(e){alert('You click Portable Document Format');e.preventDefault();}}
	]};

	var menu1 = {'title':'Context Menu 1', 'item':[
		{'text':'New File', 'onclick':function(e){alert('You click New File');e.preventDefault();}, 'class':'file-new', 'icon':'file-new.png'},
		{'text':'New Project', 'onclick':function(e){alert('You click New Project');e.preventDefault();}, 'class':'file-new', 'icon':'file-new.png'},
		{'text':'Open File', 'onclick':function(e){alert('You click Open File');e.preventDefault();}, 'class':'file-open', 'icon':'file-open.png'},
		{'text':'Open Project', 'onclick':function(e){alert('You click Open Project');e.preventDefault();}, 'class':'file-open', 'icon':'file-open.png'},
		{'text':'Save File', 'onclick':function(e){alert('You click Save File');e.preventDefault();}, 'class':'file-save', 'icon':'file-save.png'},
		{'text':'Save Project', 'onclick':function(e){alert('You click Save Project');e.preventDefault();}, 'class':'file-save', 'icon':'file-save.png'},
		{'text':'Edit', 'class':'edit', 'icon':'edit.png', 'children':menu_edit},
		{'text':'Import', 'icon':'document-import.png', 'children':menu_import},
		{'text':'Export', 'icon':'document-export.png', 'children':menu_export},
		{'text':'Visit Planetbiru', 'href':'http://www.planetbiru.com', 'icon':'planetbiru.png'}
	]};



	var menu10 = {'item':[
		{'text':'New File', 'onclick':function(e){alert('You click New File');e.preventDefault();}, 'class':'merged-icon file-new'},
		{'text':'New Project', 'onclick':function(e){alert('You click New Project');e.preventDefault();}, 'class':'merged-icon file-new'},
		{'text':'Open File', 'onclick':function(e){alert('You click Open File');e.preventDefault();}, 'class':'merged-icon file-open'},
		{'text':'Open Project', 'onclick':function(e){alert('You click Open Project');e.preventDefault();}, 'class':'merged-icon file-open'},
		{'text':'Copy', 'onclick':function(e){alert('You click Copy');e.preventDefault();}, 'class':'merged-icon edit-copy'},
		{'text':'Cut', 'onclick':function(e){alert('You click Cut');e.preventDefault();}, 'class':'merged-icon edit-cut'},
		{'text':'Paste', 'onclick':function(e){alert('You click Paste');e.preventDefault();}, 'class':'merged-icon edit-paste'},
		{'text':'Save File', 'onclick':function(e){alert('You click Save File');e.preventDefault();}, 'class':'merged-icon file-save'},
		{'text':'Save Project', 'onclick':function(e){alert('You click Save Project');e.preventDefault();}, 'class':'merged-icon file-save'}
	]};

	
	var el1 = document.getElementsByClassName('context-menu')[0];
	var cm1 = contextMenu(el1, menu1);
	
	var el2 = document.getElementById('context-menu');
	var cm2 = contextMenu(el2, menu2);
	
	var el10 = document.getElementsByClassName('context-menu-merged')[0];
	var cm10 = contextMenu(el10, menu10);
}

</script>
</head>

<body>
<h1>KamsContextMenu</h1>
<h2>JavaScript Context Menu without jQuery</h2>
<p>Sometime, developer don't want to use jQuery for simple application because of efficiency reason. For example, developer make a simple application that must be loaded fastly. But on the same time, they need to create context menu. </p>
<p>This project allow you to create the context menu without jQuery. This library is very small. The JavaScript file size is about 2 kb and the CSS file size also about 2 kb.</p>
<h3>Example</h3>

<h4>Example 1</h4>
<p>Context menu with title and submenu.</p>
<div class="context-menu">
  <p>Right click here to show context menu</p>
</div>

<h4>Example 2</h4>
<p>Simple context menu without title.</p>
<div id="context-menu">
  <p>Right click here to show context menu</p>
</div>

<h4>Example 3</h4>
<p>Simple context menu with merged icon file.</p>
<div class="context-menu-merged">
  <p>Right click here to show context menu</p>
</div>

<h3>Requirement</h3>
<p>The context menu is not require jQuery. You need to include <strong><a href="kamscontextmenu.js">kamscontextmenu.js</a></strong> and <strong><a href="kamscontextmenu.css">kamscontextmenu.css</a></strong> to your web page. If you want to increase the speed, you can use minimized version of these files.</p>
<h3>Menu Object</h3>
<p>Menu is an object. The attributes of menu are as follow:</p>
<ol>
  <li><strong>title</strong> <br>
  title is the title is menu. title is optional. </li>
  <li><strong>item</strong> <br>
  item is menu array containing the menu item. Each item is an object.</li>
</ol>
<h3>Menu Item</h3>
<p>Menu item is an object. The attributes of menu item are as follow:</p>
<ol>
  <li><strong>text</strong> <br>
  text is the caption of the menu item. </li>
  <li><strong>href</strong> <br>
    href is URL linked by the menu item. If it is not specify, it will be &quot;#&quot;.
  </li>
  <li><strong>target</strong><br>
    target is the target of the menu item. It is similiar with the conventional hyperlink.
  </li>
  <li><strong>onclick</strong> <br>
  onclick is a function that will be executed if user click the menu item. </li>
  <li><strong>class</strong> <br>
  class is class of the menu item. This is usefull for any purpose.</li>
  <li><strong>icon</strong> <br>
    icon is URL to an image of the menu item. The
  dimension of the icon must be 16x16 pixels.</li>
  <li><strong>children</strong> <br>
  children is anoter menu object. The context menu can be create as hierarchical menu.</li>
</ol>
<p>If you want to merge icon into one file, you can use class and additional CSS code. </p>
<h3>Example</h3>

<pre>&lt;!DOCTYPE html&gt;
&lt;html xmlns=&quot;http://www.w3.org/1999/xhtml&quot;&gt;
&lt;head&gt;
  &lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=utf-8&quot; /&gt;
  &lt;title&gt;Context Menu&lt;/title&gt;
  &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;kamscontextmenu.css&quot;&gt;
  &lt;style type=&quot;text/css&quot;&gt;
    .context-menu, .context-menu-merged, #context-menu{
        border:1px solid #DDDDDD;
        width:400px;
        height:200px;
        padding:20px;
        margin-bottom:10px;
    }
    pre{
        background-color:#FAFAFA;
        border:1px solid #EEEEEE;
        padding:10px;
        overflow:auto;
    }
    
    
    
  #kamscontextmenu ul > li > a{
    background-repeat:no-repeat;
    background-image:url(merged.gif);
  }
  #kamscontextmenu ul > li > a.merged-icon.edit-copy{background-position:6px -51px;}
  #kamscontextmenu ul > li > a.merged-icon.copy-dir{background-position:6px -79px;}
  #kamscontextmenu ul > li > a.merged-icon.file-new{background-position:6px -135px;}
  #kamscontextmenu ul > li > a.merged-icon.edit-cut{background-position:6px -163px;}
  #kamscontextmenu ul > li > a.merged-icon.file-save{background-position:6px -219px;}
  #kamscontextmenu ul > li > a.merged-icon.file-open{background-position:6px -443px;}
  #kamscontextmenu ul > li > a.merged-icon.edit-paste{background-position:6px -499px;}

  &lt;/style&gt;
  &lt;script type=&quot;text/javascript&quot; src=&quot;kamscontextmenu.js&quot;&gt;&lt;/script&gt;
  &lt;script type=&quot;text/javascript&quot;&gt;
  window.onload = function()
  {
  var menu2 = {'item':[
  {'text':'Menu 1', 'onclick':function(e){alert('You click Menu 1');e.preventDefault();}},
  {'text':'Planetbiru', 'href':'http://www.planetbiru.com'},
  {'text':'Planetbiru', 'href':'http://www.planetbiru.com', 'target':'_blank'}
  ]};
  
  var menu_edit = {'title':'Edit Document', 'item':[
  {'text':'Copy', 'onclick':function(e){alert('You click Copy');e.preventDefault();}, 'class':'edit-copy', 'icon':'edit-copy.png'},
  {'text':'Paste', 'onclick':function(e){alert('You click Paste');e.preventDefault();}, 'class':'edit-paste', 'icon':'edit-paste.png'},
  {'text':'Cut', 'onclick':function(e){alert('You click Cut');e.preventDefault();}, 'class':'edit-cut', 'icon':'edit-cut.png'},
  {'text':'Undo', 'onclick':function(e){alert('You click Undo');e.preventDefault();}, 'class':'edit-undo', 'icon':'edit-undo.png'},
  {'text':'Redo', 'onclick':function(e){alert('You click Redo');e.preventDefault();}, 'class':'edit-redo', 'icon':'edit-redo.png'},
  {'text':'Find', 'onclick':function(e){alert('You click Find');e.preventDefault();}, 'class':'edit-find', 'icon':'edit-find.png'},
  {'text':'Replace', 'onclick':function(e){alert('You click Replace');e.preventDefault();}, 'class':'edit-replace', 'icon':'edit-replace.png'},
  ]};
  
  var menu_export = {'title':'Export Document', 'item':[
  {'text':'Word Document', 'onclick':function(e){alert('You click Word Document');e.preventDefault();}},
  {'text':'Worksheet Document', 'onclick':function(e){alert('You click Worksheet Document');e.preventDefault();}},
  {'text':'Portable Document Format', 'onclick':function(e){alert('You click Portable Document Format');e.preventDefault();}}
  ]};
  
  var menu_import = {'title':'Import Document', 'item':[
  {'text':'Word Document', 'onclick':function(e){alert('You click Word Document');e.preventDefault();}},
  {'text':'Worksheet Document', 'onclick':function(e){alert('You click Worksheet Document');e.preventDefault();}},
  {'text':'Portable Document Format', 'onclick':function(e){alert('You click Portable Document Format');e.preventDefault();}}
  ]};
  
  var menu1 = {'title':'Context Menu 1', 'item':[
  {'text':'New File', 'onclick':function(e){alert('You click New File');e.preventDefault();}, 'class':'file-new', 'icon':'file-new.png'},
  {'text':'New Project', 'onclick':function(e){alert('You click New Project');e.preventDefault();}, 'class':'file-new', 'icon':'file-new.png'},
  {'text':'Open File', 'onclick':function(e){alert('You click Open File');e.preventDefault();}, 'class':'file-open', 'icon':'file-open.png'},
  {'text':'Open Project', 'onclick':function(e){alert('You click Open Project');e.preventDefault();}, 'class':'file-open', 'icon':'file-open.png'},
  {'text':'Save File', 'onclick':function(e){alert('You click Save File');e.preventDefault();}, 'class':'file-save', 'icon':'file-save.png'},
  {'text':'Save Project', 'onclick':function(e){alert('You click Save Project');e.preventDefault();}, 'class':'file-save', 'icon':'file-save.png'},
  {'text':'Edit', 'class':'edit', 'icon':'edit.png', 'children':menu_edit},
  {'text':'Import', 'icon':'document-import.png', 'children':menu_import},
  {'text':'Export', 'icon':'document-export.png', 'children':menu_export},
  {'text':'Visit Planetbiru', 'href':'http://www.planetbiru.com', 'icon':'planetbiru.png'}
  ]};
 
  var menu10 = {'item':[
  {'text':'New File', 'onclick':function(e){alert('You click New File');e.preventDefault();}, 'class':'merged-icon file-new'},
  {'text':'New Project', 'onclick':function(e){alert('You click New Project');e.preventDefault();}, 'class':'merged-icon file-new'},
  {'text':'Open File', 'onclick':function(e){alert('You click Open File');e.preventDefault();}, 'class':'merged-icon file-open'},
  {'text':'Open Project', 'onclick':function(e){alert('You click Open Project');e.preventDefault();}, 'class':'merged-icon file-open'},
  {'text':'Copy', 'onclick':function(e){alert('You click Copy');e.preventDefault();}, 'class':'merged-icon edit-copy'},
  {'text':'Cut', 'onclick':function(e){alert('You click Cut');e.preventDefault();}, 'class':'merged-icon edit-cut'},
  {'text':'Paste', 'onclick':function(e){alert('You click Paste');e.preventDefault();}, 'class':'merged-icon edit-paste'},
  {'text':'Save File', 'onclick':function(e){alert('You click Save File');e.preventDefault();}, 'class':'merged-icon file-save'},
  {'text':'Save Project', 'onclick':function(e){alert('You click Save Project');e.preventDefault();}, 'class':'merged-icon file-save'}
  ]};
  
  // using class as selector
  var el1 = document.getElementsByClassName('context-menu')[0];
  var cm1 = contextMenu(el1, menu1);
  
  // using id as selector
  var el2 = document.getElementById('context-menu');
  var cm2 = contextMenu(el2, menu2);
  
  // using class and merged icon file
  var el10 = document.getElementsByClassName('context-menu-merged')[0];
  var cm10 = contextMenu(el10, menu10);
  
  }
  
  &lt;/script&gt;
&lt;/head&gt;

&lt;body&gt;

  &lt;div class=&quot;context-menu&quot;&gt;
    &lt;p&gt;Right click here to show context menu&lt;/p&gt;
  &lt;/div&gt;
  
  &lt;div id=&quot;context-menu&quot;&gt;
    &lt;p&gt;Right click here to show context menu&lt;/p&gt;
  &lt;/div&gt;

  &lt;div class=&quot;context-menu-merged&quot;&gt;
    &lt;p&gt;Right click here to show context menu&lt;/p&gt;
  &lt;/div&gt;
  
  
&lt;/body&gt;
&lt;/html&gt;
</pre>

</body>
</html>