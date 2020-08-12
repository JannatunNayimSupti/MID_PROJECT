<!--Doctype html-->

<html>
    <head>
        <title>My Profile</title>
    </head>
    
    <body>
      
      <header>
          <h2 style="text-align: center">My Profile</h2>
      </header>
      
      <div style="padding-left: 20%; display:inline-block">
          <form action="" method="post" enctype="multipart/form-data">
              <table>
                  <tr>
                <td>Name</td>
                <td>:</td>
                <td><input name="name" type="text" ></td>
                <td></td>
            </tr>

             <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>UserName</td>
                <td>:</td>
                <td>
                    <input name="userName" type="userName" >
                   
                </td>
                <td></td>
            </tr>
           

            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>
                    <input name="email" type="email" >
                    <abbr title="hint: sample@example.com"><b>i</b></abbr>
                </td>
                <td></td>
            </tr>
            <tr><td colspan="4"><hr/></td></tr>
            
                  
                  <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" value="Submit" name="fileSubmit"></td>
                  </tr>
                  
                  
                  
              </table>
              <a href="dashBoard.php"> Back To Dashboard </a>
              
          </form>
          
      </div>
      
      <div style="display:inline-block">
          <?php
          
          
          if(isset($_POST['fileSubmit']))
            { 
           
              
              //$detail = $_POST['name'];
              $user = $_POST['name']."|".$_POST['userName']."|".$_POST['email'];

              $fname ="Details.txt";
              $fileOn = fopen($fname,'w'); 
                        fwrite($fileOn,$user);
                        
            } 
          
                
          ?>
      </div>
      
      <div style="display:inline-block;padding-left:3%">
          <?php
               $file = fopen('Details.txt','r');

               $data = fread($file, filesize('Details.txt'));
               fclose($file);
               $user = explode('|', $data);
             /*$fileName = "Details.txt";
             $fileOpen = fopen( $fileName, "r" );
          if(filesize($fileName) > 0)
          {
             
             $fileText = fread( $fileOpen, filesize($fileName) );
             fclose( $fileOpen );*/

             
             echo  "<h4>$data</h4>";
          
          ?>
      </div>
       
        
    </body>
</html>
