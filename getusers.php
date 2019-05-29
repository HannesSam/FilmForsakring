<?php
    
        include"include/bootstrap.php";
        
        
        $result = User::getAllUsers();
        
        echo "
        <table>
        <tr>
        <th>Email</th>
        <th>Access</th> 
        </tr>
        </table>
        ";
       
        while($row = $result->fetch_assoc())
        { 
            if($row['admin'] == 1)
            {

                echo "
                <table>
                <tr>
                <td>".$row['email']."</td> 
                <td>'Admin'</td> 
                <td><button type='button'>Change to normal user?</button></td>
                </tr>
                </table>
                ";
            }
            else 
            {
                echo "
                <table>
                <tr>
                <td>".$row['email']."</td> 
                <td>'Normal user'</td> 
                <td><button type='button'>Change to admin?</button></td>
                </tr>
                </table>
                ";

            }

        }

    
   

?>