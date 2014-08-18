$(document).ready(function() {

    var $body = $("body"),
        adBuilderArr = [];

    var adsRenderFromJSON = function() {
        var tmpTemplate, 
            tmpAdName,
            fileName,
            fileNameArr = [];
        $("#template option").each(function()
        {
            tmpTemplate = $(this).val();
            if(tmpTemplate !== "all") {
                $("#format option").each(function() {
                    tmpAdName = tmpTemplate + "_" + $(this).val();
                    fileName = "db/" + tmpAdName + ".json";
                    fileNameArr.push(fileName);
                    $.getJSON(fileName, function(json) {
                        //console.log(json.creative);
                        adBuilderArr.push(json.creative);
                        // console.log("adBuilderArr", adBuilderArr);
                    });
                });
            }
        });
        // console.log(fileNameArr);
        console.log("adBuilderArr" + adBuilderArr);
    };

    var renderJsonToAdDisplay = function() {
        var template = $("#template").val(),
            format = $("#format").val(),
            fileName = "db/" + template + "_" + format + ".json";

        $.getJSON(fileName, function(json) {
            //console.log(json);
            renderJsonToAdInfo(json);
            adInfoFilled(json);
        });
    };

    var renderJsonToAdInfo = function(json) {
        var brand = json.creative.brand,
            products = json.creative.products;

        // Fill brand info
        $("#brandName input.form-control").val(brand.value);

        // Fill products info
        for(var i = 1; i <= 4; i++) {
            $("#textDesc" + i + " input.form-control").val(products["product" + i]["textDesc" + i].value);
            $("#textPrice" + i + " input.form-control").val(products["product" + i]["textPrice" + i].value);
            $("#textAction" + i + " input.form-control").val(products["product" + i]["textAction" + i].value);
            $("#image" + i + " .preview").css({
                'background-image': 'url(' + products["product" + i]["image" + i].url + ')',
                'background-repeat': 'no-repeat',
                'background-position': 'center'
            });
        }
    };

    var adInfoFilled = function(json) {
        var brand = json.creative.brand,
            products = json.creative.products
            $adItem = $(".ad-item"),
            $products = $("ul.products-list");

        // Fill brand info
        $adItem.find(".brand").html(brand.value);

        // Fill products info
        for(var i = 1; i <= 4; i++) {
            $products.find(".product-item-" + i + " .desc").html(products["product" + i]["textDesc" + i].value);
            $products.find(".product-item-" + i + " .price").html(products["product" + i]["textPrice" + i].value);
            $products.find(".product-item-" + i + " .action").html(products["product" + i]["textAction" + i].value);
        }
    };

    (function init() {
        renderJsonToAdDisplay();
        adsRenderFromJSON();
       $('.color-picker').ColorPicker({
            color: '#0000ff',
            onShow: function (colpkr) {
                $(colpkr).fadeIn(500);
                return false;
            },
            onHide: function (colpkr) {
                $(colpkr).fadeOut(500);
                return false;
            },
            onChange: function (hsb, hex, rgb) {
                $('.color-picker i').css('color', '#' + hex);
            }
        });
    })();

    $body
        .on("change, keyup", ".brand .form-control", function() {
            $(".ad-item .brand").html($(this).val());
        })

        .on("change, keyup", ".tab-pane .form-control", function() {
            // TODO: Change products info on ad when typing into form

            var $this = $(this),
                $product = $this.parentsUntil(".tab-pane").parent().attr("id"),
                $obj = $this.parentsUntil(".form-group").parent().attr("class").replace("form-group ", ""),
                $eleName = ".ad-item ." + $product + " ." + $obj;

            $($eleName).html($this.val());
        })

        .on("click", ".change-font", function() {
            var $this = $(this),
                $fontList = $this.find(".fonts-list");

            if ($fontList.hasClass("active")) {
                $fontList.removeClass("active");
            } else {
                $fontList.addClass("active");
            }
        })
        
        .on("click", ".change-font .fonts-list .font-item", function() {
            var $this = $(this),
                $product = $this.parentsUntil(".tab-pane").parent().attr("id"),
                $obj = $this.parentsUntil(".form-group").parent().attr("class").replace("form-group ", ""),
                $eleName = ".ad-item ." + $product + " ." + $obj;

            $($eleName).css({
                "font-family": $(this).attr("data-font")
            });
        });
});