var validate;!function(t){function i(){n(this)?t(this).highlight():t(this).unhighlight()}function n(i){var n=t(i);try{if("none"==n.css("display")||"none"==n.parent().css("display")||"none"==n.parent().parent().css("display"))return!1}catch(e){}return""==n.val()||null==n.val()||"null"==n.val()?n.attr("require")?"require":"":void 0}function e(){var i=t(this);a(i)}function a(i){var e=i.offset().top+i.height()+4,a=i.offset().left+Math.max(i.width()-260,0);i.parents().each(function(){if("static"!=t(this).css("position")&&(!t.browser.mozilla||"table"!=t(this).css("display"))){var i=t(this).offset();return e-=i.top,a-=i.left,!1}}),i.parent().children(".alertbox").remove(),i.parent().append("<div class='alertbox' style='top:"+e+"px; left:"+a+"px;'><div>"+i.attr(n(i[0]))+"</div></div>")}function r(){t(this).parent().children(".alertbox").remove()}validate=function(i){try{resetLookupValues()}catch(e){}var r=!0;return t("*[validate="+i+"][type!='hidden']").each(function(i,e){n(e)?(t(e).highlight(),r&&(a(t(e).find(":input").andSelf()),t(e).find(":input").andSelf().focus()),r=!1):t(e).unhighlight()}),r},t.fn.highlight=function(){return this.addClass("highlight").focus(e).blur(r).change(i).keyup(i),this},t.fn.unhighlight=function(){return this.removeClass("highlight").unbind("focus",e).unbind("blur",r).parent().children(".alertbox").remove(),this}}(jQuery);var validators={email:function(){return new RegExp("[a-zA-Z0-9!#$%&'*+/=?^_`{|}~-]+(?:.[a-zA-Z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?.)+[a-zA-z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?","m").test(this.value)}};