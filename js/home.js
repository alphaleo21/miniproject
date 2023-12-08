document.getElementById("menu-icon").addEventListener("click", function() {
    document.getElementById("option-menu-list").classList.toggle("active");
});

document.getElementById("filter").addEventListener("click", function () {
  document.getElementById("filter-search").classList.toggle("show-filters");
});
document.getElementById("filter").addEventListener("click", function () {
  document.getElementById("filter-form").classList.toggle("show-filters");
});