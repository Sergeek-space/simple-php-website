let currentPage = window.location.pathname;
currentPage = currentPage.replace ("/", "");


const findDiv = document.getElementById("menu");
const btns = findDiv.getElementsByClassName("btn");

// add class="active" to the current page link in the menu
for (let i = 0; i < btns.length; i++) {
    if(btns[i].getAttribute("href") == currentPage){
        console.log(btns[i])
        btns[i].classList.add('active');
    }
  
}