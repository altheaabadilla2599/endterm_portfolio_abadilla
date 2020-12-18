<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>AA Portfolio</title>




<body>


<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1 {font-family: "Raleway", Arial, sans-serif}
h1 {letter-spacing: 6px}
.w3-row-padding img {margin-bottom: 12px}
</style>
<body>


<div class="w3-content" style="max-width:1500px">

<!-- Header -->
<header class="w3-panel w3-center" style="padding:128px 16px">
  <h1>HTML5 Canvas</h1>
  <h1 class="w3-xlarge">Graphical Art</h1>
 
  
  <div class="w3-padding-32">
    <div class="w3-bar w3-border w3-light-blue" >
      <a href="index.php" class="w3-bar-item w3-button">Home</a>
      <a href="css.php" class="w3-bar-item w3-button ">CSS</a>
      <a href="svg.php" class="w3-bar-item w3-button">SVG</a>
      <a href="canvas.php" class="w3-bar-item w3-button w3-hide-small">CANVAS</a>
      <a href="about.php" class="w3-bar-item w3-button">ABOUT AA</a>

    </div>
  </div>


<div id="holder">
<img src="logo.svg"></div>


<div class="pers">
</div>

<div class="second">
</div>

<div class="third">
</div>

<div class="fourth">
</div>

<div class="fifth">
</div>

<div class="sixth">
</div>
</div>
  
<br>
<br>
<br>
<br>
<br>
<br>
<style>
body {
      background: #bfd4db;
}

</style>

<canvas
 id="Canvas1" width="200" height= "200">
</canvas>


<script>
      var canvas = document.getElementById('Canvas1');
      var context = canvas.getContext('2d');

 
      
      var centerX = canvas.width / 2;
      var centerY = canvas.height / 2;
      var radius = 70;

      context.beginPath();
      context.arc(centerX, centerY, radius, 0, 2 * Math.PI, false);
      context.fillStyle = '#fff4c2';
      context.fill();
      context.lineWidth = 5;
      context.strokeStyle = '#B37A4C';
      context.stroke();

      var centerX = canvas.width / 2;
      var centerY = canvas.height / 2;
      var radius = 10;
           
            createCircle(60,80,4, '#9c6137', 12, '#9c6137');
            createCircle(80,50,4, '#9c6137', 2, '#9c6137');
            createCircle(80,120,4, '#9c6137', 12, '#9c6137');
            createCircle(120,130,4, '#9c6137', 8, '#9c6137');
            createCircle(140,90,4, '#9c6137', 8, '#9c6137');
            createCircle(120,60,4, '#9c6137', 2, '#9c6137');
            
		
		
context.beginPath();
context.stroke();
context.closePath();

	 function createCircle(centerX, centerY, radius, fillcolor, linewidth, strokeColor){
	  context.beginPath();
      context.arc(centerX, centerY, radius, 0, 2 * Math.PI, false);
      context.fillStyle = fillcolor;
      context.fill();
      context.lineWidth = linewidth;
      context.strokeStyle = strokeColor;
      context.stroke();

      
	  }

     

      
	  

</script>



<canvas
 id="Canvas2" width="200" height= "200">
</canvas>


<script>
      var canvas = document.getElementById('Canvas2');
      var context = canvas.getContext('2d');
      

     
      
      var centerX = canvas.width / 2;
      var centerY = canvas.height / 2;
      var radius = 70;

      context.beginPath();
      context.arc(centerX, centerY, radius, 0, 2 * Math.PI, false);
      context.fillStyle = '#b8e2f2';
      context.fill();
      context.lineWidth = 10;
      context.strokeStyle = '#d21404';
      context.stroke();

      

      var centerX = canvas.width / 2;
      var centerY = canvas.height / 2;
      var radius = 10;

           
           
            createCircle(100,45,4, '#000000', 2, '#000000');
            createCircle(130,55,4, '#000000', 2, '#000000');
            createCircle(150,75,4, '#000000', 2, '#000000');
            createCircle(155,99,4, '#000000', 2, '#000000');
            createCircle(148,130,4, '#000000', 2, '#000000');
            createCircle(130,150,4, '#000000', 2, '#000000');
            createCircle(100,155,4, '#000000', 2, '#000000');
            createCircle(68,55,4, '#000000', 2, '#000000');
            createCircle(50,75,4, '#000000', 2, '#000000');
            createCircle(45,99,4, '#000000', 2, '#000000');
            createCircle(53,130,4, '#000000', 2, '#000000');
            createCircle(70,150,4, '#000000', 2, '#000000');
            createCircle(100,100,4, '#fff4c2', 2, '#d21404');



