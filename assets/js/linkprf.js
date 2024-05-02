$(window).scroll(() => {
  if ($(window).scrollTop() > 0) {
    $(".navbar").css("background", "#201a14");
  } else {
    $(".navbar").css("background", "transparent");
  }
});
