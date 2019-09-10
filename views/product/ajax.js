$(function(){

    $(".btn-ajax-loading").click(function(){
        $.get("/category/ajax?start="+0+"&end="+10,
        function ($data){
            var product= JSON.parse($data);
            console.log(product);
        });
    });
});