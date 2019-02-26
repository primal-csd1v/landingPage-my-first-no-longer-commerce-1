/**
 * Created by yty on 07.05.2018.
 */

$(window).scroll(function () {
    var ratio = $(document).scrollTop()/(($(document).height()-$(window).height())/100);
    $("#progress").width(ratio+"%");
});

$(document).ready(function () {

    //Scroll------------------------------------------
    $(window).scroll(function () {
        var arrowS = $(window).scrollTop();
        if(arrowS>=632){
            $(".arrow").css("display","block");
        }else {
            $(".arrow").css("display","none");
        }
    });

//Scroll------------------------------------------

//Удаление окна при клике за его пределами----------------
    setTimeout(function () {
        $(".chat-svg").fadeIn();
    }, 5000);

    var checkChat = 0;
    $(".chat-svg").click(function () {

        if (checkChat === 0){$(".chat-container").fadeIn();
            checkChat = 1;}
        else{$(".chat-container").fadeOut();
            checkChat = 0;}
    });

    $(document).mouseup(function (e) {
        var container = $(".chat-container");
        if (container.has(e.target).length === 0){
            container.hide();
            checkChat = 0;
        }
    });
    $(".X").click(function () {
        $(".chat-container").fadeOut();
        checkChat = 0;
    });
//Удаление окна при клике за его пределами----------------

//modal WIndow
    function getModal () {


        $(".modal").css({"top": $(window).scrollTop()+150});
        $(".modal").fadeIn();
        $(".modal-owerlay").fadeIn();
    }

    function closeModal () {
        $(".modal-owerlay").fadeOut();
        $(".modal").fadeOut();
    }


    $(".modal-trigger").click(getModal);
    $(".modal-event").click(getModal);
    $(".modal-x").click(closeModal);
    $(".button-close").click(closeModal);
    $(".modal-owerlay").click(function () {
        $(".modal").fadeOut();
        $(".modal-owerlay").fadeOut();
    });
    //modal WIndow

    $(".mb-clear").click(function () {
        $('#modal-input').val('');
        $('#modal-input1').val('');
        $('#modal-input2').val('');
        $('#modal-input3').val('');
    });


//slider c хорошим листанием по циклу - каарруусиелька

    var slides = document.querySelectorAll('#slidewrapper .slide');

    var currentSlide = 0;

    var slideInterval = setInterval(nextSlide,3500);


    function changeSlide(dir){
        slides[currentSlide].className = 'slide';
        currentSlide = (currentSlide+dir)%slides.length;
        if(currentSlide === -1) {
            currentSlide = 3;
        }
        console.log(currentSlide);
        slides[currentSlide].className = 'slide vis';
    }
    slideInterval;
    console.log(slideInterval);

    function clearIterration() {
        clearInterval (slideInterval);
    }


    function nextSlide() {
        changeSlide(1);
    }

    function prevSlide() {
        changeSlide(-1);
    }


    var clearX = 0;
    $(".arrow-next").click(function () {
        nextSlide();
        clearX = 1;
        if(clearX === 1){
            clearIterration();
        }
    });
    $(".arrow-back").click(function () {
        prevSlide();
        clearX = 1;
        if(clearX === 1){
            clearIterration();
        }
    });

    console.log(clearX);


//slider


});





