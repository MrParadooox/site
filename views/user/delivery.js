

$( document ).ready(function() {
    console.log( "document loaded" );

    $("#place_order").click(function(){
        let id = $(this).attr('data-id');
        $.get("https://www.delivery-auto.com/api/v4/Public/GetRegionList?culture=ru-RU&country=1",
        function ($data){
            $.each($data.data, function(index, v) {
                console.log(v);
                $("#obl").append(`<option  value="${v.externalId}">${v.name}</option>`);
            });
            console.log($data);

       });
    });

});



//получение списка областей
// $(function(){

    // $(".js__popup_open").click(function(){
    //     let id = $(this).attr('data-id');
    //     $.get("https://www.delivery-auto.com/api/v4/Public/GetRegionList?culture=ru-RU&country=1",
    //     function ($data){
    //        var product= JSON.parse($data);
    //        $('#Text').text(product.Name);
    //        $('#pricepop').empty();
    //        $('#pricepop').append(`<span class="amount">${product.price}</span>`);
    //        $('.description').empty();
    //        $(".description").append(`<p>${product.description}</p>`);
    //            $('#origin').empty();
    //            $("#origin").append(`<div class="thumbnails" id="photo">
    //            </div>`);
    //        product.fotos.forEach(function(e) {
    //         if(e.position==0){
    //             $("#origin").append(
    //                 `<a href="#" class="woocommerce-main-image zoom js__zoom_popup" data-target="#zoomPopup" data-zoom="${e.url}">
    //                 <img src="${e.url}" alt="" />`
    //                 );
    //                 $("#photo").append(
    //                     `<a href="#" class="zoom js__thumb  js__active" data-images="${e.url}" data-zoom="${e.url}" ><img src="${e.url}" alt="" /></a>`
    //                     ); 
    //         } else{
    //             $("#photo").append(
    //             `<a href="#" class="zoom js__thumb" data-images="${e.url}" data-zoom="${e.url}" ><img src="${e.url}" alt="" /></a>`
    //             ); 
    //         }
           
    //       });
    //    });
    // });
  
// });