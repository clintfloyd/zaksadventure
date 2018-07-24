$(document).ready(function(){
	$(document).on("click",".openImage", function(){
		var obj = $(this),
			dataType = obj.attr("data-type"),
			dataMedia = obj.attr("data-media"),
			dataCaption = obj.attr("data-caption"),
			mainImage = obj.children("img").attr("src");

		if(dataType == "carousel"){
			data = $.parseJSON(dataMedia);
			html = "";
			$.each(data, function(x,y){
				if( y.type && y.type == "video"){

				}else{
					html += '<div class="col-3"><a href=""><img src="'+y.images.thumbnail.url+'" /></a></div>';
				}
			});

			$(".mainImageView").show();
			$(".seemore").show()
			$(".rowImageListing").html(html).show();
		}else if(dataType == 'video'){
			$(".seemore").hide();
			$(".rowImageListing").hide();
			//html += '<div class="col-3"><a href=""><img src="'+y.images.thumbnail.url+'" /></a></div>';
			html =  '<video controls autoplay>'+
					'  <source src="'+dataMedia+'" type="video/mp4">'+
					'Your browser does not support the video tag.'+
					'</video>';
			$(".mainImageView").hide();
			$(".vidView").html(html);
		}else{
			$(".mainImageView").show();
			$(".rowImageListing").hide();
			$(".seemore").hide();
		}

		$(".mainImageView").attr("src",mainImage);
		$(".enlargePic .caption").html(dataCaption);
	});

	$('#enlargePic').on('hidden.bs.modal', function () {
	    $(".vidView").html("");
	})
});