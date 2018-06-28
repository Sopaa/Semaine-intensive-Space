// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "flex";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}



document.getElementById("myBtn").addEventListener("click", function(){
    document.documentElement.scrollTop = 0;
});