define(function (require, exports, module) {
	(function () {
		$(".worksItem").click(function(e) {
			catInfo(e, $(this));
		});

		function catInfo(e, obj) {
			e.stopPropagation();
			var imgSrc = obj.find('img').attr('src');
			var worksInfo = obj.find('p').text();
			var worksName = obj.find('h3').text();
			var itemId = obj.attr('id');

			$('.worksInfoLayer').find('h3').text(worksName);
			$('.worksInfoLayer').find('h3').attr('itemId', itemId);
			$('.worksInfoLayer').find('p').text(worksInfo);
			$('.worksInfoLayerImg').attr('src', imgSrc);
			$('.worksInfoLayer').css('display', 'block');

		}

		$('.worksPage').click(function(e) {
			if ($(e.target).closest('.worksInfoLayer').length == 0) {
				// css('display') != 'none')
				$('.worksInfoLayer').css('display', 'none');
			}
		});

		$('.worksMore').click(function() {reqWroksItem($(this))});
		$('.worksMoreRight').click(function() {reqWroksItem($(this))});
		$('.worksMoreLeft').click(function() {reqWroksItem($(this))});

		function reqWroksItem(obj) {
			// change nav
			obj.css('display', 'none');
			if (obj.attr('class') != 'worksMore') {
				$('.worksMoreRight').css('display', 'none');
				$('.worksMoreLeft').css('display', 'none');
			} 

			if (obj.attr('class') == 'worksMoreLeft') {
				var itemId = $('#worksFirstId').val();
				var direction = 2;
			} else {
				var itemId = $('#worksLastId').val();
				var direction = 1;
			}

			$('.worksLoading').css('display', 'inline-block');
			$.post(handleUrl_work, {'id': itemId, 'direction': direction}, function(data) {
				if (!data.success) {
					alert('Error: ...');
					$('.worksLoading').css('display', 'none');
					$('.worksMore').css('display', 'inline-block');
				} else {
					var contentCount = data.content.length;
					changeItem(data.content, function() {
						$('.worksLoading').css('display', 'none');
						if ($('#worksFirstId').val() == 1) {
							$('.worksMore').css('display', 'inline-block');
						} else {
							$('.worksMoreLeft').css('display', 'inline-block');
							if (contentCount == 5)
								$('.worksMoreRight').css('display', 'inline-block');						
						}
					});
				}
			}, 'json');
		}
		
		$('.worksCloseLayer').click(function() {
			$('.worksInfoLayer').css('display', 'none');
		});

		function changeItem(content, callback) {
			var i = 0;
			// replace all works
			var html = "<div class='worksItem' id='worksItem1'><img src=''><h3></h3><p></p></div><div class='worksItem' id='worksItem2'><img src=''><h3></h3><p></p></div><div class='worksItem worksItemRight' id='worksItem3'><img src=''><h3></h3><p></p></div><div class='worksItem' id='worksItem4'><img src=''><h3></h3><p></p></div><div class='worksItem' id='worksItem5'><img src=''><h3></h3><p></p></div>";
			$('.worksItemList').html(html);
			$(".worksItem").bind('click', function(e) {
				catInfo(e, $(this));
			});
			$.each($('.worksItem'), function() {
				if (i < content.length) {
					i == 0 ? $('#worksFirstId').val(content[i].id) : '';
					content[i].img = handleUrl + content[i].img.substr(content[i].img.indexOf('/'))
					$(this).find('img').attr('src', content[i].img);
					$(this).find('h3').text(content[i].name);
					$(this).find('p').text(content[i].info);
					$('#worksLastId').val(content[i].id)
				} else {
					$(this).remove();
				}
				i++;
			});
			callback();
		}

		$('.flecheNavLeft').click(function() {changeLayerContent('left')});
		$('.flecheNavRight').click(function() {changeLayerContent('right')});

		function changeLayerContent(direction) {
			var thisId = Number($('.worksLayerContent h3').attr('itemId').substr(-1));
			var itemNum = $('.worksItemList').children().length;
			if (direction == 'right') {
				thisId = thisId == itemNum ? 1 : thisId + 1;
			} else {
				thisId = thisId == 1 ? itemNum : thisId - 1;
			}
			var next = '#worksItem' + thisId;
			var nextItem = $(next);
			var imgSrc = nextItem.find('img').attr('src');
			var name = nextItem.find('h3').text();
			var info = nextItem.find('p').text();
			$('.worksLayerContent img').attr('src', imgSrc);
			$('.worksLayerContent h3').text(name);
			$('.worksLayerContent h3').attr('itemId', nextItem.attr('id'));
			$('.worksLayerContent p').text(info);
		}

 	})();
})