function contextMenu(el, menu)
{
	var ctx = this;
	el.addEventListener('contextmenu', function(e){
		e = e || window.event;
		if(!e.which && e.button !== undefined ) {
			e.which = ( e.button & 1 ? 1 : ( e.button & 2 ? 3 : ( e.button & 4 ? 2 : 0 ) ) );
		}
		var key = e.which;
		if(key == 3)
		{
			try{
				var menuContainer = document.getElementById('kamscontextmenu');
				menuContainer.parentNode.removeChild(menuContainer);
			}
			catch(e){
			}
			var menuContainer = document.createElement('div');
			menuContainer.setAttribute('id', 'kamscontextmenu');
			document.getElementsByTagName('body')[0].appendChild(menuContainer);
			var sh = window.scrollX;
			var sv = window.scrollY;
			
			menuContainer.style.left = (e.clientX + sh) + 'px';
			menuContainer.style.top = (e.clientY + sv) + 'px';
			ctx.buildMenu(menuContainer, menu);
			e.preventDefault();
			document.addEventListener('click', function(e){
				ctx.hideMenu();
			});
		}
	}, true);
	this.hideMenu = function(){
		try{
			var menuContainer = document.getElementById('kamscontextmenu');
			menuContainer.style.display = 'none';
		}
		catch(e){
		}
	};
	this.showSubmenu = function(li)
	{
		li.addEventListener('mouseover', function(e){
			this.setAttribute('data-show', 'true');
			var w = parseInt(this.getBoundingClientRect().width);
			var h = parseInt(this.getBoundingClientRect().height);
			var ul = this.getElementsByTagName('ul')[0];
			ul.style.marginLeft = (w-4)+'px';
			ul.style.marginTop = (-h-1)+'px';
		});
		li.addEventListener('mouseout', function(e){
			this.setAttribute('data-show', 'false');
		});
	}
	this.buildMenu = function(container, menuObj)
	{
		var ul = document.createElement('ul');
		container.appendChild(ul);
		if(typeof menuObj.title != 'undefined')
		{
			var li = document.createElement('li');
			var span = document.createElement('span');
			span.setAttribute('class', 'menu-title');
			span.innerHTML = menuObj.title;
			li.appendChild(span);
			ul.appendChild(li);
		}
		var i, j;
		for(i in menuObj.item)
		{
			j = menuObj.item[i];
			var li = document.createElement('li');
			var a = document.createElement('a');
			a.innerHTML = j.text;
			li.appendChild(a);
			if(typeof j.href == 'undefined')
			{
				j.href = '#';
			}
			a.setAttribute('href', j.href);
			if(typeof j.target != 'undefined')
			{
				a.setAttribute('target', j.target);
			}
			if(typeof j.class != 'undefined')
			{
				a.setAttribute('class', j.class);
			}
			if(typeof j.icon != 'undefined')
			{
				a.style.backgroundImage = "url('"+j.icon+"')";
			}
			if(typeof j.onclick != 'undefined')
			{
				a.addEventListener('click', j.onclick);
			}
			else if(j.href == '#')
			{
				a.addEventListener('click', function(e){e.preventDefault();});
			}
			ul.appendChild(li);
			if(typeof j.children != 'undefined')
			{
				li.setAttribute('data-has-child', 'true');
				var span = document.createElement('span');
				span.setAttribute('class', 'has-child');
				span.innerHTML = '&nbsp;';
				a.insertBefore(span, a.firstChild);
				ctx.buildMenu(li, j.children);
				ctx.showSubmenu(li);
			}
		}
	};
}
