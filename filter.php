
<?php

$dsn = 'mysql:host=localhost;dbname=ukm';
$username = 'root';
$password = '';

try{
    
    $con = new PDO($dsn, $username, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (Exception $ex) {

    echo 'Not Connected '.$ex->getMessage();
}

$tableContent = '';
$start = '';
$selectStmt = $con->prepare('SELECT * from customer');
$selectStmt->execute();
$customer = $selectStmt->fetchAll();

foreach ($customer as $customer)
{
    $tableContent = $tableContent.'<tr>'.
			.'<td>'.$customer['idcustomer'].'</td>'
            .'<td>'.$customer['namacustomer'].'</td>'
            .'<td>'.$customer['checkin'].'</td>'
			.'<td>'.$customer['checkout'].'</td>'
			.'<td>'.$customer['jkel'].'</td>'
			.'<td>'.$customer['alamatcustomer'].'</td>';
			.'<tr>'.
        
}

if(isset($_POST['search']))
{
$start = $_POST['start'];
$tableContent = '';
$selectStmt = $con->prepare('SELECT * from customer WHERE jkel like :start');
$selectStmt->execute(array(
        
         ':start'=>$start.'%'
    
));
$customer = $selectStmt->fetchAll();

foreach ($customer as $customer)
{
    $tableContent = $tableContent.'<tr>'.
           	'<td>'.$customer['idcustomer'].'</td>'
            '<td>'.$customer['namacustomer'].'</td>'
            .'<td>'.$customer['checkin'].'</td>'
			.'<td>'.$customer['checkout'].'</td>'
			.'<td>'.$customer['jkel'].'</td>'
			.'<td>'.$customer['alamatcustomer'].'</td>';
        
}
    
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Filter</title>  
        <style>
            table,tr,td
            {
               border: 1px solid #000; 
            }
            
            td{
                background-color: #ddd;
            }
        </style>   
    </head>
    <body>
        
        <form action="filter.php" method="POST">           
            <select name="start">
                <option value="">...</option>
                <option value="Classic Room" <?php if($start == 'SClassic Room'){echo 'selected';}?>>Classic Room</option>
                <option value="Superior Room" <?php if($start == 'Superior Room'){echo 'selected';}?>>Superior Room</option>
                <option value="Luxury Room" <?php if($start == 'Luxury Room'){echo 'selected';}?>>Luxury Room</option>
            </select>            
            <input type="submit" name="search" value="Cari">            
            <table>
                <tr>        
					<td>Idcustomer</td>
                    <td>Nama customer</td> 
					<td>checkin</td>
					<td>checkout</td>					
					<td>Jeniskamar</td>	
					<td>alamatcustomer</td>					
                </tr>                
                <?php                
                echo $tableContent;               
                ?>
            </table>
        </form>     
    </body>    
</html>