
<html>
<head lang="en">
    <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" user-scalable="no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>background flip</title>
      <link rel="stylesheet" href="share.css">
    <link rel="stylesheet" href="main.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
<!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,700;1,200;1,600&display=swap" rel="stylesheet"> -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<style>

</style>
</head>
<body>
<div id="home"></div>
<div class="flex">
<div class="nav__container">
<div class="nav_item">text</div>
<div class="nav_item">text</div>
<div class="nav_item test">text<div class="nav_item sub">text</div><div class="nav_item sub">text</div><div class="nav_item sub">text</div></div>
</div>
</div>
<div class="oke">
<h1 class="txt">welcome to my website klik on the arrow</h1>

<div class="icon_flex"></div>
<p class="icon"><a href="#oke"><i class="fas fa-long-arrow-alt-down"></i></a></p>
</div>

<div class="oke1">
  <section class="container">
    <div class="img__container">
    </div>

<div class="flex_1">
<div class="item item_2"><p class="content_p"><a style="text-decoration: none; "class="item_a" href="content.php">content</a></p></div>
<div class="item item_1"><p class="content_p">css3</p></div>
</div>
<div class="flex_2">
<div class="item item_3"><p class="content_p" id="js">javascript</p></div>
<div class="item item_4"><p class="content_p">PHP</p></div>
</div>


  </div>
  </section>


  <!-- <footer class="footer">
    dit is een footer
  </footer> -->


<h1 id="oke"></h1>

</div>
<footer class="footer">


<p class="home"><a href="#home">home</a></p>

</footer>
<script>
let doc = document.getElementById("js");
doc.addEventListener("click" , function (){
doc.innerHTML = "i m javascript";
});


doc.addEventListener("dblclick" , function (){
doc.innerHTML = "javascript";
});

</script>

</body>
</html>
