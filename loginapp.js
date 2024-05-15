const passw1 = document.querySelector(".passw1");
const passw2 = document.querySelector(".passw2");
const password = document.querySelector(".password");

passw1.addEventListener("click",()=>{
    passw1.setAttribute("style","display:none");
    passw2.setAttribute("style","display:inline-flexbox !important;");
    password.setAttribute("type","text"); 
});
passw2.addEventListener("click",()=>{
    passw2.setAttribute("style","display:none");
    passw1.setAttribute("style","display:inline-flexbox !important;");
    password.setAttribute("type","password");

});