context.strokeStyle = '#000000';
context.beginPath();
context.moveTo(100, 100);
context.lineTo(70, 50);
context.lineWidth = 5;
context.strokeStyle = '#d21404';
context.stroke();
context.closePath();        
            
		
context.strokeStyle = '#000000';
context.beginPath();
context.moveTo(100, 100);
context.lineTo(100, 135);
context.lineWidth = 5;
context.strokeStyle = '#d21404';
context.stroke();
context.closePath();




	 function createCircle(centerX, centerY, radius, fillcolor, linewidth, strokeColor){
	  context.beginPath();
      context.arc(centerX, centerY, radius, 0, 2 * Math.PI, false);
      context.fillStyle = fillcolor;
      context.fill();
      context.lineWidth = linewidth;
      context.strokeStyle = strokeColor;
      context.stroke();

      
	  }

  

     

      
	  

</script>


<canvas
 id="Canvas3" width="200" height= "200">
</canvas>


<script>
      var canvas = document.getElementById('Canvas3');
      var context = canvas.getContext('2d');
      

     
      
     
      context.beginPath();
      context.rect(5, 50, 190, 120);
      context.fillStyle = '#dd571c';
      context.fill();
      context.lineWidth = 5;
      context.strokeStyle = '#dd571c';
      context.stroke();

      context.beginPath();
      context.rect(10, 65, 140, 90);
      context.fillStyle = '#d9dddc';
      context.fill();
      context.lineWidth = 5;
      context.strokeStyle = '#000';
      context.stroke();

      createCircle(175,70,4, '#9c613', 15, '#787276');
      createCircle(175,100,4, '#9c613', 15, '#787276');


      context.beginPath();
      context.rect(160, 120, 30, 40);
      context.fillStyle = '#000';
      context.fill();
      context.lineWidth = 5;
      context.strokeStyle = '#d9dddc';
      context.stroke();



	 function createCircle(centerX, centerY, radius, fillcolor, linewidth, strokeColor){
	context.beginPath();
      context.arc(centerX, centerY, radius, 0, 2 * Math.PI, false);
      context.fillStyle = fillcolor;
      context.fill();
      context.lineWidth = linewidth;
      context.strokeStyle = strokeColor;
      context.stroke();

      
	  }

  

     

      
	  

</script>


<canvas
 id="Canvas4" width="200" height= "200">
</canvas>


<script>
      var canvas = document.getElementById('Canvas4');
      var context = canvas.getContext('2d');
      
      context.beginPath();
      context.rect(55, 50, 120, 80);
      context.lineWidth = 8;
      context.strokeStyle = '#000';
      context.stroke();
     
     
      context.beginPath();
      context.rect(40, 90, 150, 80);
      context.fillStyle = '#e3242b';
      context.fill();
      context.lineWidth = 5;
      context.strokeStyle = '#b3bdb8';
      context.stroke();

      context.beginPath();
      context.rect(100, 140, 30, 20);
      context.fillStyle = '#828282';
      context.fill();
      context.lineWidth = 2;
      context.strokeStyle = '#000';
      context.stroke();


      createCircle(75,140,10, '#000', 25, '#000');
      createCircle(155,140,10, '#000', 25, '#000');
      createCircle(70,105,4, '#ff0000', 2, '#000000');
      createCircle(90,105,4, '#3cb043', 2, '#000000');
      createCircle(110,105,4, '#3944bc', 2, '#000000');
      createCircle(135,105,4, '#fff000', 2, '#000000');
      createCircle(160,105,4, '#ffffff', 2, '#000000');
   
    

  



	 function createCircle(centerX, centerY, radius, fillcolor, linewidth, strokeColor){
	context.beginPath();
      context.arc(centerX, centerY, radius, 0, 2 * Math.PI, false);
      context.fillStyle = fillcolor;
      context.fill();
      context.lineWidth = linewidth;
      context.strokeStyle = strokeColor;
      context.stroke();

      
	  }

  

     

      
	  

</script>


<canvas
 id="Canvas5" width="200" height= "200">
