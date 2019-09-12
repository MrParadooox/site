$(function(){
    $("#inp-reviews-submit").click(function(){
        // alert("ok");
        var id = getUrlParameter('id');
        let name = $('#name-inp').val();
        let email = $('#email-inp').val();
        let description = $('#comment-inp').val();
        if (name.length >= 3){
        }
        else{
            alert('name');
            return
        };
        if (email.length >= 3){
        }
        else{
            alert('email');
            return
        };
        if (description.length >= 3){
        }
        else{
            alert('description');
            return
        };
        $.post("/product/inserReviews", {
            name: name,
            email: email,
            productId: id,
            description: description
        },
        function ($data){
            console.log($data);
            var product = JSON.parse($data);
            console.log(product);
            let html = `
            <li class="comment">
            <div class="comment-body">
            <div class="comment-meta">
            <div class="comment-author vcard">
                <img alt="" src="http://placehold.it/80" class="avatar">
                <b class="fn"><a href="#" rel="external nofollow"
                        class="url">${name}</a></b>
            </div>
            <!-- .comment-author -->
            <div class="comment-metadata">
                <a href="#"><span class="date">Только что</span> <span
                        class="split"></span></a>
            </div>
            <!-- .comment-metadata -->
        </div>
        <!-- .comment-meta -->
        <div class="comment-content">
            <div class="text-content">
                <p>${description}</p>
            </div>
        </div>
        <!-- .comment-content -->
        <div class="reply"><a class="comment-reply-link" href="#">Reply</a>
        </div>
        </div>
    </li>
`;
$(".comment-list").append(html);
$('#comment-inp').val(" ");
        });
    });
});


$(function(){
    $(".comment-reply-link").click(function(){
       
    });
});

var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
};