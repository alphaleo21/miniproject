document.getElementById("menu-button").addEventListener("click", function() {
    document.getElementById("side-nav").classList.toggle("active");
    document.getElementById("menu-button").classList.add('close');
});
document.getElementById("cross").addEventListener("click", function() {
    document.getElementById("side-nav").classList.remove("active");
    document.getElementById("menu-button").classList.remove('close');
});