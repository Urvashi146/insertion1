<!DOCTYPE html>
<html>
    <head>
   
        <style>
        
        
        input[type=text], select 
        {
            width: 30%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            text-align: left;
        }
    
        div
         {
            width: 30%;
            border-radius: 25px;
            background-color: #f2f2f2;
            padding: 20px;
            text-align: left;
        } 
        h1
        {
            background-color:black;
            width: 100%;
            color:white;
            text-decoration: underline;
            text-align: center;
            padding: 5px;
           
        }
        
        </style>

    </head>
<body>
<center>
<div>
        <h1>Form</h1>
    <form  action='connect.php', method='post' >
        <label >FirstName</lable>
        <input type="text",name="fname",value="<?php echo $fname;?>",placeholder="Your name.."></br><br>
        <label>MiddleName</lable>
        <input type="text",name="mname",value="<?php echo $mname;?>",placeholder="enter your middlename here"></br><br>
        <label>LastName</lable>
        <input type="text",name="lname",value="<?php echo $lname;?>",placeholder="enter your lastname here"></br><br>

        <label > Hobby:</label>
        <input type="checkbox"  name="hobby" value="dancing">
        <label > dancing</label>
        <input type="checkbox"  name="hobby" value="gaming">
        <label > gaming</label>
        <input type="checkbox"  name="hobby" value="singing">
        <label > singing</label><br><br>

        <label >City</label>
        <select>
        <option value="Ahmedabad">Ahmedabad</option>
        <option value="Baroda">Baroda</option>
        <option value="Surat">Surat</option>
        </select></br><br>

        <label>Gender</label>
        <input type="radio" name="gender" value="male">
        <label>Male</label>
        <input type="radio" name="gender" value="Female">
        <label>Female</label></br><br>

       

        <label >Address</label>
        <textarea name="message" rows="5" cols="30" value="<?php echo $address;?>">Address Please......</textarea>
       
        <input type="submit" value="Submit">
    </form>
</div>
</center>


<?php

$a=10;
$b=10;
$c=$a+$b;
//echo $c=$a+$b;

echo "this is the addition" ."  " .$c. "!"


?>

</body>
</html>
