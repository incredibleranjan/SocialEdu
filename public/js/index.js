/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* global newsfeeds, latestComment */

$(document).ready(initialize);
$(document).ready(function() {

    
    $('.news').html("");
    Str = "";
    $.each(newsfeeds, function(index, inVal) {
        Str += '<div class="jumbotron "><header class="news-source">' + inVal.author + '<br/><span style="font-size:13px;color:gray;font-family: sans-serif;text-align: right;">' + inVal.date_time + '</span></header><br/><p class="newscontents"> ' + inVal.content + ' <br/><br/><a href="home/checkProfile/ ' +inVal.author_id+ ' " class="btn btn-primary btn-lg" role="button">View Profile &raquo;</a></p></div>';
    });
    $('.news').html(Str);

    
});
  
$(function() {
    var Str="";
if ($('#comment_button').length !== 0) {

        $('#comment_button').on('click', function(){

            // "url" is defined in views/_templates/footer.php
            var stringValue=$('#newfeed').val();
            if(stringValue)
            {
               $("#flash").fadeIn(400).html('<img src='+url+'application/public/img/ajax-loader.gif" height="40px" width="40px" align="absmiddle"><span class="loading">Loading Post...</span>');
                   
            $.ajax(url + "/home/postFeed/" +stringValue)
                .success(function(latestComment) {
                    console.log(latestComment);
                 obj = jQuery.parseJSON(latestComment);
                  console.log(obj);
                    // this will be executed if the ajax-call was successful
                    // here we get the feedback from the ajax-call (result) and show it in #javascript-ajax-result-box
                    $('#ajax-result-box').html('');
                    $.each(obj, function(index, inVal) {
                        console.log(inVal.author);
        Str = '<div class="jumbotron"><header class="news-source">' + inVal.author + '<br/><span style="font-size:13px;color:gray;font-family: sans-serif;text-align: right;">' + inVal.date_time + '</span></header><br/><p class="newscontents"> ' + inVal.content + ' <br/><br/><a href="home/checkProfile/ ' + inVal.author_id+ ' " class="btn btn-primary btn-lg" role="button">View Profile &raquo;</a></p></div>' + Str;
    });
    $('#ajax-alert-box').html(Str);
    $('#ajax-alert-box').show();
    $('#flash').hide();
    $('#newfeed').val("");
              })
                 .fail(function() {
                    // this will be executed if the ajax-call had failed
                })
                .always(function() {
                    // this will ALWAYS be executed, regardless if the ajax-call was success or not
                });
                
            }
            else
                alert("Input Empty!!");
               
        });
    }
    });

var initialize = function() {
    $('.news').append("<h1>Navbar example</h1>   <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p><p>To see the difference between static and fixed top navbars, just scroll.</p>");


};




