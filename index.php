<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
  <div class="container">
    <div class="card">

        <img class="image" src="avatar.png">
      
      
       <div class="card__content">
        <h1>CV</h1>
        <h3>Adna Hajrovic</h3>
        <p>Software Engineer</p>
        <p>Sarajevo, Bosnia and Herzegovina</p>
        <div class="socialmedia">
          <a href="https://facebook.com/adna.hajrovic.925"><img class="icons" src="facebook.png"></a>
          <a href="mailto:adna_98@hotmail.com"><img class="icons" src="mail3.jpg"></a>
        </div>
      </div>
    </div>

    <div class="card">
       <div class="card__content">
        <h2>About me:</h2>
        <p>I am a software engineer who's about to get masters
          in management, which will broaden my work opportunities.
          <br>
          <br>
          My passion is testing and QA, 
          which will bring me to
          Luxembourg for job next year, hence why i'd like to
          find even more jobs across the Europe. 
          <br>
          <br>
          I did internship
          regarding web development, which helped me a lot to
          create various pages for personal uses. 
          <br>
          <br>
          I love to work 
          with people, which made me decide to go for masters in management 
          and bussines, so as my best quality i'd say that i am 
          very social and persuasive.
        </p>
      </div>
    </div>

    <div class="card">
       <div class="card__content">
        <h2>Education and Work Experience:</h2>
        <ul>
          <li>High School Obala Gymnasium Sarajevo</li>
          <br>
          <li>International University of Sarajevo</li>
          <br>
          <li>Internship at Tayra, International Burch University</li>
          <br> 
          <li>Assistant at SibaBud, Luxembourg</li>
        </ul>
      </div>
    </div>

    <div class="card">
       <div class="card__content">
        <h2>Skills and Qualities:</h2>
        <ul>
          <li>Creative</li>
          <br>
          <li>Adaptable</li>
            <br>
            <li>Social and Extroverted</li>
            <br>
            <li>Punctual</li>
            <br>
            <li>Compassionate and Hard-Working</li>
            <br>
            <li>Good with Math Functions and Math problems in general</li>
            <br>
            <li>Learned React, summer '19</li>
            <br>
            <li>Photoshop master skills</li>
          </li>
        </ul>
      </div>
    </div>

    <div class="card" id="form-card">
      
      
       <div class="card__content ">
        <h1>Contact Me</h1> 

        <form class="form" action="adna.php" method="POST">
          <table style="margin-left:auto;margin-right:auto;">
          <p style="color:green">* required field</p>
            <tr>
              <td>*Name </td>
              <td><input type="text" id="name" name="name" required="1" /></td>
            </tr>
            <tr>
              <td>*E-mail </td>
              <td><input type="email" id="email" name="email" required="1"/></td>
            </tr>
  
            <tr>
              <td>Your Message: </td>
              <td><textarea name="comment" id="comment" rows="10" cols="25" required="1"></textarea></td>
            </tr>
  
            <tr>
              <td></td>
              <td><input type="submit" id="submit" name="submit" value="Submit"></td>
            </tr>
          </table>
       </div>
      
    </div>

  </div>





<script>
function hide() {
  var x = document.getElementById("form-card");
  
    x.style.display = "none";
  
}
</script>
</body>
</html>