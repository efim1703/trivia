 // Mask for el that has class .phone-mask
$(".phone-mask").mask("+7 (999) 999-99-99");

const aboutFormInput = document.querySelector('.about .phone-mask')
const aboutFormSubmit = document.querySelector('.about input[type="submit"]')

aboutFormSubmit.addEventListener('click', () => {
    if (aboutFormInput.value.length <=0) {
        aboutFormInput.style.border = '1px solid red'
    }
})
