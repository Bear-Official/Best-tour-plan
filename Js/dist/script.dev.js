"use strict";

$(document).ready(function () {
  var swiper = new Swiper('.swiper', {
    // Optional parameters
    loop: true,
    // Navigation arrows
    navigation: {
      nextEl: '.slider-button-next',
      prevEl: '.slider-button-prev'
    },
    speed: 450
  }); // Second Slider

  var swiperr = new Swiper('.swiper-container', {
    // Optional parameters
    loop: true,
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-prev',
      prevEl: '.swiper-button-next'
    },
    speed: 400
  });
  var menuButton = $(".menu-button");
  menuButton.on("click", function () {
    console.log("Click on button");
    $(".navbar-bottom").toggleClass("navbar-bottom--visible");
  });
  var modalButton = $("[data-toggle=modal]");
  var closeModalButton = $(".modal__close");
  modalButton.on("click", openModal);
  closeModalButton.on("click", closeModal);

  function openModal() {
    var modalOverlay = $(".modal__overlay");
    var modalDialog = $(".modal__dialog");
    modalOverlay.addClass("modal__overlay--visible");
    modalDialog.addClass(" modal__dialog--visible");
  }

  function closeModal(event) {
    event.preventDefault();
    var modalOverlay = $(".modal__overlay");
    var modalDialog = $(".modal__dialog");
    modalOverlay.removeClass("modal__overlay--visible");
    modalDialog.removeClass("modal__dialog--visible");
  }

  $(".form").each(function () {
    $(this).validate({
      errorClass: "invalid",
      messages: {
        name: {
          required: "Write the name",
          minlength: 8
        },
        email: {
          required: "We need your email address to contact you",
          email: "Your email address must be in the format of name@domain.com"
        },
        phone: {
          required: "The phone is neccesary"
        }
      }
    });
  });
  AOS.init();
});