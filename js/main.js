



$(document).on('click', '#btnm1', function() {
  $('#m1').modal('show');
});

$(document).on('click', '#btnlink1', function() {
  $('#m1').modal('hide');
  $('#m1').modal('handleUpdate');
  $('#m2').modal('show');
});

$(document).on('click', '#btnm2', function() {
  $('#m2').modal('show');
});

$(document).on('click', '#btnlink2', function() {
  $('#m2').modal('hide');
  $('#m2').modal('handleUpdate');
  $('#m1').modal('show');
});


function mostrarPassword() {
  var cambio = document.getElementById("txtPassword");
  if (cambio.type == "password") {
    cambio.type = "text";
    $('.icon').removeClass('bi bi-eye-slash').addClass('bi bi-eye');
  } else {
    cambio.type = "password";
    $('.icon').removeClass('bi bi-eye').addClass('bi bi-eye-slash');
  }
}




  $(document).ready(function() {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
      loop: true,
      margin: 10,
      navRewind: false,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 3
        },
        1000: {
          items: 3
        }
      }
    })
  })
