<?php

// php code to Update data from mysql database Table

if(isset($_POST['update']))
{
    
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $databaseName = "db_admin";
   
   $connect = mysqli_connect($hostname, $username, $password, $databaseName);
   
   // get values form input text and number
   
   // $No = $_POST['No'];
   $Keterangan = $_POST['Keterangan'];
   $No_hp = $_POST['No_hp'];
           
   // mysql query to Update data
   $query = "UPDATE `tb_admin` SET `No_hp`='".$No_hp."' WHERE `Keterangan` = '".$Keterangan."'";
   
   $result = mysqli_query($connect, $query);
   
   if($result)
   {
       echo 'Data Updated';
   }else{
       echo 'Data Not Updated';
   }
   mysqli_close($connect);
}

?>

<!DOCTYPE html>

<html>

    <head>

        <title> PHP UPDATE DATA </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">\
    
    </head>

    <body>
    <body style="background-color:#073642;">
        <form action="update_data.php" method="post">
            
        <p style="color:white">Keterangan :</p><select class="form-control" name="Keterangan" >
                            <option value="">Chose</option>
                            <option value="admin1">admin1</option>
                            <option value="admin2">admin2</option>
                            <option value="admin3">admin3</option>
                            <option value="admin4">admin4</option>
                            <option value="admin5">admin5</option>
                            <option value="admin6">admin6</option>
           "font-size:30px"             </select>
                        <br><br>
            <!-- <input type="text" name="Keterangan" required><br><br> -->
        <p style="color:white">No HP :</p><input type="text" name="No_hp" required><br><br>

            <input type="submit" name="update" value="Update Data">

        </form>

    </body>

    

</html>
<style>
table, th, td {
  border:1px solid white;
}
</style>
<h2>Tabel Admin</h2>
<table style="width:50%">
    <tr>
        <td>No</td>
        <td>Keterangan</td>
        <td>No_hp</td>
    </tr>
    <?php
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $databaseName = "db_admin";
        
        $connect = mysqli_connect($hostname, $username, $password, $databaseName);
        
        $tampil = mysqli_query($connect, 'SELECT * FROM `tb_admin`');
        $no = 1;
        while($hasil = mysqli_fetch_array($tampil)){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $hasil['Keterangan']; ?></td>
        <td><?php echo $hasil['No_Hp']; ?></td>
    </tr>
    <?php
        }
    ?>
</table>