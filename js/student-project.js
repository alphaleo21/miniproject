const inputElement = document.getElementById("search-projects");

inputElement.addEventListener("input", function() {
  // Remove or reset the styles here
  inputElement.style.border = "none"; // Removing the border
  inputElement.style.backgroundColor = "transparent"; // Removing the background color
  // You can remove/reset other styles as needed
});

document.getElementById('filter').addEventListener('click', function() {
    document.getElementById('filter-search').classList.toggle('show-filters');
});
document.getElementById('filter').addEventListener('click', function() {
    document.getElementById('filter-form').classList.toggle('show-filters');
});

