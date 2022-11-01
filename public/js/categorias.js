var btn= document.querySelector('#categoria1');
var container = document.querySelector('#categoria-biografias');

btn.addEventListener('click', function(){
    if(container.style.display === 'block'){
      container.style.display = 'none';
    }else{

      container.style.display ='block';
      container1.style.display ='none';
      container2.style.display ='none';
      container4.style.display ='none';
      container5.style.display ='none';
      container6.style.display ='none';
      
    }
  })

var btn1= document.querySelector('#categoria2');
var container1 = document.querySelector('#categoria-acao');

btn1.addEventListener('click', function(){
    if(container1.style.display === 'block'){
      container1.style.display = 'none';
    }else{
      container.style.display ='none';
      container1.style.display ='block';
      container2.style.display ='none';
      container4.style.display ='none';
      container5.style.display ='none';
      container6.style.display ='none';
    }
  })

var btn2= document.querySelector('#categoria3');
var container2 = document.querySelector('#categoria-contos');

btn2.addEventListener('click', function(){
    if(container2.style.display === 'block'){
      container2.style.display = 'none';
    }else{
      container.style.display ='none';
      container1.style.display ='none';
      container2.style.display ='block';
      container4.style.display ='none';
      container5.style.display ='none';
      container6.style.display ='none';
    }
  })


  var btn4= document.querySelector('#categoria4');
var container4 = document.querySelector('#categoria-ficcao');

btn4.addEventListener('click', function(){
    if(container4.style.display === 'block'){
      container4.style.display = 'none';
    }else{
      container.style.display ='none';
      container1.style.display ='none';
      container2.style.display ='none';
      container4.style.display ='block';
      container5.style.display ='none';
      container6.style.display ='none';
    }
  })

  var btn5= document.querySelector('#categoria5');
var container5 = document.querySelector('#categoria-romance');

btn5.addEventListener('click', function(){
    if(container5.style.display === 'block'){
      container5.style.display = 'none';
    }else{
      container.style.display ='none';
      container1.style.display ='none';
      container2.style.display ='none';
      container4.style.display ='none';
      container5.style.display ='block';
      container6.style.display ='none';
    }
  })

  var btn6= document.querySelector('#categoria6');
var container6 = document.querySelector('#categoria-fantasia');

btn6.addEventListener('click', function(){
    if(container6.style.display === 'block'){
      container6.style.display = 'none';
    }else{
      container.style.display ='none';
      container1.style.display ='none';
      container2.style.display ='none';
      container4.style.display ='none';
      container5.style.display ='none';
      container6.style.display ='block';
    }
  })