

const submitButton = document.querySelectorAll('.btn-item');



submitButton.forEach((e)=>{
    e.setAttribute('disabled',true) 

})


submitButton.forEach((e)=>{
    e.removeAttribute('disabled');
})