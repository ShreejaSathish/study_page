<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACADEMICS</title>
    <link rel="icon" type="image/x-icon" 
    href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOzo0CZyGwFCr4D2X6wh5IxMa6N_GdlpU_Z0sEvp0&usqp=CAE&s/images/favicon.ico">
    <style>
        table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding-top: 10px;
  padding-bottom: 10px;
  padding-left: 30px;
  padding-right: 40px;
}
table {
  border-spacing: 10px;
}
* {
  box-sizing: border-box;
}
body {
  font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}
/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
</style>
</head>
<body>
<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="https://quotefancy.com/media/wallpaper/3840x2160/18846-Anonymous-Quote-Work-hard-in-silence-let-your-success-be-your.jpg" style="width:1600px;height:400px">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="https://quotefancy.com/media/wallpaper/3840x2160/17003-Neale-Donald-Walsch-Quote-Life-begins-at-the-end-of-your-comfort.jpg" style="width:1600px;height:400px">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="https://quotefancy.com/media/wallpaper/3840x2160/7101785-Ken-Poirot-Quote-Take-Action-Success-is-not-guaranteed-but.jpg" style="width:1600px;height:400px">
</div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="https://quotefancy.com/media/wallpaper/3840x2160/2015951-Zig-Ziglar-Quote-Success-is-not-a-destination-it-s-a-journey.jpg" style="width:1600px;height:400px">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="https://quotefancy.com/media/wallpaper/1600x900/122178-Zig-Ziglar-Quote-Success-is-in-the-details.jpg" style="width:1600px;height:400px">
  </div>
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="https://quotefancy.com/media/wallpaper/3840x2160/2093982-William-Whewell-Quote-Every-failure-is-a-step-to-success.jpg" style="width:1600px;height:400px">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
</div>
<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    <div>
    <table style="width:80%">
    <tr>
    <th colspan="2">DEPARTMENTS</th>
</tr>
            <tr>
                <th><marquee>BACHELOR OF ENGINEERING(B.E)</marquee></th>
</tr>
<tr>
    <td>Biomedical Engineering</td> 
    <td><a href="lp.php">Semester 1</a></td>
    <td><a href="lp.php">Semester 2</a></td>
    <td><a href="lp.php">Semester 3</a></td>
    <td><a href="lp.php">Semester 4</a></td>
    <td><a href="lp.php">Semester 5</a></td>
    <td><a href="lp.php">Semester 6</a></td>
    <td><a href="lp.php">Semester 7</a></td>
    <td><a href="lp.php">Semester 8</a></td> 
  </div>
</tr>
<tr>
    <td>Civil Engineering</td>
    <td><a href="lp.php">Semester 1</a></td>
    <td><a href="lp.php">Semester 2</a></td>
    <td><a href="lp.php">Semester 3</a></td>
    <td><a href="lp.php">Semester 4</a></td>
    <td><a href="lp.php">Semester 5</a></td>
    <td><a href="lp.php">Semester 6</a></td>
    <td><a href="lp.php">Semester 7</a></td>
    <td><a href="lp.php">Semester 8</a></td> 
</tr>
<tr>
    <td>Computer Science & Design</td>
    <td><a href="lp.php">Semester 1</a></td>
    <td><a href="lp.php">Semester 2</a></td>
    <td><a href="lp.php">Semester 3</a></td>
    <td><a href="lp.php">Semester 4</a></td>
    <td><a href="lp.php">Semester 5</a></td>
    <td><a href="lp.php">Semester 6</a></td>
    <td><a href="lp.php">Semester 7</a></td>
    <td><a href="lp.php">Semester 8</a></td> 
</tr>
<tr>
    <td>Computer Science & Engineering</td>
    <td><a href="lp.php">Semester 1</a></td>
    <td><a href="lp.php">Semester 2</a></td>
    <td><a href="lp.php">Semester 3</a></td>
    <td><a href="lp.php">Semester 4</a></td>
    <td><a href="lp.php">Semester 5</a></td>
    <td><a href="lp.php">Semester 6</a></td>
    <td><a href="lp.php">Semester 7</a></td>
    <td><a href="lp.php">Semester 8</a></td> 
