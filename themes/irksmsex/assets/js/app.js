$(document).ready(function () {
  $("body").append('<div class="ajax-errors"></div>');

  $(function () {
    $('[data-toggle="tooltip"]').tooltip();
  })

  // Close btn
  $('html').on('click', '.close', function () {
    $(this).parent().remove();
  });

  // Отлов ajax ошибок
  $(window).on('ajaxErrorMessage', function (event, message) {
    $("div.ajax-errors")
      .empty()
      .append('<div class="alert alert-danger">' + message + '<a class="close ml-2" href="javascript:;">&times;</a></div>')
    event.preventDefault();
  });


  // Gallery
  $(document).on('click', '[data-toggle="lightbox"]', function (event) {
    event.preventDefault();
    $(this).ekkoLightbox();
  });




  // Выводит название файла
  $('#attachimage1').on('change', function () {
    var splittedFakePath = this.value.split('\\');
    $('.image1-name').text(splittedFakePath[splittedFakePath.length - 1]);
  });
  // Очищает input от выбранного файла
  $('#btn-remove-image1').click(function () {
    $('#attachimage1').val("");
    $('#attachimage1del').val("1");
    $('.image1-name').text("");
  });

  // Выводит название файла
  $('#attachimage2').on('change', function () {
    var splittedFakePath = this.value.split('\\');
    $('.image2-name').text(splittedFakePath[splittedFakePath.length - 1]);
  });
  // Очищает input от выбранного файла
  $('#btn-remove-image2').click(function () {
    $('#attachimage2').val("");
    $('#attachimage2del').val("1");
    $('.image2-name').text("");
  });

  // Выводит название файла
  $('#attachimage3').on('change', function () {
    var splittedFakePath = this.value.split('\\');
    $('.image3-name').text(splittedFakePath[splittedFakePath.length - 1]);
  });
  // Очищает input от выбранного файла
  $('#btn-remove-image3').click(function () {
    $('#attachimage3').val("");
    $('#attachimage3del').val("1");
    $('.image3-name').text("");
  });




});