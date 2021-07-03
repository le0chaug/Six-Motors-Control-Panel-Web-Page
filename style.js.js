


var slider = document.getElementById("myRange,myRange1,myRange2, myRange3, myRange4, myRange5");
var output = document.getElementById("demo");
output.innerHTML = slider.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function() {
  output.innerHTML = this.value;
}