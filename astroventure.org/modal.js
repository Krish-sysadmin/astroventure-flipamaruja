/* Modal section (start) 

var modalParent = document.querySelector('.mod-over-2');



function appear(){
    modalParent.style.display = "block";
}

setTimeout('appear()' , 2000);




function addCookie(){
    sessionStorage.setItem('added' , true);
    window.location = "Modules.html";
    document.querySelector('.main-modal-body').style.display = "none";
    
}

function closeModal(){
    sessionStorage.setItem('cross' , true);
    document.querySelector('.main-modal-body').style.display = "none";
}


if(sessionStorage.added === "true" || sessionStorage.cross === "true"){
    document.querySelector('.eg').style.display = "none";
    document.querySelector('.main-modal-body').style.display = "none";
}


 Modal section (end) */

/* Top article section */




var top_a_list = {

    TVFSOTU : "VeryFirstStars.html" ,

    HEHE: "Phosphine.html" ,

    jdsldskld : "HowRealAreInterstellarTravelPossibilities.html" ,

    sdsjds : "HomoMartiensisHowwillMartianEvolutiontakeplac.html" ,

    dskdsds : "‘DancingGhosts’andOddRadioCirclesspottedintheEMUPilotSurvey.html"

}

var TVFSOTU = document.getElementById('top-a-TVFSOTU');

var HEHE = document.getElementById('hehe');

var  jdsldskld = document.getElementById('jdsldskld');

var sdsjds = document.getElementById('sdsjds');

var dskdsds = document.getElementById('dskdsds');



TVFSOTU.addEventListener('click' , function(){
    window.location = top_a_list.TVFSOTU;
});

HEHE.addEventListener('click' , function(){

     window.location = top_a_list.HEHE;

});

jdsldskld.addEventListener('click' , function(){

    window.location = top_a_list.jdsldskld;

});


sdsjds.addEventListener('click' , function(){

    window.location = top_a_list.sdsjds;
});

dskdsds.addEventListener('click' , function(){
    window.location = top_a_list.dskdsds;
})


var sliderbtn = document.querySelector('.top-a-slider-btn');

var sliderbtnback = document.querySelector('.top-a-slider-btn-back');

var mainSliderTarget = document.querySelector('.top-article-slider');

var slideritems = document.getElementsByClassName('top-article-box');

var slidenum = 0;


sliderbtn.addEventListener('click' , function(){

    slidenum += 1;

    
     if(slidenum === 1){
         mainSliderTarget.style.transform = "translateX(453px)";
     } else if(slidenum === 2){
         mainSliderTarget.style.transform = "translateX(-8px)";
     } else if(slidenum === 3){
        mainSliderTarget.style.transform = "translateX(-470px)";
     } else if(slidenum === 4){
        mainSliderTarget.style.transform = "translateX(-935px)";
     } else if(slidenum > 4){
         slidenum = 4;
     }

})



sliderbtnback.addEventListener('click' , function(){

slidenum -= 1;

if(slidenum === 0){
    mainSliderTarget.style.transform = "translateX(928px)";
}else if(slidenum === 1){
    mainSliderTarget.style.transform = "translateX(453px)";
}else if(slidenum === 2){
    mainSliderTarget.style.transform = "translateX(-8px)";
}else if(slidenum === 3){
         mainSliderTarget.style.transform = "translateX(-470px)";
} else if(slidenum < 0){
    slidenum = 0;
    
}

})



function autoChange(){
    slidenum += 1;

  
    if(document.body.clientWidth <= 600){
       

        slidenum = 0;

        slidenum += 0;
    

    }


    if(slidenum === 1){
        mainSliderTarget.style.transform = "translateX(453px)";
    } else if(slidenum === 2){
        mainSliderTarget.style.transform = "translateX(-8px)";
    } else if(slidenum === 3){
       mainSliderTarget.style.transform = "translateX(-470px)";
    } else if(slidenum === 4){
       mainSliderTarget.style.transform = "translateX(-935px)";
    } else if(slidenum > 4){
        mainSliderTarget.style.transform = "translateX(928px)";
        slidenum = 0;
    }

    
}


setInterval('autoChange()' , 10000);


/* Top article section */



/* feature section (start) */



var feature = document.querySelector('.featured-box');

var featureBtn = document.getElementById('feature-btn');

var featureCross = document.querySelector('.featured-cross');

var featureBody = document.querySelector('.featured');

function featureAppear() {
    
    feature.style.top = "70%";
    feature.style.opacity = "1";

}



