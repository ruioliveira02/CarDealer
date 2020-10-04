var slideIndex = -1; //As showSlides() adds 1 to slide we must start with -1
var slideCount = 3; 
showSlides();
var timeout;

function setSlideCount(n)
{
	slideCount = n;
}

//Change to given slide based on the difference between indices
function changeSlide(n)
{
	changeToSlide(((slideIndex + n) + slideCount) % slideCount);
}

//Change to slide of index n
function changeToSlide(n)
{
	slideIndex = n - 1;
	clearTimeout(timeout);
	showSlides();
}

//Recursive function to change slides
function showSlides() {
	console.log(slideIndex);
	var i;
	var slides = document.getElementsByClassName("mySlides");

	//On first execution of this code, slides.length is 0 and that triggers an error. This if was addded to fix that
	if(slides.length != 0) {
		var dots = document.getElementsByClassName("dot");
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";  
		}
		slideIndex++;
		if (slideIndex >= slides.length) {
			slideIndex = 0;
		}
		for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
		}
		slides[slideIndex].style.display = "block";
		dots[slideIndex].className += " active";
		timeout = setTimeout(showSlides, 10000); //10sec timeout
	}
}