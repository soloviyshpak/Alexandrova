const radioBtn = document.querySelectorAll('.registration__form-label--gender');

radioBtn.forEach(function (el) {
  el.addEventListener('click', function () {
    const selectedEl = document.querySelector(
      '.registration__form-label--selected'
    );

    if (selectedEl) {
      selectedEl.classList.remove('registration__form-label--selected');
    }

    el.classList.add('registration__form-label--selected');
  });
});
