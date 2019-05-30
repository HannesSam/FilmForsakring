<?php
    
        include"include/bootstrap.php";
        
        
        $result = User::getAllUsers();
        
   
       
        echo "
        <table class= 'adminhead'>
        <tr>
        <th>Email</th>
        <th>Access</th>
        <th>Change?</th> 
        </tr>
        </table>
        ";
       
        while($row = $result->fetch_assoc())
        { 
            if($row['admin'] == 1)
            {

                echo "
                <table class='adminbody'>
                <tr>
                <td id='adminuser'>".$row['email']."</td> 
                <td>'Admin'</td> 
                <td><button class='button' type='button' id='offadmin'>Change to normal?</button></td>
                </tr>
                </table>
                ";
            }
            else 
            {
                echo "
                <table class='adminbody'>
                <tr>
                <td id='normaluser'>".$row['email']."</td> 
                <td>'Normal user'</td> 
                <td><button class='button' type='button' id='onadmin'>Change to admin?</button></td>
                </tr>
                </table>
                ";

            }

        }

    
   

?>