

$(function() {
    let dataobl;

      $('#delivery2').on('select2:select', function (e) {
          if ($('#delivery2').val() == 'Деливери'){
            //  var data = e.params.data;
                deliveryObl();
          }
        
        return
    });

    function deliveryObl(){
        $('#obl').empty();
        $.get(`https://www.delivery-auto.com/api/v4/Public/GetRegionList?culture=ru-RU&country=1`,
        function ($r){
            $.each($r.data, function(index, v) {
                // console.log(v);
                $("#obl").append(`<option  value="${v.id}">${v.name}</option>`);
            });
       });
    };

    // город
    $('#obl').on('select2:select', function (e) {
        $('#gorod').empty();
        dataobl = e.params.data;
        // console.log(dataobl);
        // console.log(dataobl.id);
        $.get(`https://www.delivery-auto.com/api/v4/Public/GetAreasList?culture=ru-RU&regionId=${dataobl.id}&country=1`,
        function ($g){
            $.each($g.data, function(index, v) {
                // console.log(v);
                    $("#gorod").append(`<option  value="${v.id}">${v.name}</option>`);
            });
            // console.log($data);

       });

    });


    $('#gorod').on('select2:select', function (e) {
        $('#otdelenie').empty();
        var otdel = e.params.data;

        $.get(`https://www.delivery-auto.com/api/v4/Public/GetWarehousesList?culture=ru-RU&CityId=${otdel.id}&RegionId=${dataobl.id}&country=1`,
        function ($o){
            $.each($o.data, function(index, v) {
                console.log(v);
                $("#otdelenie").append(`<option  value="${v.externalId}">${v.name}</option>`);
            });

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