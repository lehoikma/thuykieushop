!function(t,i,o){var n=function(t){this.options=t,this.init()};n.prototype={constructor:n,init:function(){var n=this,e=n.options,s=n.$box=e.target.css("opacity",0),a=s[0].id;t(i).on("keydown",function(t){27===t.keyCode&&n.hide()}),t("[data-role=tinybox-closer][data-id="+a+"]").on("click",function(t){t.preventDefault(),n.hide()}),e.flexible&&t(o).resize(function(){s.css("margin-left",-s.width()/2)}),t("[data-role=tinybox-trigger][href=#"+a+"]").on("click",function(t){t.preventDefault(),n.show()})},show:function(){var o=this,n=o.options,e=o.$box,s=t(".tinybox:visible"),a=n.top,c=!1;if("auto"===a)a=-e.height()/2;else switch(typeof a){case"function":a=a.call(this,e);break;default:c=!0,e.css({top:a})}e.css({marginLeft:-e.innerWidth()/2,position:"fixed",zIndex:888889,left:"50%",display:"block"}),c||e.css({marginTop:a,top:"50%"}),s.stop().animate({opacity:0},n.speed,function(){this.style.display="none"}),e.stop().animate({opacity:1},n.speed);var d=t("#tinybox-overlay");d[0]||(t(i.body).append('<div id="tinybox-overlay"></div>'),d=t("#tinybox-overlay").css({display:"none",background:n.background,zIndex:888888,position:"fixed",left:0,top:0,width:"100%",height:"100%",opacity:0})),d.on("click",function(){o.hide()}),d.stop().css("display","block").animate({opacity:n.opacity},n.speed,function(){e.trigger("tinybox:oncomplete")}),e.trigger("tinybox:onshow")},hide:function(){var i=this.options,o=this.$box,n=t("#tinybox-overlay");n.add(o).stop().animate({opacity:0},i.speed,function(){this.style.display="none",o.trigger("tinybox:onhide")})}},t.fn.tinybox=function(i){return i=t.extend({target:t(this),background:"#000",opacity:.5,speed:400,top:"auto",flexible:!1},i),new n(i)}}(jQuery,document,window);
