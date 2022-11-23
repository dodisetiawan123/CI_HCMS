/*
Template Name: Minia - Admin & Dashboard Template
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: Form advanced Js File
*/


// Chocies Select plugin
document.addEventListener('DOMContentLoaded', function () {
  var genericExamples = document.querySelectorAll('[data-trigger]');
  for (i = 0; i < genericExamples.length; ++i) {
    var element = genericExamples[i];
    new Choices(element, {
    placeholderValue: 'This is a placeholder set in the config',
    searchPlaceholderValue: 'This is a search placeholder',
    });
  }
  

  // Pilih Pendidikan
  var singleNoSorting = new Choices('#pilih-pendidikan', {
    shouldSort: false,
  });

  // Nama Jabatan
  var singleNoSorting = new Choices('#pilih-jabatan', {
    shouldSort: false,
  });

  // Pilih Bagian
  var singleNoSorting = new Choices('#pilih-bagian', {
    shouldSort: false,
  });
  // Pilih Bagian
  var singleNoSorting = new Choices('#pilih-level', {
    shouldSort: false,
  });

  // Nama Organisasi
  var singleNoSorting = new Choices('#pilih-organisasi', {
    shouldSort: false,
  });

  // Jenis kelamin
  var singleNoSorting = new Choices('#jenis-kelamin', {
    shouldSort: false,searchEnabled: false,
  });

  // Status
  var singleNoSorting = new Choices('#status', {
    shouldSort: false,searchEnabled: false,
  });

  // Status
  var singleNoSorting = new Choices('#agama', {
    shouldSort: false,searchEnabled: false,
  });

  // Fungsi
  var singleNoSorting = new Choices('#fungsi', {
    shouldSort: false,searchEnabled: false,
  });

  // Status Jabatan
  var singleNoSorting = new Choices('#statusjabatan', {
    shouldSort: false,searchEnabled: false,
  });

  // Status Jabatan
  var singleNoSorting = new Choices('#grade', {
    shouldSort: false,searchEnabled: false,
  });

  // status-keaktifan
  var singleNoSorting = new Choices('#status-keaktifan', {
    shouldSort: false,searchEnabled: false,
  });

   // status-dirumahkan
  var singleNoSorting = new Choices('#status-dirumahkan', {
    shouldSort: false,searchEnabled: false,
  });

  // status-batch
  var singleNoSorting = new Choices('#status-batch', {
    shouldSort: false,searchEnabled: false,
  });

  // aktifitasobsolete
  var singleNoSorting = new Choices('#aktifitasobsolete', {
    shouldSort: false,searchEnabled: false,
  });

  // aktifitas2022
  var singleNoSorting = new Choices('#aktifitas2022', {
    shouldSort: false,searchEnabled: false,
  });

  // subaktifitas
  var singleNoSorting = new Choices('#subaktifitas', {
    shouldSort: false,searchEnabled: false,
  });

  // statuskepegawaian
  var singleNoSorting = new Choices('#statuskepegawaian', {
    shouldSort: false,searchEnabled: false,
  });

  // tekniknonteknik
  var singleNoSorting = new Choices('#tekniknonteknik', {
    shouldSort: false,searchEnabled: false,
  });

  // Golpend
  var singleNoSorting = new Choices('#golpend', {
    shouldSort: false,searchEnabled: false,
  });
  
  
  

});