</tr>
<tr>
    <td>Electrical & Electronics Engineering</td>
    <td><a href="lp.php">Semester 1</a></td>
    <td><a href="lp.php">Semester 2</a></td>
    <td><a href="lp.php">Semester 3</a></td>
    <td><a href="lp.php">Semester 4</a></td>
    <td><a href="lp.php">Semester 5</a></td>
    <td><a href="lp.php">Semester 6</a></td>
    <td><a href="lp.php">Semester 7</a></td>
    <td><a href="lp.php">Semester 8</a></td> 
</tr> 
<tr>
    <td>Electronics & Communication Engineering</td>
    <td><a href="lp.php">Semester 1</a></td>
    <td><a href="lp.php">Semester 2</a></td>
    <td><a href="lp.php">Semester 3</a></td>
    <td><a href="lp.php">Semester 4</a></td>
    <td><a href="lp.php">Semester 5</a></td>
    <td><a href="lp.php">Semester 6</a></td>
    <td><a href="lp.php">Semester 7</a></td>
    <td><a href="lp.php">Semester 8</a></td> 
</tr>
<tr>
    <td>Electronics & Instrumentation Engineering</td>
    <td><a href="lp.php">Semester 1</a></td>
    <td><a href="lp.php">Semester 2</a></td>
    <td><a href="lp.php">Semester 3</a></td>
    <td><a href="lp.php">Semester 4</a></td>
    <td><a href="lp.php">Semester 5</a></td>
    <td><a href="lp.php">Semester 6</a></td>
    <td><a href="lp.php">Semester 7</a></td>
    <td><a href="lp.php">Semester 8</a></td> 
</tr>
<tr>
    <td>Information Science & Engineering</td>
    <td><a href="lp.php">Semester 1</a></td>
    <td><a href="lp.php">Semester 2</a></td>
    <td><a href="lp.php">Semester 3</a></td>
    <td><a href="lp.php">Semester 4</a></td>
    <td><a href="lp.php">Semester 5</a></td>
    <td><a href="lp.php">Semester 6</a></td>
    <td><a href="lp.php">Semester 7</a></td>
    <td><a href="lp.php">Semester 8</a></td> 
</tr>
<tr>
    <td>Mechanical Engineering</td>
    <td><a href="lp.php">Semester 1</a></td>
    <td><a href="lp.php">Semester 2</a></td>
    <td><a href="lp.php">Semester 3</a></td>
    <td><a href="lp.php">Semester 4</a></td>
    <td><a href="lp.php">Semester 5</a></td>
    <td><a href="lp.php">Semester 6</a></td>
    <td><a href="lp.php">Semester 7</a></td>
    <td><a href="lp.php">Semester 8</a></td> 
</tr>
<tr>
    <td>Mechatronics</td>
    <td><a href="lp.php">Semester 1</a></td>
    <td><a href="lp.php">Semester 2</a></td>
    <td><a href="lp.php">Semester 3</a></td>
    <td><a href="lp.php">Semester 4</a></td>
    <td><a href="lp.php">Semester 5</a></td>
    <td><a href="lp.php">Semester 6</a></td>
    <td><a href="lp.php">Semester 7</a></td>
    <td><a href="lp.php">Semester 8</a></td> 
</tr>
<tr> 
    <th><marquee>BACHELOR OF TECHNOLOGY(B.TECH)</marquee></th>
</tr>
<tr>
    <td>Agriculture Engineering</td>
    <td><a href="lp.php">Semester 1</a></td>
    <td><a href="lp.php">Semester 2</a></td>
    <td><a href="lp.php">Semester 3</a></td>
    <td><a href="lp.php">Semester 4</a></td>
    <td><a href="lp.php">Semester 5</a></td>
    <td><a href="lp.php">Semester 6</a></td>
    <td><a href="lp.php">Semester 7</a></td>
    <td><a href="lp.php">Semester 8</a></td> 
</tr>
<tr>
    <td>Artificial Intelligence and Data Science</td>
    <td><a href="lp.php">Semester 1</a></td>
    <td><a href="lp.php">Semester 2</a></td>
    <td><a href="lp.php">Semester 3</a></td>
    <td><a href="lp.php">Semester 4</a></td>
    <td><a href="lp.php">Semester 5</a></td>
    <td><a href="lp.php">Semester 6</a></td>
    <td><a href="lp.php">Semester 7</a></td>
    <td><a href="lp.php">Semester 8</a></td> 