setTimeout( 'featureAppear()'  , 6000);



featureCross.addEventListener('click' , function (){


    feature.style.top = "80%";
    feature.style.opacity = "0";
 

    setTimeout(() => {
       
        feature.style.display = "none"
        
    }, 2000);
    
    sessionStorage.setItem('featureCross' , true);
   
})


featureBtn.addEventListener('click' , function() {
    
    feature.style.top = "80%";
    feature.style.opacity = "0";
 

    setTimeout(() => {
       
        feature.style.display = "none"
        
        window.location = "featured.html";

    }, 500);
 
   sessionStorage.setItem('featureVisited' , true);

})

if(sessionStorage.featureCross === "true"){

   feature.style.display = "none";
   
} else if(sessionStorage.featureVisited === "true"){
    featureBody.style.display = "none";
}




 /*  feature section (end) */


 /* Got featured section (start) 


    var FeaturedDesktopModalCross = document.querySelector('.f-cross-icon');

    var FeaturedDesktopModal = document.querySelector('.got-featured-section');


    /* featured section mobile   

    var FeaturedMobModalCross = document.querySelector('.f-cross-icon-mob');

    var FeaturedMobModal = document.querySelector('.got-featured-mobile');

    var FeaturedMobProfile = document.querySelector('#got-btn-mob-one');

    var FeaturedMobArticle = document.querySelector('#got-btn-mob-two');

    /* featured section mobile (start) 

    var featuredUserProfile = document.querySelector('#got-btn-one');

    var featuredUserArticle = document.querySelector('#got-btn-two');


    setTimeout(() => {
        
       FeaturedDesktopModal.style.opacity = "1";

    }, 500);



    FeaturedDesktopModalCross.addEventListener('click' , function(){

        FeaturedDesktopModal.style.opacity = 0;

        setTimeout(() => {
           
            FeaturedDesktopModal.style.display = "none"
            
        }, 500);

        sessionStorage.setItem('featuredDesktopModal' , true);
    });




    featuredUserProfile.addEventListener('click' , function(){

        FeaturedDesktopModal.style.opacity = 0;

        setTimeout(() => {
           
          
            FeaturedDesktopModal.style.display = "none"

            window.location = "FarhanAhmedChowdhury.html";
            
        }, 500);

        sessionStorage.setItem('featuredDesktopModal' , true);
    });




    featuredUserArticle.addEventListener('click' , function(){

        FeaturedDesktopModal.style.opacity = 0;

        setTimeout(() => {
           
          
            FeaturedDesktopModal.style.display = "none"

            window.location = "tsacst.html";
            
        }, 500);

        sessionStorage.setItem('featuredDesktopModal' , true);
    });


     
    setTimeout(() => {
    
        FeaturedMobModal.style.opacity = "1";
    
      }, 500);
    




    FeaturedMobModalCross.addEventListener('click' ,  function(){
 
        FeaturedMobModal.style.opacity = "0";


        setTimeout(() => {
           
          
            FeaturedMobModal.style.display = "none";

            location.reload();

            
        }, 500);


        sessionStorage.setItem('featuredDesktopModal' , true);

    });



    FeaturedMobProfile.addEventListener('click', function() {
        
        FeaturedMobModal.style.opacity = "0";


        setTimeout(() => {
           
          
            FeaturedMobModal.style.display = "none";

            window.location = "FarhanAhmedChowdhury.html";

            
        }, 500);

        sessionStorage.setItem('featuredDesktopModal' , true);

    })


    FeaturedMobArticle.addEventListener('click' , function() {

        FeaturedMobModal.style.opacity = "0";


        setTimeout(() => {
           
          
            FeaturedMobModal.style.display = "none";

            window.location = "tsacst.html";

            
        }, 500);

        sessionStorage.setItem('featuredDesktopModal' , true);

    })



    if(sessionStorage.featuredDesktopModal === "true"){
        FeaturedDesktopModal.style.display = "none"
        FeaturedMobModal.style.display = "none"

    }
    
    


Got featured section (end) */


/*  NOTHING TO SEE HERE!!!!!!!!!!!


 var fHead = document.querySelector('.featured-header');

 var text = fHead.textContent;

 var num = 0

 function add () {
    
    num += 1;

    if(num >= 38){
        num = 0;
    }

    var lol = text.substring(0 , num);

    fHead.textContent = lol;
   

 }

 setInterval('add()' , 300)




*/


