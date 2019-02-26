


function preLoad() {
    $(".modal-p, .modal-p1, .modal-p3, .modal-p4").fadeOut();
}

function compleat() {
    alert(123);
}

$(document).ready(function () {

    $(".mb").bind("click",function () {
        $.ajax({
            url:"dataAnswer/send.php",
            type:"POST",
            data:({name: $("#modal-input").val(),
            lastName:$("#modal-input1").val(),
                number:$("#modal-input2").val(),
                email:$("#modal-input3").val()
            }),
            beforeSend:preLoad,
            success: compleat
        });
    });

});