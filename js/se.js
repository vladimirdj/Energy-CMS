$(".dugme").on("click", function(){
  $(".klizac").toggleClass("aktivan")
  if ($(".klizac").hasClass("aktivan"))
    {
      $("body").addClass("non-margin")
    } else {
      $("body").removeClass("non-margin")
    }
})

$(".toggle").on("click", function() {
  $(".toggle").parent().toggleClass('active');
});

var toggleFirstSection = function () {
  console.log(this);
    $("#ploca1").slideToggle();
};
var toggleSecondSection = function () {
    $("#ploca2").slideToggle();
};
var toggleThirdSection = function () {
    $("#ploca3").slideToggle();
};
var toggleFourSection = function () {
    $("#ploca4").slideToggle();
};
var toggleFiveSection = function () {
    $("#ploca5").slideToggle();
};
var toggleSixSection = function () {
    $("#ploca6").slideToggle();
};
var toggleSixSeven = function () {
    $("#ploca7").slideToggle();
};
var toggleSixEight = function () {
    $("#ploca8").slideToggle();
};

$("#dugme1").click(toggleFirstSection);
$("#dugme2").click(toggleSecondSection);
$("#dugme3").click(toggleThirdSection);
$("#dugme4").click(toggleFourSection);
$("#dugme5").click(toggleFiveSection);
$("#dugme6").click(toggleSixSection);
$("#dugme7").click(toggleSixSeven);
$("#dugme8").click(toggleSixEight);

/*******************/
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("Btn").style.display = "block";
    } else {
        document.getElementById("Btn").style.display = "none";
    }
}
function topFunction() {
 document.body.scrollTop = 0;
 document.documentElement.scrollTop = 0;
}

/***************/
var month = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

function clocking(){
  var dateGetter = new Date();
  var h = dateGetter.getHours();
  var m = dateGetter.getMinutes();
  var s = dateGetter.getSeconds();
  var dayOf = dateGetter.getDate();
  var mon = dateGetter.getMonth();
  var yr = dateGetter.getFullYear();

  if(h>12){
    h = h-12;
    if(h<10){
       h = '0'+h;
     }
  }
  else if (h<10){
    h = '0'+h;
  }

  if(m<10){
    m = '0'+m;
  }

  if(s<10){
    s = '0'+s;
  }

  document.getElementById('hour').innerHTML = h+':';
  document.getElementById('minutes').innerHTML = m+':';
  document.getElementById('seconds').innerHTML = s;
  document.getElementById('day').innerHTML = dayOf+'.';
  document.getElementById('month').innerHTML = month[mon]+'.';
  document.getElementById('year').innerHTML = yr+'.';
  var timeRepeat = setTimeout(clocking, 1000);
}

clocking();