</canvas>


<script>
      var canvas = document.getElementById('Canvas5');
      var context = canvas.getContext('2d');
      
      context.beginPath();
      context.rect(55, 30, 70, 110);
      context.fillStyle = '#000';
      context.fill();
      context.lineWidth = 8;
      context.strokeStyle = '#000';
      context.stroke();

       
      context.beginPath();
      context.rect(65, 30, 50, 105);
      context.fillStyle = '#000';
      context.fill();
      context.lineWidth = 2;
      context.strokeStyle = '#fff';
      context.stroke();


      context.beginPath();
      context.rect(80, 140, 20, 40);
      context.fillStyle = '#000';
      context.fill();
      context.lineWidth = 2;
      context.strokeStyle = '#000';
      context.stroke();


 
      createCircle(90,50,10, '#ff0000', 10, '#ff0000');
      createCircle(90,85,10, '#fff000', 10, '#fff000');
      createCircle(90,118,10, '#3cb043', 10, '#3cb043');
    
   
    

  



	 function createCircle(centerX, centerY, radius, fillcolor, linewidth, strokeColor){
	  context.beginPath();
      context.arc(centerX, centerY, radius, 0, 2 * Math.PI, false);
      context.fillStyle = fillcolor;
      context.fill();
      context.lineWidth = linewidth;
      context.strokeStyle = strokeColor;
      context.stroke();

      
	  }

  

     

      
	  

</script>



<canvas
 id="Canvas6" width="200" height= "200">
</canvas>


<script>
      var canvas = document.getElementById('Canvas6');
      var context = canvas.getContext('2d');
      
      context.beginPath();
      context.rect(1, 60, 160, 100);
      context.fillStyle = '#48494b';
      context.fill();
      context.lineWidth = 8;
      context.strokeStyle = '#48494b';
      context.stroke();

      context.beginPath();
      context.rect(28, 80, 110, 50);
      context.fillStyle = '#ff0000';
      context.fill();
      context.lineWidth = 8;
      context.strokeStyle = '#ff0000';
      context.stroke();

      context.beginPath();
      context.rect(30, 85, 105, 10);
      context.fillStyle = '#fff';
      context.fill();
      context.lineWidth = 5;
      context.strokeStyle = '#fff';
      context.stroke();
       

      context.beginPath();
      context.rect(50, 105, 70, 20);
      context.fillStyle = '#222021';
      context.fill();
      context.lineWidth = 5;
      context.strokeStyle = '#222021';
      context.stroke();


      
      context.beginPath();
      context.rect(67, 115, 35, 1);
      context.fillStyle = '#999da0';
      context.fill();
      context.lineWidth = 5;
      context.strokeStyle = '#999da0';
      context.stroke();
       
        
    
   
      createCircle(60,115,4, '#fff', 5, '#fff');
      createCircle(110,115,4, '#fff', 5, '#fff');
     
     

      context.beginPath();
      context.rect(30, 85, 105, 10);
      context.fillStyle = '#fff';
      context.fill();
      context.lineWidth = 5;
      context.strokeStyle = '#fff';
      context.stroke();


      


      context.beginPath();
      context.rect(43, 141, 85, 20);
      context.fillStyle = '#999da0';
      context.fill();
      context.lineWidth = 5;
      context.strokeStyle = '#999da0';
      context.stroke();
       
      createCircle(60,145,2, '#222021', 2, '#222021');
      createCircle(110,145,2, '#222021', 2, '#222021');
      createCircle(50,155,2, '#222021', 2, '#222021');
      createCircle(120,155,2, '#222021', 2, '#222021');
     

	 function createCircle(centerX, centerY, radius, fillcolor, linewidth, strokeColor){
	context.beginPath();
      context.arc(centerX, centerY, radius, 0, 2 * Math.PI, false);
      context.fillStyle = fillcolor;
      context.fill();
      context.lineWidth = linewidth;
      context.strokeStyle = strokeColor;
      context.stroke();

      
	  }

  

     

      
	  

</script>



<canvas
 id="Canvas7" width="200" height= "200">
</canvas>


