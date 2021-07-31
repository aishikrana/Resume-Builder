<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="style.css" />
    <style type="text/css">
        * { margin: 0; padding: 0; }
        body { font: 16px Helvetica, Sans-Serif; line-height: 24px; background: url(images/noise.jpg); }
        .clear { clear: both; }
        #page-wrap { width: 800px; margin: 40px auto 60px; }
        #pic { float: right; margin: -30px 0 0 0; }
        h1 { margin: 0 0 16px 0; padding: 0 0 16px 0; font-size: 42px; font-weight: bold; letter-spacing: -2px; border-bottom: 1px solid #999; }
        h2 { font-size: 20px; margin: 0 0 6px 0; position: relative; }
        h2 span { position: absolute; bottom: 0; right: 0; font-style: italic; font-family: Georgia, Serif; font-size: 16px; color: #999; font-weight: normal; }
        p { margin: 0 0 16px 0; }
        a { color: #999; text-decoration: none; border-bottom: 1px dotted #999; }
        a:hover { border-bottom-style: solid; color: black; }
        ul { margin: 0 0 32px 17px; }
        #objective { width: 500px; float: left; }
        #objective p { font-family: Georgia, Serif; font-style: italic; color: #666; }
        dt { font-style: italic; font-weight: bold; font-size: 18px; text-align: right; padding: 0 26px 0 0; width: 150px; float: left; height: 100px; border-right: 1px solid #999;  }
        dd { width: 600px; float: right; }
        dd.clear { float: none; margin: 0; height: 15px; }
     </style>
    <title>Document</title>
</head>
<body>
  <div >
 <form class="form-inline my-2 my-lg-0" method="POST" action="search.php" >
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="name">
          <input type="submit" style="width:20%"  placeholder="submit" value="submit" name="submit" />
        </form>

        <?php
           $connect=mysqli_connect('localhost','root','','resume');
           if(isset($_POST['submit']))
           {
             $name=$_POST['name'];
             $query=mysqli_query($connect,"select * from resume_table where roll='$name' or name='$name' ")or die("Error: " . mysqli_error($connect));
             while($row=mysqli_fetch_array($query))
             {
               $name=$row['name'];
               $roll=$row['roll'];
               $date=$row['date'];
               $add=$row['address'];
               $mob=$row['mob'];
               $email=$row['email'];
               $hobby=$row['hobby'];
               $host=$row['hosteller'];
               $ref=$row['ref'];
               $s1=$row['sgpa1'];
               $s2=$row['sgpa2'];
               $s3=$row['sgpa3'];
               $s4=$row['sgpa4'];
               $s5=$row['sgpa5'];
               $s6=$row['sgpa6'];
               $s7=$row['sgpa7'];
               $s8=$row['sgpa8'];
               $c=$row['cgpa'];
             }
           }
        ?>
        </div>
        <?php
         if(isset($_POST['name']))
         {
          echo "<div id='page-wrap'>
          <div id='contact-info' class='vcard'>
          
              <!-- Microformats! -->
             
              <h1 class='fn'>
              $name  
              </h1>
              <p>
                  Cell: <span class='tel'>$mob</span><br />
                  Email: <a class='email' href='mailto:greatoldone@lovecraft.com'>$email</a><br />
                  Address:<span class='email'>$add</span><br />
                  Date of Birth:<span class='email'>$date</span><br />
                  Roll:<span class='email'>$roll</span>
              </p>
          </div>
          
          <div class='clear'></div>
          
          <dl>
              <dd class='clear'></dd>
              
              <dt>Education</dt>
              <dd>
                  <h2>National Institute of Technology Calicut</h2>
                  <ul>
                      <li><Strong>CGPA:</Strong> $c</li>
                      <li><Strong>SGPA1:</Strong>$s1</li>
                      <li><Strong>SGPA2:</Strong>$s2</li>
                      <li><Strong>SGPA3:</Strong>$s3</li>
                      <li><Strong>SGPA4:</Strong>$s4</li>
                      <li><Strong>SGPA5:</Strong>$s5</li>
                      <li><Strong>SGPA6:</Strong>$s6</li>
                      <li><Strong>SGPA7:</Strong>$s7</li>
                      <li><Strong>SGPA8:</Strong>$s8</li>
                     
                  </ul>
              </dd>
              
              
              <dd class='clear'></dd>
              
              <dt>Hobbies</dt>
              <dd> $hobby</dd>
              
              <dd class='clear'></dd>
              
              <dt>References</dt>
              <dd>$ref</dd>
              
              <dd class='clear'></dd>
              <dt>Hosteller</dt>
              <dd> $host</dd>
          </dl>
          
          <div class='clear'></div>
      
      </div>";
        
         }
        ?>
        
             
             

        

</body>
</html>