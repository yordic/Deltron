const btnswitch = document.getElementById('switch');

btnswitch.addEventListener('click',()=>{
    document.body.classList.toggle('dark');
    btnswitch.classList.toggle('active');
})
