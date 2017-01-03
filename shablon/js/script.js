$(document).ready(function() {
	$("#menu").selectmenu({
		//appendTo:".header"
		//disabled:true,
		icons:{button:"ui-icon-circle-triangle-s"},
		position:{
			//my:"left+10 top",
			//at:"left top"
		},
		width:500,
		change:function(event,ui) {
			if(ui.item.value) {
				$.ajax({
					
					url:"index.php",
					type:"POST",
					data:"cat_id="+ui.item.value,
					dataType:'json',
					success:function(html) {
						if(html) {
							var d = $(".main_text");
							d.empty();
							for(var i = 0; html.length > i; i++) {
								d.append("<table class='table' width='780' border='0' cellspacing='0' cellpadding='0'><tr><td class='td_top'>" + 
					      		"<h5><a title='" + html[i].title + "' href='view_text.php?id=" + html[i].id + "'>" + html[i].title + "</a></h5>" + 	
								"</td></tr><tr><td><p>" +html[i].discription + "</p></td></tr><tr><td></td></tr></table>");
							}
						}
					}
					
				});	
			}
		}
	});
	
	
});