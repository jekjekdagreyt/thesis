   <?php
         $dbServername = "localhost";
         $dbUsername = "root";
          $dbPassword = "";
           $dbName = "adminaccount";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

if(!$conn ){
    die("Connection failed :" . mysqli_connect_error() );
}

            $username = $_POST['user'];
            $password = $_POST['pass'];

            
       
           $sql = "SELECT Password FROM admininfo Where Username = '$username'"; 
           $result = mysqli_query($conn,$sql);
            
            while($row = mysqli_fetch_assoc($result) ){
                            $pwFrmDB = $row['Password'];    
                        }

                        if($pwFrmDB == $password ){

                            session_start();
                            $_SESSION['m_un'] = $username;
                            header('Location:Admin/Ahomepage.php');
                        }else{

                            header('Location:index.php');
                        }
          
          /* $sqlemployee = "SELECT Password FROM employeeinfo Where Username = '$username'";
           $resultemployee = mysqli_query($conn,$sqlemployee);

            while($raw = mysqli_fetch_assoc($resultemployee) ){
                            $pw = $raw['Password'];
                   }

                   if($pw == $password){

                        session_start();
                        $_SESSION['m_un'] = $username;
                        header('Location:empi.php');

                   }else{

                        header('Location:index.php');
                   }
                    */
        


    ?> 