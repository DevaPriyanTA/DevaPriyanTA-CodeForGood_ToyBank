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
Upcoming Events
</div>
<div class="card-body">
<form action="store_event_details.php" method="post">
            <div class="form-group">
                <label for="Event Name">Event Name</label>
                <input name="EventName" type="text" class="form-control" placeholder="Enter event Name">
                
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input name="Description1" type="text" class="form-control" placeholder="Enter description">
                
            </div>
            <div class="form-group">
                <label for="eventdate">Event Date</label>
                <input type="date" id="eventdate" name="eventdate">
            </div>
            <div class="form-group">
                <label for="Name">Event Location</label><br />
                
                <input type="checkbox" name="chk1[ ]" value="Outside Mumbai"> Outside Mumbai<br />  
                <input type="checkbox" name="chk1[ ]" value="Navi Mumbai"> Navi Mumbai<br />  
                <input type="checkbox" name="chk1[ ]" value="Central zone"> Central zone<br />  
                <input type="checkbox" name="chk1[ ]" value="Western zone"> Western zone<br />  
                <input type="checkbox" name="chk1[ ]" value="Harbour zone"> Harbour zone<br />  
                <input type="checkbox" name="chk1[ ]" value="In - Office (Mahim)"> In - Office (Mahim)<br />  
                

            </div>
            <div class="form-group">
                <label for="Name">Event day</label><br />
                
                <input type="checkbox" name="chk2[ ]" value="Weekday"> Weekday<br />  
                <input type="checkbox" name="chk2[ ]" value="Weekend"> Weekend<br />  
                  
               

            </div>
            <div class="form-group">
                <label for="Name">Required Skills (top 3)</label><br />
                
                <input type="checkbox" name="chk3[ ]" value="Play sessions with Children"> Play sessions with Children<br />  
                <input type="checkbox" name="chk3[ ]" value="Toy collection and Distribution"> Toy collection and Distribution<br />  
                <input type="checkbox" name="chk3[ ]" value="Inventory and Gameplay"> Inventory and Gameplay<br />  
                <input type="checkbox" name="chk3[ ]" value="Research and Impact Assessments"> Research and Impact Assessments<br />  
                <input type="checkbox" name="chk3[ ]" value="Events and Fundraising"> Events and Fundraising<br />  
                <input type="checkbox" name="chk3[ ]" value="Content and Design"> Content and Design<br />  
                <input type="checkbox" name="chk3[ ]" value="Toybank Ambassador"> Toybank Ambassador<br />  
                

            </div>
            <input type="submit" name="Submit" class="btn btn-primary" value="Submit">
</form>
</div>
</div>
</div>
</body>
</html>

