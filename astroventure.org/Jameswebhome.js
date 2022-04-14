/* navbar section (start) */


var lastScroll = 0;

var jamesNav = document.querySelector('.James-navbar');

var jamesNavText = document.querySelector('.james-nav-main');

window.addEventListener('scroll' , function () {
      
 
  var scrollTop = this.window.pageYOffset;

  if(scrollTop > lastScroll){
      
      jamesNav.style.top = "-90px";

  } else{
     jamesNav.style.top = "0px";
     
  }
   lastScroll = scrollTop
  
})

window.addEventListener('scroll' , function () {
   
 if(window.scrollY > 100){
     jamesNav.style.backgroundColor = "black";
     jamesNavText.style.color = "white";
 }

 else if(window.scrollY < 100){
    jamesNav.style.backgroundColor = "transparent"
    jamesNavText.style.color = "black";
    
 }
   
});
    
 /* navbar section (end) */   

