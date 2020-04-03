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



  let countImgs = $(".advert__imgs-wrap").children('.advert__image').length;
  if (countImgs > 0) {
    $(".countimgs").text(countImgs);
  } else {
    $(".countimgs").text("0");
  }

  var wapposter = {
    init: function () {
      this.charC();
    },
    charC: function () {
      $.fn.charCount = function (options) {
        var defaults = {
          allowed_max: 240,
          allowed: 70,
          counter: 'counter',
          count_sms: 'count_sms',
          limit: 'limit'
        };
        var options = $.extend(defaults, options);

        function calculate(obj) {
          var count = $(obj).val().length;
          var count_sms = Math.ceil(count / options.allowed);
          var available = options.allowed * count_sms - count;
          if (count_sms == 0) {
            count_sms = 1;
            available = options.allowed
          }
          if (count > options.allowed_max) {
            $(obj).val($(obj).val().substr(0, options.allowed_max))
          } else {
            var parent = $(obj).parent();
            parent.find('.' + options.counter).html(options.allowed_max - count);
            parent.find('.' + options.limit).html(available);
            parent.find('.' + options.count_sms).html(count_sms);
            var vip_select = $('#advert-form input:radio[name=advert-type]:checked').val();
            if (vip_select == 'basic') {
              $('#cost').text(count_sms * 20);
            } else if (vip_select == 'vip') {
              $('#cost').text(count_sms * 85);
            }
          }
        };

        $(document).on('change', '#advert-form input[name=advert-type]', function () {
          calculate($('#message'))
        });

        $(document).on('input propertychange', "textarea[name='message']", function () {
          calculate($('#message'))
        })
      };

      $('#message').charCount({
        allowed_max: 400,
        allowed: 70
      })
    }
  };

  (function ($) {
    wapposter.init()
  })(jQuery);

});