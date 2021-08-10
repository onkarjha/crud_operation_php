$(document).ready(function() {

    $(".sub").click(function() {
        var name = $("#name").val();
        var email = $("#email").val();
        var phone = $("#phone").val();
        var age = $("#age").val();
        $.post("upload.php", {
            click: 'upload',
            n: name,
            e: email,
            p: phone,
            a: age
        }, function(res) {
            if (res == 1) {
                $(".add_a").html('<p class="p">Successfully Inserted</p>');               
            }
        });
    });
    /* delete*/
    $(".d").click(function() {

        var id = $(this).attr("title");

        $.post("upload.php", {
            click: 'delete',
            id: id
        }, function(res) {
            if (res == 1) {
                $(".q").html('<p class="p">Successfully Deleted</p>');
               
            }
        });
    });
    /* delete ends*/
    /*update*/
    $(".up").click(function() {
        var id = $(this).attr('title');
        var n = $(this).parent("td").siblings(".t2").children("textarea").val();

        var e = $(this).parent("td").siblings(".t3").children("textarea").val();
        var p = $(this).parent("td").siblings(".t4").children("textarea").val();
        var a = $(this).parent("td").siblings(".t5").children("textarea").val();
        console.log(id, n, e, p, a);
        $.post("upload.php", {
            click: 'update',
            id: id,
            n: n,
            e: e,
            p: p,
            a: a
        }, function(res) {
            if (res == 1) {
               $(".q").html('<p class="p">Successfully Updated</p>');
               
            } 
        });
    });
    /* update ends*/
});