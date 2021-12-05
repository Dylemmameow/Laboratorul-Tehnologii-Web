
$(document).ready(function(){
 $("button:eq(0)").click(function(){
  $("div > span").css("background-color","yellow");
});
$("button:eq(1)").click(function(){
  $("div span").css("background-color","yellow");
});
$("button:eq(2)").click(function(){
  $("div ~ h4").css("background-color","yellow");
});
$("button:eq(3)").click(function(){
  $("div + h4").css("background-color","yellow");
});