<script>
      var canvas = document.getElementById('Canvas7');
      var context = canvas.getContext('2d');
      
      context.beginPath();
      context.rect(20, 60, 155, 131);
      context.fillStyle = '#fff';
      context.fill();
      context.lineWidth = 8;
      context.strokeStyle = '#48494b';
      context.stroke();



      context.beginPath();
      context.rect(47, 68, 10, 10);
      context.fillStyle = '#000';
      context.fill();
      context.lineWidth = 8;
      context.strokeStyle = '#000';
      context.stroke();



      context.beginPath();
      context.rect(82, 68, 10, 10);
      context.fillStyle = '#000';
      context.fill();
      context.lineWidth = 8;
      context.strokeStyle = '#000';
      context.stroke();
      
      context.beginPath();
      context.rect(120, 68, 10, 10);
      context.fillStyle = '#000';
      context.fill();
      context.lineWidth = 8;
      context.strokeStyle = '#000';
      context.stroke();

            
      context.beginPath();
      context.rect(157, 68, 10, 10);
      context.fillStyle = '#000';
      context.fill();
      context.lineWidth = 8;
      context.strokeStyle = '#000';
      context.stroke();



      context.beginPath();
      context.rect(27, 86, 12, 10);
      context.fillStyle = '#000';
      context.fill();
      context.lineWidth = 8;
      context.strokeStyle = '#000';
      context.stroke();


      context.beginPath();
      context.rect(63, 86, 12, 10);
      context.fillStyle = '#000';
      context.fill();
      context.lineWidth = 8;
      context.strokeStyle = '#000';
      context.stroke();


      context.beginPath();
      context.rect(100, 86, 12, 10);
      context.fillStyle = '#000';
      context.fill();
      context.lineWidth = 8;
      context.strokeStyle = '#000';
      context.stroke();


      context.beginPath();
      context.rect(138, 86, 12, 10);
      context.fillStyle = '#000';
      context.fill();
      context.lineWidth = 8;
      context.strokeStyle = '#000';
      context.stroke();



      context.beginPath();
      context.rect(46, 104, 10, 10);
      context.fillStyle = '#000';
      context.fill();
      context.lineWidth = 8;
      context.strokeStyle = '#000';
      context.stroke();


      context.beginPath();
      context.rect(83, 104, 10, 10);
      context.fillStyle = '#000';
      context.fill();
      context.lineWidth = 8;
      context.strokeStyle = '#000';
      context.stroke();

      context.beginPath();
      context.rect(120, 104, 10, 10);
      context.fillStyle = '#000';
      context.fill();
      context.lineWidth = 8;
      context.strokeStyle = '#000';
      context.stroke();


      context.beginPath();
      context.rect(157, 104, 10, 10);
      context.fillStyle = '#000';
      context.fill();
      context.lineWidth = 8;
      context.strokeStyle = '#000';
      context.stroke();


      context.beginPath();
      context.rect(27, 121, 12, 10);
      context.fillStyle = '#000';
      context.fill();
      context.lineWidth = 8;
      context.strokeStyle = '#000';
      context.stroke();


      
      context.beginPath();
      context.rect(63, 121, 12, 10);
      context.fillStyle = '#000';
      context.fill();
      context.lineWidth = 8;
      context.strokeStyle = '#000';
      context.stroke();

      context.beginPath();
      context.rect(100, 121, 12, 10);
      context.fillStyle = '#000';
      context.fill();
      context.lineWidth = 8;
      context.strokeStyle = '#000';
      context.stroke();

      context.beginPath();
      context.rect(138, 121, 12, 10);
      context.fillStyle = '#000';
      context.fill();
      context.lineWidth = 8;
      context.strokeStyle = '#000';
      context.stroke();


      context.beginPath();
      context.rect(46, 139, 10, 10);
      context.fillStyle = '#000';
      context.fill();
      context.lineWidth = 8;
      context.strokeStyle = '#000';
      context.stroke();

      
      context.beginPath();
      context.rect(83, 139, 10, 10);
      context.fillStyle = '#000';
      context.fill();
      context.lineWidth = 8;
      context.strokeStyle = '#000';
      context.stroke();

      context.beginPath();
      context.rect(120, 139, 10, 10);
      context.fillStyle = '#000';
      context.fill();
      context.lineWidth = 8;
      context.strokeStyle = '#000';
      context.stroke();

      context.beginPath();
      context.rect(157, 139, 10, 10);
      context.fillStyle = '#000';
      context.fill();
      context.lineWidth = 8;
      context.strokeStyle = '#000';
      context.stroke();


      context.beginPath();
      context.rect(27, 156, 12, 10);
      context.fillStyle = '#000';
      context.fill();
      context.lineWidth = 8;
      context.strokeStyle = '#000';
      context.stroke();


      context.beginPath();
      context.rect(64, 156, 12, 10);
      context.fillStyle = '#000';
      context.fill();
      context.lineWidth = 8;
      context.strokeStyle = '#000';
      context.stroke();


      context.beginPath();
      context.rect(100, 156, 12, 10);
      context.fillStyle = '#000';
      context.fill();
      context.lineWidth = 8;
      context.strokeStyle = '#000';
      context.stroke();

      context.beginPath();
      context.rect(138, 156, 12, 10);
      context.fillStyle = '#000';
      context.fill();
      context.lineWidth = 8;
      context.strokeStyle = '#000';
      context.stroke();
      
      

      context.beginPath();
      context.rect(46, 173, 10, 10);
      context.fillStyle = '#000';
      context.fill();
      context.lineWidth = 8;
      context.strokeStyle = '#000';
      context.stroke();


      
      context.beginPath();
      context.rect(83, 173, 10, 10);
      context.fillStyle = '#000';
      context.fill();
      context.lineWidth = 8;
      context.strokeStyle = '#000';
      context.stroke();


            
      context.beginPath();
      context.rect(120, 173, 10, 10);
      context.fillStyle = '#000';
      context.fill();
      context.lineWidth = 8;
      context.strokeStyle = '#000';
      context.stroke();

      context.beginPath();
      context.rect(157, 173, 10, 10);
      context.fillStyle = '#000';
      context.fill();
      context.lineWidth = 8;
      context.strokeStyle = '#000';
      context.stroke();
     

	 function createCircle(centerX, centerY, radius, fillcolor, linewidth, strokeColor){
	context.beginPath();
      context.arc(centerX, centerY, radius, 0, 2 * Math.PI, false);
      context.fillStyle = fillcolor;
      context.fill();
      context.lineWidth = linewidth;
      context.strokeStyle = strokeColor;
      context.stroke();

      
	  }

  

     

      
	  

