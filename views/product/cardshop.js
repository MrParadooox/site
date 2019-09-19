$(function(){ 
 

class Product{
    constructor(id, count){
        this.id=id;
        this.count=count;
    }
}

let h = new Product(1,1);
console.log(h);

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