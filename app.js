const signInBtn = document.querySelector("#sign-in-btn");
const signUpBtn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

signUpBtn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

signInBtn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});
$(document).ready(function () {
  $('.cpf-input').on('input', function () {
    var unmaskedValue = this.value.replace(/[^\d]/g, '');
    var maskedValue = '';

    if (unmaskedValue.length > 11) {
      unmaskedValue = unmaskedValue.slice(0, 11);
    }

    if (unmaskedValue.length > 9) {
      maskedValue = unmaskedValue.replace(/^(\d{3})(\d{3})(\d{3})(\d{2}).*/, '$1.$2.$3-$4');
    } else if (unmaskedValue.length > 6) {
      maskedValue = unmaskedValue.replace(/^(\d{3})(\d{3})(\d{3}).*/, '$1.$2.$3');
    } else if (unmaskedValue.length > 3) {
      maskedValue = unmaskedValue.replace(/^(\d{3})(\d{3}).*/, '$1.$2');
    } else {
      maskedValue = unmaskedValue;
    }

    this.value = maskedValue;
  });
});



$(document).ready(function () {
  // Toggle password visibility on login form
  $(".sign-in-form .toggle-password").click(function () {
    const input = $(this).siblings("input");
    const icon = $(this).find("i");

    if (input.attr("type") === "password") {
      input.attr("type", "text");
      icon.removeClass("fa-eye").addClass("fa-eye-slash");
    } else {
      input.attr("type", "password");
      icon.removeClass("fa-eye-slash").addClass("fa-eye");
    }

    $(this).toggleClass("active");
  });
});

