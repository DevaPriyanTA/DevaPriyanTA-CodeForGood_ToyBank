
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>User Registration with Email Verification in PHP</title>
<!-- CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
<div class="card">
<div class="card-header text-center">
Volunteering with TOYBANK
</div>
<div class="card-body">
<form action="store-registration-send-email.php" method="post">
            <div class="form-group">
                <label for="Name">First Name</label>
                <input name="FirstName" type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter Name">
                
            </div>
            <div class="form-group">
                <label for="Name">Last Name</label>
                <input name="LastName" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter last Name">
                
            </div>
            <div class="form-group">
                <label for="Address">Residential Address</label>
                <input name="ResidentialAddress" type="text" class="form-control" id="Address1"  placeholder="Enter Residential Address ">
                
            </div>
            <div class="form-group">
                <label for="Address">Professional Address</label>
                <input name="ProfAddress" type="text" class="form-control" id="Address2"  placeholder="Enter Professional Address">
                
            </div>
            <div class="form-group">
  
                <label for="PartnerInsitution">  Are you a student of one of our Partner Institutions (Choose from below)</label><br /> 
                <input type="checkbox" name="chk1[ ]" value="Aditya Birla world academy school">Aditya Birla world academy school<br />  
                <input type="checkbox" name="chk1[ ]" value="Hill Spring International school">Hill Spring International school<br />  
                <input type="checkbox" name="chk1[ ]" value="American School Of Bombay">American School Of Bombay<br />  
                <input type="checkbox" name="chk1[ ]" value="Cathedral and John Connon School ">Cathedral and John Connon School<br />  
                <input type="checkbox" name="chk1[ ]" value="Dhirubhai Ambani International School">Dhirubhai Ambani International School<br />  


            </div>

            
       
            <div class="form-group">
                <label for="Name">Are you an employee of one of our partner organizations?</label><br />
                
                <input type="checkbox" name="chk2[ ]" value="Morgan Stanley">Morgan Stanley<br />  
                <input type="checkbox" name="chk2[ ]" value="Deloitte India">Deloitte India<br />  
                <input type="checkbox" name="chk2[ ]" value="Others">Others<br />  
                

            </div>
            <div class="form-group">
                <label for="AcademicQualification">Academic Qualification</label>
                <input name="AcademicQualification" type="text" class="form-control" id="academicQualification" placeholder="Enter Academic Qualification">
                
            </div> 
            <div class="form-group">
                <label for="Occupation">Occupation</label>
                <input name="Occupation" type="text" class="form-control" id="Occupation"  placeholder="Enter Occupation">
                
            </div> 

            <div class="form-group">
                <label for="Nationality">Nationality</label>
                <input name="Nationality" type="text" class="form-control" id="Nationality"  placeholder="Enter Nationality">
                
            </div> 
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1"placeholder="Enter email">
                
            </div>

            <div class="form-group">
                <label for="Phone">Phone Number</label>
                <input name="Phone" type="text" class="form-control" id="Phone" placeholder="Enter Phone Number">
                
            </div> 

            <div class="form-group">
                <label for="langSpoken">Languages Spoken</label>
                <input name="langSpoken" type="text" class="form-control" id="langSpoken"placeholder="Enter language Spoken">
                
            </div> 
            <div class="form-group">
                <label for="Name">In which Toybank location would you like to volunteer?</label><br />
                
                <input type="checkbox" name="chk3[ ]" value="Outside Mumbai">Outside Mumbai<br />  
                <input type="checkbox" name="chk3[ ]" value="Navi Mumbai">Navi Mumbai<br />  
                <input type="checkbox" name="chk3[ ]" value="Central zone">Central zone<br />  
                <input type="checkbox" name="chk3[ ]" value="Western zone">Western zone<br />  
                <input type="checkbox" name="chk3[ ]" value="Harbour zone">Harbour zone<br />  
                <input type="checkbox" name="chk3[ ]" value="In - Office (Mahim)">In - Office (Mahim)<br />  
                

            </div>
            <div class="form-group">
                <label for="Name">When would you prefer to volunteer?</label><br />
                
                <input type="checkbox" name="chk4[ ]" value="Weekdays">Weekdays<br />  
                <input type="checkbox" name="chk4[ ]" value="Weekends">Weekends<br />  
                <input type="checkbox" name="chk4[ ]" value="Both">Both<br />  
               

            </div>
            <div class="form-group">
                <label for="Name">Please indicate your top 3 Volunteering preferences:</label><br />
                
                <input type="checkbox" name="chk5[ ]" value="Play sessions with Children">Play sessions with Children<br />  
                <input type="checkbox" name="chk5[ ]" value="Toy collection and Distribution">Toy collection and Distribution<br />  
                <input type="checkbox" name="chk5[ ]" value="Inventory and Gameplay">Inventory and Gameplay<br />  
                <input type="checkbox" name="chk5[ ]" value="Research and Impact Assessments">Research and Impact Assessments<br />  
                <input type="checkbox" name="chk5[ ]" value="Events and Fundraising">Events and Fundraising<br />  
                <input type="checkbox" name="chk5[ ]" value="Content and Design">Content and Design<br />  
                <input type="checkbox" name="chk5[ ]" value="Toybank Ambassador">Toybank Ambassador<br />  
                

            </div>
            <div class="form-group">
                <label for="volunteering">Other areas you feel you can help us out with</label>
                <input name="volunteering" type="text" class="form-control" id="volunteering" placeholder="Your Answer">
                
            </div> 
            <div class="form-group">
                <label for="volunteer">Please list the relevant skills you have in these areas (if any):</label><br />
                
                <input type="checkbox" name="chk6[ ]" value="Story Telling">Story Telling<br />  
                <input type="checkbox" name="chk6[ ]" value="Photography">Photography<br />  
                <input type="checkbox" name="chk6[ ]" value="Writing and editing">Writing and editing<br />  
               

            </div>

            
            


<input type="submit" name="Submit" class="btn btn-primary" value="Submit">
</form>
</div>
</div>
</div>
</body>
</html>




