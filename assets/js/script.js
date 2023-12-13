openBtn = document.getElementById('openBtn');
closeBtn = document.getElementById('closeBtn');
sideMenu = document.querySelector('.nav-center');

openBtn.addEventListener('click', ()=>{
    sideMenu.style.right = '0px';
})

closeBtn.addEventListener('click', ()=>{
    sideMenu.style.right = '-200px';
})

window.addEventListener('click', (e)=>{
    if(e.target != sideMenu && e.target != openBtn){
        sideMenu.style.right = '-200px';
    }
});