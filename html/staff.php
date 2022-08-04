<html class="index">

  <head>

    <link rel="stylesheet" href="style.css">

  </head>

  
  <body>

  <?php

      //server credentiols
      $servername = "localhost";
      $username = "root";
      $password = "Ivy@th3n@";
      $dbName = "webdatabase";

      //conect to server
      $conn = mysqli_connect($servername, $username, $password, $dbName);


      //check connection

      if(!$conn){

        echo 'Connection error: ' . myqsl_connect_error();

      }

      
      

  

    
    ?>

      <!-- This is the code that is responsable for the header on all of the pages, including the logo -->
    <div class="Main_Header">
      <img class="Logo" src="https://www.cambridgenetwork.co.uk/civicrm/contact/imagefile?photo=heron_234x234_93d6472290bc2b889d10b24bc20ea3b2_b3dccc063e42b057f426148a7cd043ae.jpg">
      <h1 class="Uni_name" title="Anglia Ruskin University" >Anglia Ruskin University</h1> 
    </div>


  <!-- This is responsable for the navigation bar that is on all of the pages -->

  <nav class="Navbar">

    <a href="index.php" class="NavElement">Home</a>
    <a href="staff.php" class="NavElement">Staff</a>
    <a href="students.php" class="NavElement">Student</a>
    <a href="course.php" class="NavElement">Course</a>
    <a class="NavElement">LogIn</a>

  </nav>



      <?php  

      








        //delete button

    

        
        $result = mysqli_query($conn,"SELECT * FROM staff");
      
        




        while($row = mysqli_fetch_array($result)){


          
          echo "
          
            <div class='IndexInfo'>

            <div class='IndexPic'>
            <img class='Front_pg_pic' src='".$row['picture']."'>
            </div>
  
            <div class='IndexText'><a class='Front_pg_text'>".$row['name']."<br>".$row['subject']."<br>".$row['email']."<br>".$row['phone']." </a></div>
                         
              <form action='delete.php' method='post'>
                  <input type='hidden name='id' value='".$row['id']."'>
              <th> <input type='submit' name='delete' class='btnDelete' value='Delete'> </th>
              
              </form>


            </div>
            

            
          ";


        }
      

        
        

        
      ?>






  </body>










</html>