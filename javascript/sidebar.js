
function openNav() {
    document.getElementById("sidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("sidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}



const HOME_PANEL1 = document.getElementById("logo_wrapper");


const HOME_PANEL2 = document.getElementById("header");
// const HOME_PANEL3 = document.getElementsByClassName("open_button");
const HOME_PANEL4 = document.getElementById("logo");

const gender = document.getElementById("gender").value;

// console.log(gender)
console.log(HOME_PANEL2);
// console.log(HOME_PANEL3);
console.log(HOME_PANEL4);
 
    const backgroundImage = gender=='m' ? 
    "lightblue" 
    : "pink"
    HOME_PANEL1.style.backgroundColor = backgroundImage;

    HOME_PANEL2.style.backgroundColor = backgroundImage;
    // HOME_PANEL3.style.backgroundColor = backgroundImage;
    HOME_PANEL4.style.backgroundColor = backgroundImage;
    // storeBackgroundColor(backgroundImage, SLIDER.checked)


