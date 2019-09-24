$(function(){
    var li_quicviews=[];
    li_quicviews=$(".js__popup_open");
    var length_li_quicviews=li_quicviews.length;
    for (i=0; i<length_li_quicviews; i++){
        atachment(li_quicviews[i]);
    };
});


function atachment(li_quicviews) {
    li_quicviews.onclick=function(){
        $(quickViewPopup).attr("class","popup js__popup js__active");
        event.preventDefault();
        let id = $(this).attr('data-id');
        $.get("/product/getProduct?id="+id,
        function ($data){
           var product= JSON.parse($data);
           $('#Text').text(product.Name);
           $('#pricepop').empty();
           $('#pricepop').append(`<span class="amount">${product.price}</span>`);
           $('.description').empty();
           $(".description").append(`<p>${product.description}</p>`);
               $('#origin').empty();
               $("#origin").append(`<div class="thumbnails" id="photo">
               </div>`);
           product.fotos.forEach(function(e) {
            if(e.position==0){
                $("#origin").append(
                    `<a href="#" class="woocommerce-main-image zoom js__zoom_popup" data-target="#zoomPopup" data-zoom="${e.url}">
                    <img src="${e.url}" alt="" />`
                    );
                    $("#photo").append(
                        `<a href="#" class="zoom js__thumb  js__active" data-images="${e.url}" data-zoom="${e.url}" ><img src="${e.url}" alt="" /></a>`
                        ); 
            } else{
                $("#photo").append(
                `<a href="#" class="zoom js__thumb" data-images="${e.url}" data-zoom="${e.url}" ><img src="${e.url}" alt="" /></a>`
                ); 
            }
           
          });
        });
       
    };
};


$("#btn-ajax-product").click(function(){
    event.preventDefault();
    let start = $('.product-grid').length;
    $.get("/category/ajax?start="+start+"&end="+3,
    function ($data){
        var product= JSON.parse($data);
        $.each(product, function(i, v) {
            var html =''
            html+=`<div class="col-md-4 col-sm-6 col-ip-6 col-xs-12">
                    <div class="product-grid">
                        <div class="thumb">`;


            $.each(v['fotos'], function(index, value) {
                if(value['position']==0){
                html+=`<a href="/product/product?id=${v.id}"><img src="${value.url}" alt="">`;
                
                }
            });
            html+=`<ul class="attribute-list">
                 <li><span class="label-coral">New</span></li>
                 <li><span class="label-red">Sale</span></li>
             </ul>
            </a>
            <ul class="controls">
                <li><a href="#"><i class="fa fa-heart"></i><span>LIKE IT</span></a></li>
                <li><a href="#"><i class="fa fa-exchange"></i><span>COMPARE</span></a></li>
                <li class="quicviews" value="${v.id}"><a href="#" data-id='${v.id}' class="js__popup_open" data-target="#quickViewPopup"><i class="fa fa-arrows-alt"></i><span>QUICK VIEW</span></a></li>
            </ul>
            <a href="#" class="add_to_cart_button">Add to cart</a>
        </div>
        <a href="#" class="content">
            <h2 class="title">${v.Name}</h2>
            <span class="category">Men</span>
            <span class="price">
            <span class="amount">${v.id}</span>
            </span>
            <div class="star-rating">
                <span class="js__width" data-width="80%"><strong class="rating">4.00</strong> out of 5</span>
            </div>
        </a>
    </div>
</div>`;
$('#produckts').append(html);

});
        var li_quicviews=[];
        li_quicviews=$(".js__popup_open");
        var length_li_quicviews=li_quicviews.length;
        for (i=0; i<length_li_quicviews; i++){
            atachment(li_quicviews[i]);
        };
    });

    
});

