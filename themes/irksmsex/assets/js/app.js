$(document).ready(function () {
  $("body").append('<div class="ajax-errors"></div>');

  $(function () {
    $('[data-toggle="tooltip"]').tooltip();
  })

  $('html').on('click', '.close', function () {
    $(this).parent().remove();
  });

  $(window).on('ajaxErrorMessage', function (event, message) {
    $("div.ajax-errors")
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
    $('.image3-name').text("");
  });



  // let countImgs = $(".count_imgs-parent").children('.advert__image').length;



});