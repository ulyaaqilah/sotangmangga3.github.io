(function($) {
  "use strict"; // Start of use strict

  // Toggle the side navigation
  $("#sidebarToggle, #sidebarToggleTop").on('click', function(e) {
    $("body").toggleClass("sidebar-toggled");
    $(".sidebar").toggleClass("toggled");
    if ($(".sidebar").hasClass("toggled")) {
      $('.sidebar .collapse').collapse('hide');
    };
  });

  // Close any open menu accordions when window is resized below 768px
  $(window).resize(function() {
    if ($(window).width() < 768) {
      $('.sidebar .collapse').collapse('hide');
    };
    
    // Toggle the side navigation when window is resized below 480px
    if ($(window).width() < 480 && !$(".sidebar").hasClass("toggled")) {
      $("body").addClass("sidebar-toggled");
      $(".sidebar").addClass("toggled");
      $('.sidebar .collapse').collapse('hide');
    };
  });

  // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
  $('body.fixed-nav .sidebar').on('mousewheel DOMMouseScroll wheel', function(e) {
    if ($(window).width() > 768) {
      var e0 = e.originalEvent,
        delta = e0.wheelDelta || -e0.detail;
      this.scrollTop += (delta < 0 ? 1 : -1) * 30;
      e.preventDefault();
    }
  });

  // Scroll to top button appear
  $(document).on('scroll', function() {
    var scrollDistance = $(this).scrollTop();
    if (scrollDistance > 100) {
      $('.scroll-to-top').fadeIn();
    } else {
      $('.scroll-to-top').fadeOut();
    }
  });

  // Smooth scrolling using jQuery easing
  $(document).on('click', 'a.scroll-to-top', function(e) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: ($($anchor.attr('href')).offset().top)
    }, 1000, 'easeInOutExpo');
    e.preventDefault();
  });

})(jQuery); // End of use strict





// Function to show the modal
function showModal() {
  $('#konfirmasiModal').modal('show');
}

//PELANGGAN
// Function to handle the "Ya, Tambahkan" button click
$('#tambahkanBtn').on('click', function() {
  // Redirect to m_menejemen.html with a success message in the URL
  window.location.href = 'm_pelanggan.html?message=Data+berhasil+ditambahkan!';
});


  // Function to get URL parameters
  function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
      results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
  }

  // Check if there's a message in the URL
  var message = getParameterByName('message');
  if (message) {
    $('#successAlert').text(message).show();
    // Set timeout untuk menyembunyikan alert setelah 10 detik
    setTimeout(function() {
      $('#successAlert').fadeOut('slow');
    }, 3000); 
  }

// GALLERYFOTO
// Function to handle the "Ya, Tambahkan" button click
$('#tambahkanBtn1').on('click', function() {
  // Redirect to m_menejemen.html with a success message in the URL
  window.location.href = 'm_galleryfoto.html?message=Data+berhasil+ditambahkan!';
});


  // Function to get URL parameters
  function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
      results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
  }

  // Check if there's a message in the URL
  var message = getParameterByName('message');
  if (message) {
    $('#successAlert').text(message).show();
    // Set timeout untuk menyembunyikan alert setelah 10 detik
    setTimeout(function() {
      $('#successAlert').fadeOut('slow');
    }, 3000); 
  }

  // GALLERYVIDIO
// Function to handle the "Ya, Tambahkan" button click
$('#tambahkanBtn2').on('click', function() {
  // Redirect to m_menejemen.html with a success message in the URL
  window.location.href = 'm_galleryvidio.html?message=Data+berhasil+ditambahkan!';
});


  // Function to get URL parameters
  function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
      results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
  }

  // Check if there's a message in the URL
  var message = getParameterByName('message');
  if (message) {
    $('#successAlert').text(message).show();
    // Set timeout untuk menyembunyikan alert setelah 10 detik
    setTimeout(function() {
      $('#successAlert').fadeOut('slow');
    }, 3000); 
  }

 // PRODUK
// Function to handle the "Ya, Tambahkan" button click
$('#tambahkanBtn3').on('click', function() {
  // Redirect to m_menejemen.html with a success message in the URL
  window.location.href = 'm_produk.html?message=Data+berhasil+ditambahkan!';
});


  // Function to get URL parameters
  function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
      results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
  }

  // Check if there's a message in the URL
  var message = getParameterByName('message');
  if (message) {
    $('#successAlert').text(message).show();
    // Set timeout untuk menyembunyikan alert setelah 10 detik
    setTimeout(function() {
      $('#successAlert').fadeOut('slow');
    }, 3000); 
  }

   // TESTIMONI
