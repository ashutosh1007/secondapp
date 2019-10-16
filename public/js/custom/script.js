$(document).ready(function () {
/******CATEGORY AJAX*****/
$('#addToCategory').click(function () {
    var categoryName = $('#category_name').val();
    console.log("Button CLicked");
    //        $.ajaxSetup({
    //            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    //        });
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/dashboard/save_category',
        type: 'POST',
        data: {
            category_name: categoryName
        },
        success: function (response) {
            console.log(response);
            swal({
                icon: "success",
                text: "Saved!"
            });
        },
        error: function () {
            swal({
                icon: "error",
                text: "Oops!.Something went Wrong!"
            });
        }
    });
});

/**********ADD PRODUCT AJAX********/
var sizes = [];
$("#add_product").click(function () {
    var productName = $('#product_name').val();
    var productCategory = $('#product_category').val();
    var productType = $('#product_type').val();
    var productDesign = $('#product_design').val();
    var productMaterial = $('#product_material').val();
    var productCost = $('#product_cost').val();
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/dashboard/save_product',
        type: 'POST',
        data: {
            product_name: productName,
            product_category: productCategory,
            product_type: productType,
            product_design: productDesign,
            product_material: productMaterial,
            product_cost: productCost
        },
        success: function (response) {
            swal({
                icon: "success",
                text: "Product has been saved! Kindly add further Details"
            }).then(function () {
                console.log(response);
                var productId = JSON.parse(response);
                window.location.href = "/dashboard/add_product/add_product_details/" + productId;
            });
        },
        error: function (response) {
            swal({
                icon: "error",
                text: "Something went wrong Please try again"
            }).then(function () {
                console.log(response);
            });
        }
    });
});
/****ADD TO CART****/
$('#addToCart').click(function () {
    window.alert("Clicked");
    localStorage.setItem("Trident", "1");
    window.alert("Done");
    window.alert(localStorage.getItem("Trident"));
});
/*********DATATABLES**********/
$('#example').DataTable();


/************ADD PRODUCT DETAILS ADD SIZE ELEMENTS************/
$('#add_more').click(function () {
    $('#add_product_table').append('<tr>' +
        '<td>' +
            '<select class="form-control product_size">' +
                '<option selected disabled>--Select Size--</option>' +
                '<option value="S">Small</option>' +
                '<option value="M">Medium</option>' +
                '<option value="L">Large</option>' +
                '<option value="XL">XL</option>' +
                '<option value="XXL">XXL</option>' +
                '<option value="XXXL">XXXL</option>' +
            '</select>' +
        '</td>' +
        '<td>' +
            '<select class="form-control product_color" id="product_color_">'+
               '<option selected disabled>--Select Color--</option>'+
                '<option value="red">Red</option>'+
			     '<option value="blue">Blue</option>'+
			     '<option value="green">Green</option>'+
                '<option value="black">Black</option>'+
			     '<option value="white">White</option>'+
			     '<option value="yellow">Yellow</option>'+
			'</select>'+
        '</td>' +
        '<td>' +
        '<input class="form-control product_quantity" type="text">' +
        '</td>' +
        '<td>' +
        '</td>' +
        '</tr>');
});
/************REMOVE TABLE PRODUCT ELEMENT**********/
$('#remove-product').click(function () {
    var size = $('.product_size');
    //alert(size.toString());
    $('#add_product_table tr:last').remove();
});

    /**************ADDING ALL THE PRODUCT DETAILS TO DATABASE SIZE/QTY***********/
    $('#add_all_products').click(function(){
        var sizeArray = [];
        var colorArray = [];
        var quantityArray = [];
            var sizeElements = $('.product_size');
            var colorElements = $('.product_color');
            var quantityElements = $('.product_quantity');
        for(var i=0; i<sizeElements.length;i++){
            sizeArray[i]=$(colorElements[i]).val();
            colorArray[i]=$(colorElements[i]).val();
            quantityArray[i]=$(quantityElements[i]).val();
        }
        $.ajax({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },  
            data:{
                sizes:sizeArray,
                colors:colorArray,
                quantities:quantityArray
            },
            url:'/dashboard/save_product_details',
            type:'POST',
            success:function(response){
                window.alert(response);
            }
        });
    });
});
