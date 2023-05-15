const animation = document.querySelector('.animation');

window.onload = function() {
	animation.style.display = 'flex';
}

setTimeout(function() {
    window.location.href = "../page1.php";
  }, 3500); 
  