let buttons = document.querySelectorAll(".buttons button");
buttons.forEach(button =>{
  button.addEventListener("click",_ =>{
    button.classList.toggle("class_buttons_duration_modal_filters_active");
  })
})
let function_buttons_selector_duration_filters_modal = document.querySelectorAll(".function_buttons_selector_duration_filters_modal button");
function_buttons_selector_duration_filters_modal.forEach(button =>{
  button.addEventListener("click",_ =>{
    function_buttons_selector_duration_filters_modal.forEach(button =>{
      button.classList.remove("class_buttons_duration_modal_filters_active");
    })
    button.classList.toggle("class_buttons_duration_modal_filters_active");
  })
})