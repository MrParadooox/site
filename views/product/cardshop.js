$(function(){ 
 

class Product{
    constructor(id, count){
        this.id=id;
        this.count=count;
    }
}
$(".add_to_cart_button").click(function(){
    let id = $(this).attr('data-id');
    addToBasket(id);
});
// тут добавляєм в корзину
function RemoteProduct(remote) {
    remote.onclick=function(){
        let id = $(remote).attr('data-id');
    alert( id);
    let productBasket = CookieCheack();
    $.each(productBasket, function(i, v) {
    if(v.id == id ){
        delete v;
    }
    });
};
};
// тут ми виводимо кукі
    $(".cart-list").empty();
    let productBasket = CookieCheack();
    console.log(productBasket);
    let total = 0;
    $.each(productBasket, function(i, v) {
        let html ='';
        console.log(v.count);
        $.get("/card/getProduct?id="+v.id,
        function ($data){
            var product= JSON.parse($data);
            console.log(product);

            html+= `<li>`;

              product.fotos.forEach(function(e) {
            if(e.position==0){
                html+= `<a class="thumb" href="#"><img src="${e.url}" width="80" height="80" alt="" class="attachment-shop_thumbnail"></a>`;
            }
            });
            
            html+=`<a href="#" class="title">${product.Name}</a>
            <span class="quantity">
                <span class="amount">${product.price}</span> x ${v.count}
            </span>
            <div class="star-rating">
                <span class="js__width" data-width="100%"><strong class="rating">4.00</strong> out of 5</span>
            </div>
            <a title="Remove this item"  class="mini-cart-remove" href="#"><span class="fa fa-times"></span></a>
            </li>`;
            total = total + (product.price * v.count);
$(".cart-list").append(html);

        });
        
    });
    $(".cart-list-subtotal").append(`	<strong class="currency fr">${total}</strong>`);

    var remote=[];
    remote=$(".mini-cart-remove");
    var length_remote=remote.length;
    console.log('rem');
    console.log(remote);
    for (i=0; i<length_remote; i++){
        RemoteProduct(remote[i]);
        alert(remote[i])
    };

    function CookieCheack() {
        var addCard = decodeURIComponent(document.cookie);
        var pos=addCard.indexOf("product=");
        var start=pos+8;
        var end=addCard.indexOf(";",start);
        if (end=-1) {end=addCard.length};
        var productBasket=JSON.parse(addCard.substring(start, end));
        console.log(productBasket);
        return productBasket;
    }





function addCookie (productBasket, id) {
    for (i=0; i<productBasket.length; i++){
        if (productBasket[i].id==id){
            productBasket[i].count++;
            return productBasket;
        } else if (i==productBasket.length-1) {
            productBasket[i+1]=new Product(id, 1);
            return productBasket;
        }
    }
}

function addToBasket(id) {
    var addCard = decodeURIComponent(document.cookie);
    var pos=addCard.indexOf("product=");
    if (pos!=-1){
        var start=pos+8;
        var end=addCard.indexOf(";",start);
        if (end=-1) {end=addCard.length};
        var productBasket=JSON.parse(addCard.substring(start, end));
        product=addCookie(productBasket, id);
    } else {
        var product = [];
        product[0] = new Product(id, 1);            
    }  
    let exp = new Date();
    exp.setDate(exp.getDate() + 30);
    document.cookie = `product=${JSON.stringify(product)}; expires=${exp.toUTCString()}; path=/`;      
}

});