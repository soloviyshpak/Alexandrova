const popUpBtn = document.querySelector('.contacts__phone-btn');
const modalsOverlay = document.querySelector('.contacts__phone-modal_overlay');
const modals = document.querySelector('.contacts__phone-modals');

popUpBtn.addEventListener('click', (e) => {
  e.preventDefault();
  let path = e.currentTarget.getAttribute('data-path');

  document
    .querySelector(`[data-target=${path}]`)
    .classList.add('contacts__phone-modal--visible');
  modalsOverlay.classList.add('contacts__phone-modal_overlay--visible');
});

modalsOverlay.addEventListener('click', (e) => {
  modalsOverlay.classList.remove('contacts__phone-modal_overlay--visible');
});
