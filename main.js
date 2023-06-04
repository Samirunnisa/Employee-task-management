
let toggle_btn = document.querySelector('#toggle_btn');
let menu_ul = document.querySelector('.menu ul');

let toggle = false;
toggle_btn.addEventListener('click', function(){
   if (toggle == false) {
   	this.style.transform = 'rotate(180deg)';
   	toggle = true;
   }else{
   	this.style.transform = 'rotate(0deg)';
   	toggle = false;
   }
   menu_ul.classList.toggle('active_menu');
});