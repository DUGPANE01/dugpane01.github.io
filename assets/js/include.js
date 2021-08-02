$(function () {
  var includes = $('[data-include]')
  $.each(includes, function () {
    var file = 'assets/includes/' + $(this).data('include') + '.html'
    $(this).load(file)
  })
})