// Function to handle the "Ya, Tambahkan" button click
$('#tambahkanBtn4').on('click', function() {
  // Redirect to m_menejemen.html with a success message in the URL
  window.location.href = 'm_testimoni.html?message=Data+berhasil+ditambahkan!';
});


  // Function to get URL parameters
  function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
      results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
  }

  // Check if there's a message in the URL
  var message = getParameterByName('message');
  if (message) {
    $('#successAlert').text(message).show();
    // Set timeout untuk menyembunyikan alert setelah 10 detik
    setTimeout(function() {
      $('#successAlert').fadeOut('slow');
    }, 3000); 
  }

// OMSET
// Function to handle the "Ya, Tambahkan" button click
$('#tambahkanBtn5').on('click', function() {
  // Redirect to m_menejemen.html with a success message in the URL
  window.location.href = 'm_omset.html?message=Data+berhasil+ditambahkan!';
});


  // Function to get URL parameters
  function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
      results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
  }

  // Check if there's a message in the URL
  var message = getParameterByName('message');
  if (message) {
    $('#successAlert').text(message).show();
    // Set timeout untuk menyembunyikan alert setelah 10 detik
    setTimeout(function() {
      $('#successAlert').fadeOut('slow');
    }, 3000); 
  }

   // STAFF
// Function untuk mengambil nilai dari parameter URL
document.addEventListener('DOMContentLoaded', function() {
  function dapatkanNilaiParameter(nama, url) {
    if (!url) url = window.location.href;
    nama = nama.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + nama + '(=([^&#]*)|&|#|$)'),
      hasil = regex.exec(url);
    if (!hasil) return null;
    if (!hasil[2]) return '';
    return decodeURIComponent(hasil[2].replace(/\+/g, ' '));
  }

  var pesan = dapatkanNilaiParameter('message');

  if (pesan) {
    var successAlert = document.getElementById('successAlert');
    successAlert.textContent = pesan;
    successAlert.style.display = 'block';
  }
});

// Redirect saat tombol "Ya, Tambahkan" diklik
$(document).ready(function() {
  $('#tambahkanBtn6').on('click', function() {
    // Redirect ke staffmanajemen.php dengan pesan "Data berhasil ditambahkan!" di URL
    window.location.href = 'staffmanajemen.php?message=Data+berhasil+ditambahkan!';
  });
});

// Fungsi penghapusan data dan menampilkan alert
$(document).ready(function() {
  $('#deleteButton').on('click', function(e) {
    e.preventDefault(); // Menghentikan aksi default dari tombol delete

    // Lakukan aksi penghapusan data di sini
    // ...

    // Tutup modal setelah penghapusan selesai
    $('#confirmDeleteModal').modal('hide');

    // Setelah modal tertutup, tampilkan alertH selama 3 detik
    $('.alertH').fadeIn().delay(3000).fadeOut('slow'); // Munculkan alert selama 3 detik
  });
});


  //DELETE STAFF
  $(document).ready(function() {
    $('#deleteButton').on('click', function(e) {
        e.preventDefault(); // Untuk menghentikan aksi default dari tombol delete
        
        // Lakukan aksi penghapusan data di sini
        // ...

        // Tutup modal setelah penghapusan selesai
        $('#confirmDeleteModal').modal('hide');

        // Setelah modal tertutup, tampilkan alertH selama 10 detik
        $('.alertH').fadeIn().delay(3000).fadeOut('slow'); // Munculkan alert selama 10 detik
    });
});

  //DELETE PELANGGAN
  $(document).ready(function() {
    $('#deleteButton').on('click', function(e) {
        e.preventDefault(); // Untuk menghentikan aksi default dari tombol delete
        
        // Lakukan aksi penghapusan data di sini
        // ...

        // Tutup modal setelah penghapusan selesai
        $('#confirmDeleteModal1').modal('hide');

        // Setelah modal tertutup, tampilkan alertH selama 10 detik
        $('.alertH').fadeIn().delay(3000).fadeOut(); // Munculkan alert selama 10 detik
    });
});

  //DELETE PRODUK
  $(document).ready(function() {
    $('#deleteButton').on('click', function(e) {
        e.preventDefault(); // Untuk menghentikan aksi default dari tombol delete
        
        // Lakukan aksi penghapusan data di sini
        // ...

        // Tutup modal setelah penghapusan selesai
        $('#confirmDeleteModal3').modal('hide');

        // Setelah modal tertutup, tampilkan alertH selama 10 detik
        $('.alertH').fadeIn().delay(3000).fadeOut(); // Munculkan alert selama 10 detik
    });
});

