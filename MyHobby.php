<?php
require 'connection.php';

if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $age = $_POST["age"];
  $country = $_POST["country"];
  $gender = $_POST["gender"];

  $languages = $_POST["languages"];
  $language = "";
  foreach($languages as $row){
    $language .= $row . ",";
  }

  $query = "INSERT INTO tb_data VALUES('', '$name', '$age', '$country', '$gender', '$language')";
  mysqli_query($conn,$query);
  echo
  "
  <script> alert('Data Inserted Successfully'); </script>
  ";
}
?>

<!DOCTYPE html>
<html>
    
<title>My favourite book</title>
<link rel="stylesheet" href=MyHobby.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
<header>
    
    <a href="#" class="harry">
        <img src="logo.png" alt="" height="100" width="200">
    </a>
 <center>       <button><a href="#home">Home</a></button>
        <button ><a href="#About">About</a></button>
        <button><a href="#Contact">Contact</a></button>
        
   
    <section id="Home"><img></section>
    <section id="About"><p></p></section>
    <section id="Contact"><footer></footer></section></center>
   
    <form action="welcome.php" method="post" autocomplete="off">
       
        E-mail: <input type="text" name="email"><br>
           
        <label for="">Name</label>
        <input type="text" name="name" required value="">
        <br>
        <label for="">Age</label>
        <input type="number" name="age" required value="">
        <br>
        <label for="">Country</label>
        <select class="" name="country" required>
            <br>
          <option value="" selected hidden>Select Country</option>
          <option value="Sri Lanka">Sri Lanka</option>
          <option value="UK">USA</option>
          <option value="USA">UK</option>
          <option value="India">India</option>
        </select>
        <br>
        <label for="">Gender</label>
        <input type="radio" name="gender" value="Male" required> Male
        <input type="radio" name="gender" value="Female"> Female
        <br>
        <label for="">Languages</label>
        <input type="checkbox" name="languages[]" value="English">English
        <input type="checkbox" name="languages[]" value="Chinese">Chinese
        <input type="checkbox" name="languages[]" value="Spanish">Spanish
        <br>
        <button type="submit" name="submit">Submit</button>
      </form>
       
</header>
<body style="background-color: rgba(202, 127, 190, 0.37);">
<h1><center> My hobby is reading </center></h1>
<h2 id="head"><b><center> My favourite Book Series Is Harry Potter </center></b></h2>
    <script src="MyHobby.js"></script>

    <center><img src="harrypotter.jpg" id="img1" onmouseover="setNewImage()" onmouseout="setOldImage()" width="800"/></center>
    <p>My favourite book is "Harry Potter".Some people believe that this book is fairytale for children.But people who are older than me read this book great interest too..Harry Potter is a 7 series fantasy novel written by a British author J.K Rowling. The series is about an adventure of a young wizard “Harry Potter” with his friends Ronald Weasley & Hermione Granger who are all studying at hogwarts School of Witchcraft. Harry Potter Series of genre, including fantasy, and the british school story (including elements of, adventure, thiller, mystery, and romance) There were many themes behind the Harry Potter series but the main themes was Death according to Rowling. There were other themes like “prejudice & Corruption”.</p>
    <p> Since the first release of “Harry Potter and The Philosopher’s stone” there was a mass spread of popularity and commercial success worldwide.</p>
    <p>I have some Harry Potter magic for you all,to see the magic begin just press the spells that are below....</p>
    <img src="wand.jpg" id="wand" width="300" height="200">
    <div><input type="button" value="LUMOS" id="lumos" onclick="lumos_fn()" class="spells">
    </div>
    <div>
      <input type="button" value="Expecto patronum" class="spells" id="exp" onclick="pat()">
    </div>
    <div>
      <input type="button" value="Obliviate" class="spells" id="ob" onclick="obli()">
    </div>

   
    <footer style="background-color: rgba(161, 78, 155, 0.233);">
                    
                    <div class="social">
                        <a href="#"><span class="fab fa-facebook"></span></a>
                        <a href="#"><span class="fab fa-instagram"></span></a>
                        <a href="#"><span class="fab fa-linkedin"></span></a>
                        <a href="#"><span class="fab fa-twitter"></span></a>
                    </div>
                </div>
            </div>
            
                    
                    <div class="phone">
                        <span class="fas fa-phone-alt"></span>
                        <span class="text">
                            +94740123456
                        </span>
                    </div>
                    <div class="email">
                        <span class="fas fa-envelope"></span>
                        <span class="text">
                            abc@gmail.com
                        </span>
                    </div>
                </div>
            
    </footer>

    
</body>
</html>