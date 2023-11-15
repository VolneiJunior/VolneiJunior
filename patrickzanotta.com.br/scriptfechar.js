const a = document.getElementsByTagName("a");

for(let i=0; i<a.length; i++){
    a[i].addEventListener("click", closeMenu);
}


function closeMenu(){
    const nav = document.getElementById("navbarNavAltMarkup");
    nav.classList.remove("show");
};