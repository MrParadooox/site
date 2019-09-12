
$(function(){
    $("#btn-ajax-product").click(function(){
        event.preventDefault();
        let start = $('.product-grid').length;
        $.get("/category/ajax?start="+start+"&end="+3,
        function ($data){
            var product= JSON.parse($data);
            console.log(product);
            $.each(product, function(i, v) {
                var html =''
                console.log(v);
                html+=`<div class="col-md-4 col-sm-6 col-ip-6 col-xs-12">
						<div class="product-grid">
							<div class="thumb">`;


                $.each(v['fotos'], function(index, value) {
                    console.log(value);
                    if(value['position']==0){
                    html+=`<a href="/product/product?id=${v['id']}"><img src="${value['url']}" alt="">`;
                    
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
                 <li class="quicviews" value="${v['id']}"><a href="#" data-id='${v['id']}' class="js__popup_open"data-target="#quickViewPopup"><i class="fa fa-arrows-alt"></i><span>QUICK VIEW</span></a></li>
             </ul>
             <a href="#" class="add_to_cart_button">Add to cart</a>
         </div>
         <a href="#" class="content">
             <h2 class="title">${v['Name']}</h2>
             <span class="category">Men</span>
             <span class="price">
             <span class="amount">${v['id']}</span>
             </span>
             <div class="star-rating">
                 <span class="js__width" data-width="80%"><strong class="rating">4.00</strong> out of 5</span>
             </div>
         </a>
     </div>
 </div>`;
 $('#produckts').append(html);
            });
            console.log(product[0]);
        });
    });
});

