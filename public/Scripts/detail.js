function disableClick(){console.log("zoom-tiny-image")}function clickImg(){$(".dcc-ul li").each(function(i){$(this).click(function(){$(".zoom-small-image").addClass("hidden"),$(".img-right").removeClass("hidden");var t=i+1;$(".cho-img-chon").addClass("hidden"),$(".chose_img_"+t).removeClass("hidden");var o=$(this).find("img")[0].naturalWidth,n=$(this).find("img")[0].naturalHeight,e=340,c=e*n/o;if(c>340){var a=338,s=Math.floor(340*o/n),l=Math.floor((340-s)/2);$(".chose_img_"+t).css("width",s),$(".chose_img_"+t).css("height",a),$(".chose_img_"+t).css("margin-left",l)}else c>=340&&(c=338),$(".chose_img_"+t).css("width",e),$(".chose_img_"+t).css("height",c),$(".chose_img_"+t).css("margin-left","0px")})})}function chuanbi(){var i=$(".comment-face").height();$(".fb_ltr fb_iframe_widget_lift").css("width",i),$(".size_p").click(function(){$(this).parent().find(".size_p").css("border","1px solid #ccc"),$(this).css("border","2px solid #f00")});var t=$(".dr-img").width();$(".dr-img").css("height",t)}function canchinhanh(){var i=($(".li-img img").height(),($(".li-img img").width()-$(".li-img img").height())/2);$(".li img").css("margin-top",i)}function zoomImg(){$("ul.main-ul li").length;$("ul.main-ul li img.zoom-tiny-image").click(function(){$(".zoom-small-image").removeClass("hidden"),$(".img-right").addClass("hidden"),$("ul.main-ul li").removeClass("li-active"),$(this).parent().parent().parent().parent().addClass("li-active");var i=$(this)[0].naturalWidth,t=$(this)[0].naturalHeight,o=340,n=o*t/i;if(n>340){var e=338,c=Math.floor(340*i/t),a=Math.floor((340-c)/2);$(".cloud-zoom img").css("width",c),$(".cloud-zoom img").css("height",e),$(".cloud-zoom").css("margin-top","0px"),$(".cloud-zoom").css("margin-left",a)}else n>=340&&(n=338),$(".cloud-zoom img").css("width",o),$(".cloud-zoom img").css("height",n),$(".cloud-zoom").css("margin-left","0px")}),$("#prev_btn").click(function(){var i=$(".main-ul")[0].offsetLeft,t=$(".ul-wrraper").width();$(".main-ul").animate({left:i-t},500,function(){})}),$("#next_btn").click(function(){var i=$(".main-ul")[0].offsetLeft;if(i>=0);else{var t=$(".ul-wrraper").width();$(".main-ul").animate({left:i+t},500,function(){})}})}function preload(i){$("ul.main-ul li:first-child img.zoom-tiny-image").each(function(i){var t=$(this)[0].naturalWidth,o=$(this)[0].naturalHeight;console.log(t,o);var n=340,e=n*o/t;if(e>340){var c=338,a=Math.floor(340*t/o),s=Math.floor((340-a)/2);$(".cloud-zoom img").css("width",a),$(".cloud-zoom img").css("height",c),$(".zoom-small-image").css("opacity",1),$(".cloud-zoom").css("margin-top","0px"),$(".cloud-zoom").css("margin-left",s)}else e>=340&&(e=338),$(".cloud-zoom img").css("width",n),$(".cloud-zoom img").css("height",e),$(".zoom-small-image").css("opacity",1),$(".cloud-zoom").css("margin-left","0px")})}function congtruInput(){$(".tm-tru").click(function(){var i=$("#count_product").val();1!=i&&($("#count_product").val(parseInt(i)-1),updatePrice())}),$(".tm-cong").click(function(){var i=$("#count_product").val();$("#count_product").val(parseInt(i)+1),updatePrice()})}function ratingInput(){$(".jquery-ratings-star").hover(function(){})}function slideBottom(){var i=$("#box-spmn").width();$(".ul-parrent").css("width",i-80);var t=i-80,o=1,n=0;if(0==t||null==t);else do{if(console.log("vao trong do while"),o+=1,o>100){o=5;break}n=t/o}while(200>n||n>280);var e=$(".content-cungloai li.pro-item").length,c=Math.ceil(e/o);$("span.tm-second").html(c),$(".pro-item").css("width",n);$(".content-cungloai");$(".btn-next").click(function(){var i=$(".tm-first").html();if(!(parseInt(i)>=c)){$(".tm-first").html(parseInt(i)+1),$(".btn-common").addClass("hidden");var o=$(".content-cungloai")[0].offsetLeft;$(".content-cungloai").animate({left:o-t},1e3,function(){$(".btn-common").removeClass("hidden");$(".content-cungloai")})}});$(".content-cungloai").offset();$(".btn-prev").click(function(){var i=$(".tm-first").html();if(1!=i){$(".tm-first").html(parseInt(i)-1),$(".btn-common").addClass("hidden");var o=$(".content-cungloai")[0].offsetLeft;$(".content-cungloai").animate({left:o+t},1e3,function(){$(".btn-common").removeClass("hidden")})}})}function updatePrice(){var i=document.getElementById("priceSale").value,t=document.getElementById("count_product").value,o=i*t;document.getElementById("tongoke").innerHTML=number_format(o,".")}function binhchon(){$(".jquery-ratings-star").hover(function(){for(var i=$(this).html(),t=1;i>t;t++)$("#review-form .jquery-ratings-star").eq(t).addClass("jquery-ratings-full");for(var t=i;5>=t;t++)$("#review-form .jquery-ratings-star").eq(t).removeClass("jquery-ratings-full")},function(){})}function fadeImg(){$(window).scroll(function(){$(".tm-active img").each(function(i){var t=$(this).position().top+$(this).outerHeight(),o=$(window).scrollTop()+window.innerHeight;o>t&&$(this).animate({opacity:"1"},500)})})}$(document).ready(function(){zoomImg(),congtruInput(),ratingInput(),slideBottom(),fadeImg(),canchinhanh(),chuanbi(),binhchon(),clickImg(),disableClick(),window.addEventListener("resize",function(){slideBottom()}),$(".type-voucher-star").css("top","230px"),setTimeout(function(){preload(),$(".ul-wrraper").css("display","block")},1e3)});var loaded=0,numberImage=1;