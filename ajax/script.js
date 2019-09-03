$("#ajaxLoad").click(function(){
    $("#ContainerDiv").load("add.html #Container");
});
$("#PostAjax").click(function(){
    $.post("ajax.php" , {
        id : '123',
        user: "User",
        login: "huinane",
        password: "password123"

    }, function ($data){
        var user= JSON.parse($data);
        $("#myTable").append(
            `<tr><td>${user[0]}</td><td>${user[1]}</td><td>${user[2]}</td><td>${user[3]}</td></tr>`
        )
    });
});