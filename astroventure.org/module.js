
/* check modal section (start) 

var moduleNumber = document.getElementsByClassName('module-post').length;


var currentNumber = 4;

localStorage.setItem("defaultM" , currentNumber);


if(moduleNumber > currentNumber){
   var value =  confirm("New modal is here!")
   if(value === true){
       var diff = moduleNumber - currentNumber;
        
       currentNumber = currentNumber + diff;

       localStorage.setItem("Mnumber" , currentNumber);
   }
} 




 Check modal section (end) */

