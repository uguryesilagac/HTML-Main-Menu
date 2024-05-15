const dikeyMenu1 = document.querySelector(".dikey-menu1");
const dikeyMenu2 = document.querySelector(".dikey-menu2");
const yatayMenu = document.querySelector(".yatay-menu");
const sideBar1 = document.querySelector(".sidebar1")
const sideBar2 = document.querySelector(".sidebar2")
const ara = document.querySelector(".ara");
const arama = document.querySelector(".arama")
sideBar1.addEventListener("click", () => {
    dikeyMenu1.style.display = "none";
    dikeyMenu2.style.display = "inline-block";
    yatayMenu.style.marginLeft = "0px";


});
sideBar2.addEventListener("click", () => {
    dikeyMenu1.style.display = "inline-block";
    dikeyMenu2.style.display = "none";
    yatayMenu.style.marginLeft = "270px";


});

ara.addEventListener("mouseover", () => {
    ara.style.width = "500px";
    arama.style.display = "inline-block"
});
ara.addEventListener("mouseout", () => {
    ara.style.width = "60px";
    arama.style.display = "none";
});
window.addEventListener("load",(e)=>{
      e.default("scroll")
})

window.addEventListener("load",(e)=> {
    e.default;
})



setTimeout(() => {
    document.createElement("di")
}, 1000);


















