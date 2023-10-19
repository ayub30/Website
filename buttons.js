const clearButton = document.querySelector('input[type="button"]');

const titleInput = document.getElementById('Title');
const contentInput = document.getElementById('Blog');

button2.addEventListener('click', () => {
  titleInput.value = '';
  contentInput.value = '';
})


var submit = document.getElementById("button1");
submit.addEventListener('click', function (event) {
  var title = document.getElementById('Title');
  var Blog = document.getElementById('Blog');

  if ((title.value.trim() === "") || (Blog.value.trim() === "")) {
    title.style.backgroundColor = "yellow";
    Blog.style.backgroundColor = "yellow";
    window.alert("Please fill out the empty boxes");
    event.preventDefault();
  } else {
    title.style.backgroundColor = "";
    Blog.style.backgroundColor = "";
  }
})