</script>

<canvas
 id="Canvas8" width="200" height= "200">
</canvas>


<script>
      var canvas = document.getElementById('Canvas8');
      var context = canvas.getContext('2d');



      
      
      context.beginPath();
      context.rect(40, 35, 30, 60);
      context.fillStyle = '#777b7e';
      context.fill();
      context.lineWidth = 5;
      context.strokeStyle = '#000';
      context.stroke();  

      context.beginPath();
      context.rect(10, 70, 130, 70);
      context.fillStyle = '#ff0000';
      context.fill();
      context.lineWidth = 5;
      context.strokeStyle = '#000';
      context.stroke(); 



      
      context.beginPath();
      context.rect(110, 30, 70, 110);
      context.fillStyle = '#ff0000';
      context.fill();
      context.lineWidth = 5;
      context.strokeStyle = '#000';
      context.stroke();     


      context.beginPath();
      context.rect(120, 40, 50, 50);
      context.fillStyle = '#fff';
      context.fill();
      context.lineWidth = 5;
      context.strokeStyle = '#000';
      context.stroke(); 
      


      context.beginPath();
      context.rect(100, 20, 90, 10);
      context.fillStyle = '#d0efff';
      context.fill();
      context.lineWidth = 3;
      context.strokeStyle = '#000';
      context.stroke(); 

            
      context.beginPath();
      context.rect(7, 140, 175, 20);
      context.fillStyle = '#777b7e';
      context.fill();
      context.lineWidth = 3;
      context.strokeStyle = '#000';
      context.stroke();


      createCircle(40,170,9, '#d0efff', 30, '#ff0000');
      createCircle(90,170,9, '#d0efff', 30, '#ff0000');

      createCircle(150,167,10, '#d0efff', 35, '#ff0000');
     
    
	function createCircle(centerX, centerY, radius, fillcolor, linewidth, strokeColor){
	context.beginPath();
      context.arc(centerX, centerY, radius, 0, 2 * Math.PI, false);
      context.fillStyle = fillcolor;
      context.fill();
      context.lineWidth = linewidth;
      context.strokeStyle = strokeColor;
      context.stroke();

      
	  }

     

      
	  

</script>
</body>
</html>