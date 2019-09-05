$(function(){
    var li_quicviews=[];
    li_quicviews=$(".js__popup_open");
    var length_li_quicviews=li_quicviews.length;
    for (i=0; i<length_li_quicviews; i++){
        atachment(li_quicviews[i]);
    }
});

function atachment(li_quicviews) {
    li_quicviews.onclick=function(){
        var el=li_quicviews.parentElement;
        $('#Text').text("HELLO");
    };
}