//DELETE TESTIMONI
$(document).ready(function() {
  $('#deleteButton').on('click', function(e) {
      e.preventDefault(); // Untuk menghentikan aksi default dari tombol delete
      
      // Lakukan aksi penghapusan data di sini
      // ...

      // Tutup modal setelah penghapusan selesai
      $('#confirmDeleteModal4').modal('hide');

      // Setelah modal tertutup, tampilkan alertH selama 10 detik
      $('.alertH').fadeIn().delay(3000).fadeOut(); // Munculkan alert selama 10 detik
  });
});

//DELETE GALLERYY FOTO
$(document).ready(function() {
  $('#deleteButton').on('click', function(e) {
      e.preventDefault(); // Untuk menghentikan aksi default dari tombol delete
      
      // Lakukan aksi penghapusan data di sini
      // ...

      // Tutup modal setelah penghapusan selesai
      $('#confirmDeleteModal5').modal('hide');

      // Setelah modal tertutup, tampilkan alertH selama 10 detik
      $('.alertH').fadeIn().delay(3000).fadeOut(); // Munculkan alert selama 10 detik
  });
});

//DELETE GALLERY VIDIO
$(document).ready(function() {
  $('#deleteButton').on('click', function(e) {
      e.preventDefault(); // Untuk menghentikan aksi default dari tombol delete
      
      // Lakukan aksi penghapusan data di sini
      // ...

      // Tutup modal setelah penghapusan selesai
      $('#confirmDeleteModal6').modal('hide');

      // Setelah modal tertutup, tampilkan alertH selama 10 detik
      $('.alertH').fadeIn().delay(3000).fadeOut(); // Munculkan alert selama 10 detik
  });
});

//DELETE OMSET
$(document).ready(function() {
  $('#deleteButton').on('click', function(e) {
      e.preventDefault(); // Untuk menghentikan aksi default dari tombol delete
      
      // Lakukan aksi penghapusan data di sini
      // ...

      // Tutup modal setelah penghapusan selesai
      $('#confirmDeleteModal7').modal('hide');

      // Setelah modal tertutup, tampilkan alertH selama 10 detik
      $('.alertH').fadeIn().delay(3000).fadeOut(); // Munculkan alert selama 10 detik
  });
});


//EDIT STAFF
$('#tombolEdit').on('click', function() {
  // Redirect to m_menejemen.html with a success message in the URL
  window.location.href = 'm_staff.html?message=Data+berhasil+diedit!';
});

//EDIT PELANGGAN
$('#tombolEdit1').on('click', function() {
  // Redirect to m_menejemen.html with a success message in the URL
  window.location.href = 'm_pelanggan.html?message=Data+berhasil+diedit!';
});

//EDIT PRODUK
$('#tombolEdit2').on('click', function() {
  // Redirect to m_menejemen.html with a success message in the URL
  window.location.href = 'm_produk.html?message=Data+berhasil+diedit!';
});

//EDIT TESTIMONI
$('#tombolEdit3').on('click', function() {
  // Redirect to m_menejemen.html with a success message in the URL
  window.location.href = 'm_testimoni.html?message=Data+berhasil+diedit!';
});

//EDIT GALLERY FOTO
$('#tombolEdit4').on('click', function() {
  // Redirect to m_menejemen.html with a success message in the URL
  window.location.href = 'm_galleryfoto.html?message=Data+berhasil+diedit!';
});

//EDIT GALLERY VIDIO
$('#tombolEdit5').on('click', function() {
  // Redirect to m_menejemen.html with a success message in the URL
  window.location.href = 'm_galleryvidio.html?message=Data+berhasil+diedit!';
});

//EDIT OMSET
$('#tombolEdit6').on('click', function() {
  // Redirect to m_menejemen.html with a success message in the URL
  window.location.href = 'm_omset.html?message=Data+berhasil+diedit!';
});