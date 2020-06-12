<?php
    function getdata()
    {
        include 'db.php';
    $sql="SELECT * FROM user ";
    $json_array=array();
    if($result=mysqli_query($con,$sql))
    {
        while($row=mysqli_fetch_array($result))
        {
            $json_array[]=array('firstname'=>$row['firstname'],'lastname'=>$row['lastname'],'gender'=>$row['gender'],'dob'=>$row['dob'],'age'=>$row['age'],'email'=>$row['email'],'password'=>$row['password'],'mobile'=>$row['mobile']);
        }
    }
    return json_encode($json_array);
    }
    $file='json/user.json';
    file_put_contents($file,getdata());
    
?>
    