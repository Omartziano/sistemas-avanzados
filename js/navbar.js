/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function(){
    $('ul.tabs').tabs();
    /*$("#navBar").load("../sistemas-avanzados/includes/navbar.html");
    $("#footer").load("../sistemas-avanzados/includes/footer.html");
    var url = window.location.href.split('/');
    alert(url[url.length-1]);
    $('ul.tabs li').children().removeClass("active");
    switch(url[url.length-1]){
        case "index.html":
            $('a#homeLink').addClass("active");
            break;
        case "news.html":
            $('a#newsLink').addClass("active");
            break;
    }*/
});
$( document ).on('click', 'ul.tabs li a', function(){
    switch($(this).text().toString()){
        case "Home":
            window.location.href = "../sistemas-avanzados/index.html";
            break;
        case "News":
            window.location.href = "../sistemas-avanzados/news.html";
            break;
    }
});

