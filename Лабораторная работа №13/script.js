$(document).ready(function() {
    // Задание 12
    $('.img12').fadeOut(1000);

    
    // Задание 1
    $('.button').click(function() {
        $(".p1").hide();
    });

    // Задание 2 

    $("#but1").click(function () {
        $("#test").hide();
    });

    $("#but2").click(function () {
        $("#test").show();
    });

    // Задание 3 

    $(".button").click(function () {
        $(".test").hide();
    });

    // Задание 4
    $(".tast4Hide").click(function() {
        $(".MsoNormal").hide();
    });

    $(".tast4show").click(function() {
        $(".MsoNormal").show();
    });

    // Задание 5
    $(".dbtext").dblclick(function() {
        $(this).hide();
    });

    // Задание 6
    $(".mouseNaved").mouseenter(function() {
        alert('Вот и сообщение');
    });

    // Задание 7
    $(".fb").focus(function() {
        $(this).css("background-color", "#ccc");
    });

    $(".fb").blur(function() {
        $(this).css("background-color", "#fff");
    });

    // Задание 8
    $(".button1000").click(function() {
        $("p").hide(1000);
    });

    // Задание 9
    $(".button9").click(function() {
        $("p").toggle();
    });

    // Задание 10
    $('[align="center"]').dblclick(function() {
        $(this).fadeOut(1000);
        $(this).fadeIn(1000);
    });

    // Задание 11
    $(".task11").click(function () {
        $("#div1").fadeOut();
        $("#div2").fadeOut("slow");
        $("#div3").fadeOut(3000);
    });

    // Задание 12
    $("#btn1").click(function () {
        let arr = $('.img12');
        $.each(arr, function(index) {
            arr[0].fadeIn(1000);
            arr[1].fadeOut(1000);
        })
    });

    $("#btn2").click(function () {
        let arr = $('.img12');
        $.each(arr, function(index) {
            arr[0].fadeIn(1000);
            arr[1].fadeIn(1000);
        })
    });

    // Задание 14
    $(".task14").click(function () {
        var links = $('li> a');
        for (var i = 0; i < links.length; i++) {
            alert(links[i].href);
        }
    });

    // Задание 15
    var links = $('a', 'li');
    for (var i = 0; i < links.length; i++) {
        return false;
        alert(i + ": " + links[i].href);
    }

    // Задание 16
    var links = $('li a'); 
    links.each(function (i, a) {
        alert(i + ': ' + a.innerHTML);
        if (i == 1) return false; 
    });

    // Задание 17
    $(".btn17-1").click(function () {
        alert("Text: " + $("#test17").text());
    });

    $(".btn17-2").click(function () {
        alert("HTML: " + $("#test17").html());
    });

    // Задание 18
    $(".task18").click(function () {
        alert("Value: " + $("#test18").val());
    });

    // Задание 19
    $(".task19").click(function () {
        alert($("#w3s").attr("href"));
    });

    // Задание 20
    let parag = $('.parag');
    $('.change-polojenie').click(function() {
        parag[2].css({"backgroundColor": "black", "color": "white"});
        parag[4].css({"transform": "translateX(-100px)"});
    });

    let taskImg19 = $('.taskImg19');

        taskImg19.eq(1).click(function() {
            $(this).css({"transform": "translateX(-100px)"})
        });
        console.log(taskImg19.eq(1));
});