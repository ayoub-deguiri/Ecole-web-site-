// nav bAR ACTIVE
document.querySelector('#menu-btn').addEventListener('click', function(){
  document.querySelector('.navbar').classList.add('active');
})

document.querySelector('#close-navbar').addEventListener('click', function(){
  document.querySelector('.navbar').classList.remove('active');
})