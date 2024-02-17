$(document).ready(function () {
  $(".cart-main a img").css("width", "35px");
  $(".cart-box ul").removeClass('mr-5');
  $(".cart-box ul").css("margin-right", "3px");

  setTimeout(function () {
    $(".auto-fill-page .form-control").trigger("focus");
    $(".auto-fill-page .form-control").eq(0).trigger("focus");
  }, 500);

  $(".has-float-label select").on("click change", function () {
    var this_parent = $(this).parents(".has-float-label");
    var this_control = $(this);

    if (this_control.val() != "") {
      this_parent.removeClass("not-float");
      this_parent.addClass("float");
    } else {
      this_parent.removeClass("float");
      this_parent.addClass("not-float");
    }
  });
  $(".has-float-label select").each(function () {
    if ($(this).val() != "") {
      $(this).parents(".has-float-label").addClass("float");
    } else {
      $(this).parents(".has-float-label").addClass("not-float");
    }
  });
  $(".custom-file-upload input[type='file']").on("change", function (e) {
    $(this).siblings(".file-name").text(e.target.files[0].name);
  });

  $("body").on("click", ".filter-btn", function (e) {
    e.preventDefault();
    $(".filter-sidebar").parent().toggleClass("active");
    $("body").toggleClass("assideopen");
  });
  $("body").on("click", ".overlay", function (e) {
    e.preventDefault();
    $("body").toggleClass("assideopen");
  });

  $('[data-toggle="tooltip"]').tooltip();

  // wowInstance = new WOW().init();

  $(".menu-overlay").on("click", function () {
    $(".primary-header .navbar-collapse").removeClass("show");
    $(".cart-sidebar").removeClass("show");
    $(this).removeClass("show");
  });
  $(".primary-header .navbar-toggler").on("click", function () {
    $(".menu-overlay").addClass("show");
  });

  $(".primary-header .petstore-link").on("click", function (e) {
    if ($(window).width() < 992) {
      e.preventDefault();
    }
  });
  $(".cart-box").on("click", function () {
    $(".cart-sidebar").addClass("show");
    $(".menu-overlay").addClass("show");
  });
  $(".cart-sidebar .close-btn").on("click", function () {
    $(".cart-sidebar").removeClass("show");
    $(".menu-overlay").removeClass("show");
  });
  $(document).on("click", "#cart_item_remove_btn", function () {
    $.get($(this).attr("item_id"), function (response) {
      $("#ajax_cart_html").html(response.cart_html);
      $("#cartItemsCount").html(response.data);
    });
  });

  $(".primary-header .nav-link").on("click", function () {
    if ($(window).width() < 992) {
      $(this).siblings(".navbar-nav").slideToggle();
    }
  });
});

// $("input[name='phone']").change(function (e) {
//   e.preventDefault();
//   const pakistanPhonePattern = /^(\+92|0)\d{10}$/;
//   if (pakistanPhonePattern.test(e.value)) {
//     console.log("Phone number is valid.");
//   } else {
//     console.log("Phone number is invalid.");
//   }
// });

//remove item from cart

function refresh(id) {
  const listAA = localStorage.getItem("productsList");
  const updatedList = [];
  const productsArr = JSON.parse(listAA) ?? [];
  if (id && productsArr) {
    for (let i = 0; i < productsArr.length; i++) {
      if (id !== productsArr[i]["productId"]) {
        updatedList.push(productsArr[i]);
      }
    }
    if (updatedList) {
      localStorage.setItem("productsList", JSON.stringify(updatedList));
      setTimeout(function () {
        location.reload(true);
      }, 100);
    }
  }
}

// validate pass

function validatePassword(password) {
  if (password.length < 4) {
    return false;
  }
  if (!/[!@#$%^&*(),.?":{}|<>]/.test(password)) {
    return false;
  }
  if (!/[A-Z]/.test(password)) {
    return false;
  }
  if (!/[0-9]/.test(password)) {
    return false;
  }
  return true;
}
