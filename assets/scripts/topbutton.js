//go to top button
let btn = $('#button')
$(window).scroll(function () {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show')
  } else {
    btn.removeClass('show')
  }
})
