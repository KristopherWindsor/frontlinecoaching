function animate_splash(){
  var currentIndex = 0;
  var total = $("#splash > div").length;
  
  var change = function () {
    var oldIndex = currentIndex;
    currentIndex = ++currentIndex % total;
    
    var onDone = function () { $($("#splash > div")[oldIndex]).css("left", "1280px"); };
    $("#splash > div:nth-child(" + (oldIndex + 1) + "), #splash > div:nth-child(" + (currentIndex + 1) + ")").animate({left: "-=1280px"}, 250, "linear", onDone);
  };
  
  setInterval(change, 8000);
}

function init_wufoo(){
  $("#launch-application-container").show();
  var aTag = $("a[name='launch-application']");
  $('html,body').delay(200).animate({scrollTop: aTag.offset().top}, 1000);
}

function popup_video(el){
  // do nothing for mobile
  if ( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ){
    return true;
  }
  
  var iframe = $('<iframe width="560" height="315" src="" frameborder="0" allowfullscreen></iframe>').attr("src",
    "//www.youtube.com/embed/" + $(el).attr("href").split('=')[1] + "?rel=0&autoplay=1");
  
  $("#fullscreenpopup").html(iframe).show();
  return false;
}

function init_popup(){
  $(document).keyup(function (e) {
    if (e.keyCode == 27)
      $("#fullscreenpopup").html("").hide();
  });
  $(document).click(function (e) {
    if (e.target == $("#fullscreenpopup")[0])
      $("#fullscreenpopup").html("").hide();
  });
}

init_popup();
