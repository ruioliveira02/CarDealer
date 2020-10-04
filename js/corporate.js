var div_names = ["sales", "financial", "marketing", "workshop"];
var div_visible = [false, false, false, false];

function display(x) {
    div_visible[x] = !div_visible[x];

    if (div_visible[x]) {
        document.getElementById(div_names[x]).classList.remove("hide");
        document.getElementById(div_names[x]).classList.add("show");
        document.getElementById("plus_" + div_names[x]).textContent = "-";
    } else {
        document.getElementById(div_names[x]).classList.add("hide");
        document.getElementById(div_names[x]).classList.remove("show");
        document.getElementById("plus_" + div_names[x]).textContent = "+";
    }
}