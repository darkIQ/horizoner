define(function (require, exports, module) {
	(function(){
		$(".aboutMore").click(function() {
		    $.ajax({
		        type:"post",
		        data:{"changeId": $("#aboutLastId").val(),"changeId2": "1"},
		        url:handleUrl_about,
		        dataType:"json",
		        success:function(data){
		            $(".aboutMore").show();
		            $(".aboutBack").show();
		            $(".aboutLoad").hide();
		            var i = 0;
		            $.each($(".aboutHead"),function(){
		            	if (i < data.content.length) {
		                    $(this).find("img").attr("src", handleUrl+data.content[i].img);
							$(this).find(".aboutName").text(data.content[i].name);
							$(this).find(".aboutEdu").text(data.content[i].edu);
							$(this).find(".aboutDire").text(data.content[i].dire);
							$(this).find(".aboutCompany").text(data.content[i].company);
							$("#aboutLastId").val(data.content[i].id);
							if ((data.content[i].id%5 != 0)) {
							    $(".aboutMore").hide();
							}
							else{
								$(".aboutMore").show();
							};
		                }
		                else {
					        $(this).find("img").hide();
							$(this).find(".aboutName").text("");
							$(this).find(".aboutEdu").text("");
							$(this).find(".aboutDire").text("");
							$(this).find(".aboutCompany").text("");
				        };
				        i++;
		            });
		        },
		        beforeSend: function() {
		        	$(".aboutLoad").show();
		        	$(".aboutMore").hide();
		            $(".aboutBack").hide();
		        },
		        error: function(data) {
                        if (data != null) {
					    alert("请求错误！");
                        };
                }
		    });
		});

		$(".aboutBack").click(function() {
		    $.ajax({
		        type:"post",
		        data:{"changeId": $("#aboutLastId").val(),"changeId2": "2"},
		        url:handleUrl_about,
		        dataType:"json",
		        success:function(data){
		            $(".aboutMore").show();
		            $(".aboutBack").show();
		            $(".aboutLoad").hide();
		            var i = 0;
		            $.each($(".aboutHead"),function(){
		            	if (i < 5) {
		            		$(this).find("img").show();
		                    $(this).find("img").attr("src", handleUrl+data.content[i].img);
							$(this).find(".aboutName").text(data.content[i].name);
							$(this).find(".aboutEdu").text(data.content[i].edu);
							$(this).find(".aboutDire").text(data.content[i].dire);
							$(this).find(".aboutCompany").text(data.content[i].company);
							$("#aboutLastId").val(data.content[i].id);
							if (data.content[i].id == 5) {
							    $(".aboutBack").hide();
							};
		                }
		                i++;
		            });
		        },
		        beforeSend: function() {
		        	$(".aboutLoad").show();
		        	$(".aboutMore").hide();
		            $(".aboutBack").hide();
		        },
		        error: function(data) {
                        if (data != null) {
					    alert("请求错误！");
                        };
                }

		    });
		});
	})()
})