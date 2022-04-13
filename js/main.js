/*window.addEventListener("scroll", () => {
  var cont = document.getElementById("container");
  var header1 = document.getElementById("header1");
  header1.style.display = "none";

  if (window.scrollY >= window.innerHeight) {
    cont.style.display = "none";
    header1.style.display = "block";
    header1.style.position = "fixed";
    header1.style.backgroundColor = "red";

    console.log("jeee");
  }
});

*/

document.onreadystatechange = function () {
  if (document.readyState !== "complete") {
    document.querySelector("*").style.opacity = 0.2;
    //document.querySelector("body").style.backgroundImage = "none";
    // document.querySelector("#spinner").style.visibility = "visible";
  } else {
    // document.querySelector("#spinner").style.display = "none";
    document.querySelector("*").style.opacity = 1;
  }
};
