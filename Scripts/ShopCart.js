function commafy(e){var t=e.toString().split(".");return t[0].length>=5&&(t[0]=t[0].replace(/(\d)(?=(\d{3})+$)/g,"$1,")),t[1]&&t[1].length>=5&&(t[1]=t[1].replace(/(\d{3})/g,"$1 ")),t.join(".")}$(document).ready(function(){$("#ShopCart").css("display","none"),null==$.cookie("SCItemCount")&&$.cookie("SCItemCount","0"),$("#ShopCartMainContent").html("");var e=0,t=parseInt($.cookie("SCItemCount"));0==t?($("#ShopCartSend1").attr("enabled","enabled"),$("#ShopCartAbort1").attr("enabled","enabled")):($("#ShopCartSend1").attr("enabled","enabled"),$("#ShopCartAbort1").attr("enabled","enabled"));for(var o=0;t>o;o++){var a=$.cookie("PriceVN"+o),r=$.cookie("ProductName"+o),c=$.cookie("ProductImg"+o),l=($.cookie("MNU"+o),$.cookie("ProductID"+o)),n="<div class='ShopCartItemTotal' id='SCItem"+o+"' ><a href='"+r+"-sp"+l+"'>";n+="<div class='ShopCartItemL' id='SCItemL"+o+"' >",n+="<img src='"+c+"' class='ShopCartItemImg' />",n+="<div class='ShopCartItemPrice'>"+a+"</div>",n+="</div>",n+="<div class='ShopCartItemR' id='SCItemR"+o+"' >"+r+"</div>",n+="<input type='button' class='ShopCartDeleteItem' id='SCDelItem"+o+"' title='Bỏ ra khỏi giỏ hàng' />",n+="</a></div>",$("#ShopCartMainContent").html($("#ShopCartMainContent").html()+n),e+=parseInt(a.replace(",","").replace(",","").replace(",",""))}$("#ShopCartPriceTotal").text(commafy(e)+" VND"),$("#ShopCartItemCount").text(t),$("#ShopCartShow").click(function(){$("#ShopCart").show(500,function(){})}),$("#ShopCartHide").click(function(){$("#ShopCart").hide(500,function(){$("#ShopCart").css("display","none")})}),$("#ShopCartAbort1").click(function(){$.cookie("SCItemCount","0"),$("#ShopCartMainContent").html(""),$("#ShopCartPriceTotal").text("0 VND"),$("#ShopCartItemCount").text("0"),$("#ShopCart").hide(500,function(){}),$("#ShopCartSend1").attr("enabled","enabled"),$("#ShopCartAbort1").attr("enabled","enabled")}),$("#ShopCartNextItem").click(function(){$("#ShopCartMainContent").animate({left:"-=352px"},1e3)}),$("#ShopCartBackItem").click(function(){$("#ShopCartMainContent").animate({left:"+=352px"},1e3)}),$(".ShopCartDeleteItem").live("click",function(e){e.preventDefault();var t=e.target.id.replace("SCDelItem","");$.cookie("SCItemCount",parseInt($.cookie("SCItemCount"))-1,{expires:1});var o=$("#ShopCartPriceTotal").text().replace(",","").replace(",","").replace(",","").replace(" ","").replace("VND",""),a=parseInt(o)-parseInt($.cookie("PriceVN"+t).replace(",","").replace(",","").replace(",",""));$("#ShopCartPriceTotal").text(commafy(a)+" VND"),$("#ShopCartItemCount").text(parseInt($("#ShopCartItemCount").text())-1);for(var r=parseInt(t);r<parseInt($.cookie("SCItemCount"));r++){var c=r+1;$.cookie("ProductID"+r,$.cookie("ProductID"+c),{expires:7}),$.cookie("Price"+r,$.cookie("Price"+c),{expires:7}),$.cookie("PriceVN"+r,$.cookie("PriceVN"+c),{expires:7}),$.cookie("ProductName"+r,$.cookie("ProductName"+c),{expires:7}),$.cookie("ProductImg"+r,$.cookie("ProductImg"+c),{expires:7}),$.cookie("Warranty"+r,$.cookie("Warranty"+c),{expires:7}),$.cookie("MNU"+r,$.cookie("MNU"+c),{expires:7}),$("#SCItemL"+r).html($("#SCItemL"+c).html()),$("#SCItemR"+r).html($("#SCItemR"+c).html()),$("#SCDelItem"+r).html($("#SCDelItem"+c).html())}$("#SCItem"+$.cookie("SCItemCount")).remove();var l=parseInt($.cookie("SCItemCount"));0==l&&($("#ShopCartSend1").attr("enabled","enabled"),$("#ShopCartAbort1").attr("enabled","enabled"))}),$(".ShopCartAddNew").click(function(e){var t=e.target.id,o=$("#"+t).attr("ProductID"),a=parseInt($.cookie("SCItemCount"));$("#ShopCartSend1").attr("enabled","enabled"),$("#ShopCartAbort1").attr("enabled","enabled");var r=$("#ShopCartPriceTotal").text().replace(",","").replace(",","").replace(",","").replace(" ","").replace("VND",""),c=parseInt(r)+parseInt($("#"+t).attr("PriceVN").replace(",","").replace(",","").replace(",",""));$("#ShopCartPriceTotal").text(commafy(c)+" VND"),$("#ShopCartItemCount").text(parseInt($("#ShopCartItemCount").text())+1),$.cookie("ProductID"+a,o,{expires:7}),$.cookie("Price"+a,$("#"+t).attr("Price"),{expires:7}),$.cookie("PriceVN"+a,$("#"+t).attr("PriceVN"),{expires:7}),$.cookie("ProductName"+a,$("#"+t).attr("ProductName"),{expires:7}),$.cookie("ProductImg"+a,$("#"+t).attr("ProductImg"),{expires:7}),$.cookie("Warranty"+a,$("#"+t).attr("Warranty"),{expires:7}),$.cookie("MNU"+a,$("#"+t).attr("MNU"),{expires:7});var l=$.cookie("PriceVN"+a),n=$.cookie("ProductName"+a),i=$.cookie("ProductImg"+a),p=($.cookie("MNU"+a),"<div class='ShopCartItemTotal' id='SCItem"+a+"' ><a href='"+n+"-sp"+o+"'>");p+="<div class='ShopCartItemL' id='SCItemL"+a+"' >",p+="<img src='"+i+"' class='ShopCartItemImg' />",p+="<div class='ShopCartItemPrice'>"+l+"</div>",p+="</div>",p+="<div class='ShopCartItemR' id='SCItemR"+a+"' >"+n+"</div>",p+="<input type='button' class='ShopCartDeleteItem' id='SCDelItem"+a+"' />",p+="</a></div>",$("#ShopCartMainContent").html($("#ShopCartMainContent").html()+p),a=1+parseInt($.cookie("SCItemCount")),$.cookie("SCItemCount",a,{expires:7}),$("#ShopCart").show(500,function(){}),$("#ShopCartSend1").attr("enabled","enabled"),$("#ShopCartAbort1").attr("enabled","enabled")});$("#testcb").colorbox({width:"830",inline:!0,scrolling:!1,href:"#cbcontainer",onOpen:function(){jQuery.ajaxSetup({async:!1});var e=$.get("../ShoppingCartContentV.htm",function(){}).responseText;jQuery.ajaxSetup({async:!0}),e=e.replace("#HOTEN#",$(".lblHoTen").text()),e=e.replace("#USERNAME#",$(".lblUserName").text()),e=e.replace("#DIACHI#",$(".lblDiaChi").text()),e=e.replace("#TENCOQUAN#",$(".lblTenCoQuan").text()),e=e.replace("#TEL#",$(".lblTel").text()),e=e.replace("#MOBILE#",$(".lblMobile").text()),e=e.replace("#EMAIL#",$(".lblEmail").text()),e=e.replace("#TYGIA#",$(".lblTyGia").text()),e=e.replace("#DATETIME#",$(".lblDateTime").text()),sFooter=sFooter.replace("#HOTEN#",$(".lblHoTen").text()),sFooter=sFooter.replace("#USERNAME#",$(".lblUserName").text()),sFooter=sFooter.replace("#DIACHI#",$(".lblDiaChi").text()),sFooter=sFooter.replace("#TENCOQUAN#",$(".lblTenCoQuan").text()),sFooter=sFooter.replace("#TEL#",$(".lblTel").text()),sFooter=sFooter.replace("#MOBILE#",$(".lblMobile").text()),sFooter=sFooter.replace("#EMAIL#",$(".lblEmail").text()),sFooter=sFooter.replace("#TYGIA#",$(".lblTyGia").text()),sFooter=sFooter.replace("#DATETIME#",$(".lblDateTime").text());for(var t,o="",a=0,r=0,c=0;c<parseInt($.cookie("SCItemCount"));c++)t=sContentTemplate,t=t.replace("#STT#",c+1),t=t.replace("#DESCRIPTION#",$.cookie("ProductName"+c)),t=t.replace("#NUM#","1"),t=t.replace("#PRICEUSD#",$.cookie("Price"+c)),t=t.replace("#TOTALUSD#",$.cookie("Price"+c)),t=t.replace("#TOTALVND#",$.cookie("PriceVN"+c)),t=t.replace("#WARRANTY#",$.cookie("Warranty"+c)),a+=parseInt($.cookie("Price"+c)),r+=parseInt($.cookie("PriceVN"+c).replace(",","").replace(",","").replace(",","")),o+=t;e=e.replace("#TONGTIENUSD#",commafy(a)),e=e.replace("#TONGTIENVND#",commafy(r)),sFooter=sFooter.replace("#TONGTIENUSD#",commafy(a)),sFooter=sFooter.replace("#TONGTIENVND#",commafy(r)),$("#txtHoTen").val($(".lblHoTen").text()),$("#txtDiaChi").val($(".lblDiaChi").text()),$("#ShopCartText").html(e+o+sFooter),$("#cbcontainer").css("display","block"),$("#txtHoTen").focus()},onClosed:function(){$("#ShopCartText").html(""),$("#cbcontainer").css("display","none")}}),$("#testcb2").colorbox({width:"830",inline:!0,scrolling:!1,href:"#cbcontainer2",onOpen:function(){jQuery.ajaxSetup({async:!1});var e=$.get("../LapBaoGiaHeader.htm",function(){}).responseText,t=$.get("../LapBaoGiaContent.htm",function(){}).responseText,o=$.get("../LapBaoGiaFooter.htm",function(){}).responseText;jQuery.ajaxSetup({async:!0}),e=e.replace("#HOTEN#",$(".lblHoTen").text()),e=e.replace("#USERNAME#",$(".lblUserName").text()),e=e.replace("#DIACHI#",$(".lblDiaChi").text()),e=e.replace("#TENCOQUAN#",$(".lblTenCoQuan").text()),e=e.replace("#TEL#",$(".lblTel").text()),e=e.replace("#MOBILE#",$(".lblMobile").text()),e=e.replace("#EMAIL#",$(".lblEmail").text()),e=e.replace("#TYGIA#",$(".lblTyGia").text()),e=e.replace("#DATETIME#",$(".lblDateTime").text()),o=o.replace("#HOTEN#",$(".lblHoTen").text()),o=o.replace("#USERNAME#",$(".lblUserName").text()),o=o.replace("#DIACHI#",$(".lblDiaChi").text()),o=o.replace("#TENCOQUAN#",$(".lblTenCoQuan").text()),o=o.replace("#TEL#",$(".lblTel").text()),o=o.replace("#MOBILE#",$(".lblMobile").text()),o=o.replace("#EMAIL#",$(".lblEmail").text()),o=o.replace("#TYGIA#",$(".lblTyGia").text()),o=o.replace("#DATETIME#",$(".lblDateTime").text());for(var a,r="",c=0,l=0,n=0;n<parseInt($.cookie("SCItemCount"));n++)a=t,a=a.replace("#STT#",n+1),a=a.replace("#DESCRIPTION#",$.cookie("ProductName"+n)),a=a.replace("#NUM#","1"),a=a.replace("#PRICEUSD#",$.cookie("Price"+n)),a=a.replace("#TOTALUSD#",$.cookie("Price"+n)),a=a.replace("#TOTALVND#",$.cookie("PriceVN"+n)),a=a.replace("#WARRANTY#",$.cookie("Warranty"+n)),c+=parseInt($.cookie("Price"+n)),l+=parseInt($.cookie("PriceVN"+n).replace(",","").replace(",","").replace(",","")),r+=a;e=e.replace("#TONGTIENUSD#",commafy(c)),e=e.replace("#TONGTIENVND#",commafy(l)),o=o.replace("#TONGTIENUSD#",commafy(c)),o=o.replace("#TONGTIENVND#",commafy(l)),$("#ShopCartText2").html(e+r+o),$("#cbcontainer2").css("display","block")},onClosed:function(){$("#ShopCartText2").html(""),$("#cbcontainer2").css("display","none")}}),$("#ShopCartPrint").click(function(){try{var e=document.getElementById("ifrmPrint"),t=document.getElementById("ShopCartText2").innerHTML,o=e.contentWindow||e.contentDocument;o.document&&(o=o.document),o.write("<head><title>Bản in Bảng chào giá - sản phẩm do khách hàng chọn</title>"),o.write("</head><body onload='this.focus(); this.print();'>"),o.write(t+"</body>"),o.close()}catch(a){self.print()}}),$("#cbclose").click(function(e){e.preventDefault(),$.colorbox.close()}),$("#cbclose2").click(function(e){e.preventDefault(),$.colorbox.close()}),$("#ShopCartSend2").click(function(e){{var t=$("#txtHoTen").val(),o=$("#txtDienThoai").val(),a=$("#txtDiaChiGiaoHang").val();$("#SelectTGGiaoHang").val(),$("#SelectDkThanhToan").val()}if(""==t)return void alert("Bạn chưa nhập họ tên !");if(""==o)return void alert("Bạn chưa nhập số điện thoại (chúng tôi cần số điện thoại để có thể gọi lại xác nhận đơn hàng) !");if(""==a)return void alert("Bạn chưa nhập địa chỉ giao hàng !");for(var r="@",c=0;c<$.cookie("SCItemCount");c++)r+=$.cookie("ProductID"+c)+"@";var l="{ 'sUserName': '"+$(".lblUserName").text()+"', 'sHoTen': '"+$("#txtHoTen").val()+"', 'sDienThoai': '"+$("#txtDienThoai").val()+"', 'sDiaChiGiaoHang': '"+$("#txtDiaChiGiaoHang").val()+"', 'sThoiGianGiaoHang': '"+$("#SelectTGGiaoHang").val()+"', 'sDieuKienThanhToan': '"+$("#SelectDkThanhToan").val()+"', 'sProductIDList': '"+r+"', 'sPriceType': '"+$(".lblPriceType").text()+"'}";$.ajax({type:"POST",url:"ShopCart.asmx/AddNew",data:l,contentType:"application/json; charset=utf-8",dataType:"json",success:function(e){alert("Bạn đã gửi đơn hàng thành công, chúng tôi sẽ liên lạc lại với bạn để xác nhận !"),$("#cbcontainer").html(""),$("#cbcontainer").css("display","none"),$.colorbox.close(),$.cookie("SCItemCount","0"),$("#ShopCartMainContent").html(""),$("#ShopCartPriceTotal").text("0 VND"),$("#ShopCartItemCount").text("0"),$("#ShopCart").hide(500,function(){})},error:function(e){alert("Có lỗi "+e+" trong quá trình gửi đơn hàng, bạn hãy gửi lại sau nhé !")}})})});
