/*=========================================================================================
  File Name: form-validation.js
  Description: jquery bootsreap validation js
  ----------------------------------------------------------------------------------------
  Item Name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
  Author: PIXINVENT
  Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

(function (window, document, $) {
  'use strict';

  $("form").validate({
    errorElement: "span",
    errorPlacement: function (error, element) {
      var select2 = $(element);
      if (select2.hasClass("select2")) {
        error.addClass("invalid-feedback");
        select2.closest("div").append(error);
        console.log("test");
      } else {
        error.addClass("invalid-feedback");
        element.closest(".form-control").after(error);
      }
    },
    highlight: function (element, errorClass, validClass) {
      var select2 = $(element);
      if (select2.hasClass("select2")) {
        select2.parents('.form-group').addClass('is-invalid');
      } else {
        $(element).addClass("is-invalid");
      }
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass("is-invalid");
    },
  });

  $.extend($.validator.messages, {
    required: "Harap di isi.",
    remote: "Harap benarkan kolom ini.",
    email: "Silakan masukkan format email yang benar.",
    url: "Silakan masukkan format URL yang benar.",
    date: "Silakan masukkan format tanggal yang benar.",
    number: "Silakan masukkan angka yang benar.",
    digits: "Harap masukan angka saja.",
    creditcard: "Harap masukkan format kartu kredit yang benar.",
    equalTo: "Harap masukkan nilai yg sama dengan sebelumnya.",
    maxlength: $.validator.format("Input dibatasi hanya {0} karakter."),
    minlength: $.validator.format("Input tidak kurang dari {0} karakter."),
    rangelength: $.validator.format("Panjang karakter yg diizinkan antara {0} dan {1} karakter."),
    range: $.validator.format("Harap masukkan nilai antara {0} dan {1}."),
    max: $.validator.format("Harap masukkan nilai lebih kecil atau sama dengan {0}."),
    min: $.validator.format("Harap masukkan nilai lebih besar atau sama dengan {0}.")
  });


})(window, document, jQuery);