</tr>
<tr>
    <td>Artificial Intelligence and Machine Learning</td>
    <td><a href="lp.php">Semester 1</a></td>
    <td><a href="lp.php">Semester 2</a></td>
    <td><a href="lp.php">Semester 3</a></td>
    <td><a href="lp.php">Semester 4</a></td>
    <td><a href="lp.php">Semester 5</a></td>
    <td><a href="lp.php">Semester 6</a></td>
    <td><a href="lp.php">Semester 7</a></td>
    <td><a href="lp.php">Semester 8</a></td> 
</tr>
<tr>
    <td>Biotechnology</td>
    <td><a href="lp.php">Semester 1</a></td>
    <td><a href="lp.php">Semester 2</a></td>
    <td><a href="lp.php">Semester 3</a></td>
    <td><a href="lp.php">Semester 4</a></td>
    <td><a href="lp.php">Semester 5</a></td>
    <td><a href="lp.php">Semester 6</a></td>
    <td><a href="lp.php">Semester 7</a></td>
    <td><a href="lp.php">Semester 8</a></td> 
</tr>
<tr>
    <td>Computer Science & Business Systems</td>
    <td><a href="lp.php">Semester 1</a></td>
    <td><a href="lp.php">Semester 2</a></td>
    <td><a href="lp.php">Semester 3</a></td>
    <td><a href="lp.php">Semester 4</a></td>
    <td><a href="lp.php">Semester 5</a></td>
    <td><a href="lp.php">Semester 6</a></td>
    <td><a href="lp.php">Semester 7</a></td>
    <td><a href="lp.php">Semester 8</a></td> 
</tr>
<tr>
    <td>Computer Technology</td>
    <td><a href="lp.php">Semester 1</a></td>
    <td><a href="lp.php">Semester 2</a></td>
    <td><a href="lp.php">Semester 3</a></td>
    <td><a href="lp.php">Semester 4</a></td>
    <td><a href="lp.php">Semester 5</a></td>
    <td><a href="lp.php">Semester 6</a></td>
    <td><a href="lp.php">Semester 7</a></td>
    <td><a href="lp.php">Semester 8</a></td> 
</tr>
<tr>
    <td>Food Technology</td>
    <td><a href="lp.php">Semester 1</a></td>
    <td><a href="lp.php">Semester 2</a></td>
    <td><a href="lp.php">Semester 3</a></td>
    <td><a href="lp.php">Semester 4</a></td>
    <td><a href="lp.php">Semester 5</a></td>
    <td><a href="lp.php">Semester 6</a></td>
    <td><a href="lp.php">Semester 7</a></td>
    <td><a href="lp.php">Semester 8</a></td> 
</tr>
<tr>
    <td>Fashion Technology</td>
    <td><a href="lp.php">Semester 1</a></td>
    <td><a href="lp.php">Semester 2</a></td>
    <td><a href="lp.php">Semester 3</a></td>
    <td><a href="lp.php">Semester 4</a></td>
    <td><a href="lp.php">Semester 5</a></td>
    <td><a href="lp.php">Semester 6</a></td>
    <td><a href="lp.php">Semester 7</a></td>
    <td><a href="lp.php">Semester 8</a></td>
</tr>
<tr>
    <td>Information Technology</td>
    <td><a href="lp.php">Semester 1</a></td>
    <td><a href="lp.php">Semester 2</a></td>
    <td><a href="lp.php">Semester 3</a></td>
    <td><a href="lp.php">Semester 4</a></td>
    <td><a href="lp.php">Semester 5</a></td>
    <td><a href="lp.php">Semester 6</a></td>
    <td><a href="lp.php">Semester 7</a></td>
    <td><a href="lp.php">Semester 8</a></td>
</tr>
<tr>
    <td>Textile Technology</td>
    <td><a href="lp.php">Semester 1</a></td>
    <td><a href="lp.php">Semester 2</a></td>
    <td><a href="lp.php">Semester 3</a></td>
    <td><a href="lp.php">Semester 4</a></td>
    <td><a href="lp.php">Semester 5</a></td>
    <td><a href="lp.php">Semester 6</a></td>
    <td><a href="lp.php">Semester 7</a></td>
    <td><a href="lp.php">Semester 8</a></td>
</tr>
</table>
</div>
</body>
</html>
