/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$("document").ready(function() {
    $(".background").css("background-image", "url(http://www.biltmorerecords.com/blog/wp-content/uploads/2014/01/Carolina-Panthers.jpg)");

    $('#superHumans').accordion({header: "h3"});

    $(".CoolJam").css("background-color", 'green');

    $('p:last').css({"background": "white", "color": "grey"});

    $("h1").bind("mouseover", mouseOverMe).bind('mouseout', mouseOutMe);

    $('h1').bind('click', mouseClick);

    $('#replaceWText').text('Replaced!');

    $('#randPara').bind('click', addAPara);

    $('#removePara').bind('click', removeAPara);

    $('#show').css('visibility', 'hidden');

    $('#hide').bind('click', hideThePage);

    $('#show').bind('click', showThePage);

    $('#toggleText').bind('click', toggleTheText);
});

function mouseOutMe() {

}

//this is the part that makes sure that you hide the page 

function hideThePage() {
    $('#show').css('visibility', 'visible');
    $('div').hide('slide', {}, 2500);
    $('#show').show('fold', {}, 2500);
}

//this is the part that makes sure that you show the page 

function showThePage() {
    $('div').show('fold', {}, 2500);
    $('#show').hide('puff', {}, 2500);
}

function removeAPara() {
    $('#randPara p:last').remove();
}

function addAPara() {
    $('#randPara').append('<p>Carolina Panthers</p>');
}

//this is the part that makes sure to replace the line of code thatt is needed

function replaceWText() {
    $('#replaceWText').text('Replaced!');
}

//this line of code tells us how mouseoverme is to make it to where you can hover over the words and the change to this  

function mouseOverMe() {
    $("h1").html("Portfolio 3");
}


function moseOverMe() {
    $("h1").html("CamTron is cool");
}

//this function you clic on a certain spot to change words and letters

function mouseClick() {

    $("p").html("jadoifjadoia[dhgiuakguishfuisadshdfgiushfgi");
}

function toggleTheText() {
    $('#h4').toggle(2500);
}