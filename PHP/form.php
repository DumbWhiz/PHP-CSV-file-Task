<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>

<form action="user_data.php" method="POST" class="form">
<div class="heading">
    <h1>
        Register Here!
    </h1>
</div>  
                <div class="form-details">
                <div class="details-box">
                        <label class="details" for="name">Name</label> 
                        <input type="text" name="name" id="email" placeholder="Enter your Name" name="name" >
                    </div>
                    <div class="details-box">
                        <label class="details" for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Enter your Email" name="email" >
                    </div>
                    <div class="details-box">
                        <label class="details" for="pass">Password</label>
                        <input type="password" name="password" id="pass" placeholder="Password" name="password" >
                    </div>
                    <div class="details-box">
                    <label class="details" for="genders">Gender</label>
                    <select name="genders" id="genders" >
                        <option value="select">select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    </div>
                    <div class="details-box">
                        <label class="details" for="country">Country</label>
                        <input type="text" name="country" id="country" placeholder="Enter your Country">
                    </div>
                    <div class="button">
                        <button type="submit" value="submit" name="submit" class="btn">submit</button>
                    </div>
                </div>
            </form>


        
</body>
</html>