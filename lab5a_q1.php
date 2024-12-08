<!DOCTYPE html> 
<html lang="en"> 
<head> 
<title>Lab 5a Q1</title> 
</head> 
<body> 
        <?php  
        $name = "Muhammad Haziq Bin Sumagi"; 
        $matric = "CI220053"; 
        $Course = "Software Engineering"; 
        $Year = "2024/2025"; 
        $Address = "Melbourne"; 
        ?> 
<table border="50px"> 
<tr> 
<td>Name</td> 
<td><?php echo "$name"; ?></td>  
</tr> 
<tr>
    <td>Matric Number</td>
    <td><?php echo "$matric";?></td>
</tr>
<tr>
    <td>Course</td>
    <td><?php echo"$Course";?></td>
    
</tr>
<tr>
    <td>Year Study</td>
    <td><?php echo"$Year"; ?></td>
</tr>
<tr>
    <td>Address</td>
    <td><?php echo"$Address";?></td>
</tr>

</table> 
</body> 
</html> 