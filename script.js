//for popup login and signup

document.getElementById("button").addEventListener("click",function(){
    document.querySelector(".popup").style.display="flex";
})

document.querySelector(".close").addEventListener("click",function(){
    document.querySelector(".popup").style.display="none";
})
document.getElementById("button1").addEventListener("click",function(){
    document.querySelector(".popup1").style.display="flex";
})
document.querySelector(".close1").addEventListener("click",function(){
    document.querySelector(".popup1").style.display="none";
})

// for burger menu

burger=document.querySelector('.burger');
navbar=document.querySelector('.navbar');
navlist=document.querySelector('.nav-list');
login=document.querySelector('.login-signup');


//toggle the responsive nav

burger.addEventListener('click',function(){
  login.classList.toggle('v-nav-responsive');
  navlist.classList.toggle('v-nav-responsive');
  navbar.classList.toggle('h-nav-responsive');
})

// form validation
jQuery.validator.addMethod("lettersonly", function(value, element) 
{
return this.optional(element) || /^[A-Za-z ]+$/i.test(value);
}, "Letters and spaces only please");

jQuery.validator.addMethod("numsonly", function(value, element) 
{
return this.optional(element) || /^[0-9]+$/i.test(value);
}, "numbers only please");

$("#form2").validate({
    rules:{
       username:{ 
        required:true,
        lettersonly:true,
        minlength:2,
       },
       password:{
        required: true,
        minlength: 5
       },
       cpassword: {
        required: true,
        minlength: 5,
        
    }
    },
    messages:{
        username:{
        required: "please enter your name",
        minlength:"Name at least 2 character"
       }
      
    },
});
$("#myform1").validate({
    rules:{
        name:{
            required:true,
            lettersonly:true,
            minlength:2,
            
        },
        phone:{
          required:true,
          numsonly:true,
          minlength:10,
          maxlength:10,
          
        },
        email:{
            required:true,
        },
        address:{
            required:true,
            minlength:10,
            maxlength:100
        }
    },
    messages:{
        name:{
        required: "please enter your name",
        minlength:"Name at least 2 character"
       },
       phone:{
         minlength:"10 numbers required",
         maxlength:"10 numbers required only"
       }
    },
    submitHandler: function(form) {
      form.submit();
    }
   });

//pop up ad with typing animation

const typedTextSpan = document.querySelector(".typed-text");
const textArray= ["children","animals","poor"] ;
const typeDelay=400;
const eraseDely=100;
let newTextDelay=4750;
let textArrayIndex=0;
let charIndex=0;
var type_wait= 4750;




function type(){
    pop_wait=0;
    if(charIndex < textArray[textArrayIndex].length){
        typedTextSpan.textContent +=textArray[textArrayIndex].charAt(charIndex);
        charIndex++;
        console.log(typedTextSpan);
        setTimeout(type,typeDelay);         
    }
    else{
        //erase
        setTimeout(erase,newTextDelay);
        type_wait=1100;
    }
    if(pop_wait!=1){
        newTextDelay=500;
    }
}

function erase(){
   if(charIndex >0){
      typedTextSpan.textContent = textArray[textArrayIndex].substring(0,charIndex-1);
      charIndex--;
      setTimeout(erase,eraseDely);
   }else{
        textArrayIndex++;
        if(textArrayIndex >=textArray.length) textArrayIndex=0;
        setTimeout(type,typeDelay+type_wait);
        
   }
}
document.addEventListener("DOMContentLoaded",function() {
      setTimeout(type,newTextDelay +250);    
});
