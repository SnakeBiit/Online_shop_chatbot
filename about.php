<?php include 'includes/head.php'?>
<?php include 'includes/header.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>About</title>
<style>
.container123 {
  position: relative;
  text-align: center;
  color: white;
  margin-top:-1.5rem;
  background-image: url('./photos/cover.jpg');
    opacity: 0.8;
}


.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.info{
    display:flex;
    justify-content:space-between;
}
.para-about{
    
    margin-right:9rem;
    margin-left:9rem;
}
.titlu-about{
    margin-left:9rem;
    color:black;
}
.para-about2{
    margin-left:0;
    margin-right:0;
}
.titlu-about2{
    margin-left:0rem;
     color:black;
}

</style>
</head>
<body>
       

        <div class="container123">
        <img src="./photos/cover.jpg" alt="Snow" style="width:100%; ">
        
        <div class="centered">We are a platform for creating and operating interactive 3D content. We help creators and we give them the power they need.</div>
        </div>
        <div class = "info">

        </div>

        <div class="info">
                <div>
                    <h1 class = "titlu-about">Missiont</h1>
                    <p class= "para-about">We provide time saving game resources for game developers small and big, we believe game development and asset creation can be streamlined and produced more efficiently just like cooking, you don’t have to grow your own ingredients, you can cook a nice dish just by using ingredients from your super market! </p>
                </div>
                <div>
                    <h1 class = "titlu-about2" id="bottom2">Experience </h1>
                    <p class= "para-about2">With over 6 years of experience in game asset production and working with more than 50 studios we have collected and developed our own internal asset database for efficient game asset creation.</p>
                </div>
                <div>
                        <h1 class = "titlu-about">Bucharest, Romania</h1>
                   
                    <p  class= "para-about">Str. Florilor 8, Bl. I19</p>
                    <p  class= "para-about">0134123 Bucuresti</p>
                    <p  class= "para-about">Sector 3 Romania</p>
                    <p  class= "para-about"> Reception/General enquiries: +40 0757 45 35 40</p>
                    <p  class= "para-about">Email:radu97_stefan@gmail.com</p>
                    <p  class= "para-about">Availability: (Mon-Fri) 9AM to 5PM </p>
                    
                </div>
        </div>
</body>
<?php include 'includes/footer.php'?>
</html>
