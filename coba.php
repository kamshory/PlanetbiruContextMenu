<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Context Menu</title>
  <style type="text/css">
  .context-menu, #context-menu{
  border:1px solid #DDDDDD;
  width:400px;
  height:200px;
  padding:20px;
  margin-bottom:10px;
  }

  </style>
  <link rel="stylesheet" type="text/css" href="kamscontextmenu.css">
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
  {'text':'Visit Planetbiru.Com', 'href':'http://www.planetbiru.com', 'icon':'planetbiru.png'}
  ]};
  
  var el1 = document.getElementsByClassName('context-menu')[0];
  var cm1 = contextMenu(el1, menu1);
  
  var el2 = document.getElementById('context-menu');
  var cm2 = contextMenu(el2, menu2);
  }
  
  </script>
</head>

<body>

  <div class="context-menu">
    <p>Right click here to show context menu</p>
  </div>
  
  <div id="context-menu">
    <p>Right click here to show context menu</p>
  </div>
  
</body>
</html>