<!DOCTYPE html>
<html lang="en">
<head>
  <title>Offering Ride</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style type="text/css">
        .form-horizontal{
            width:70%;
        }
        #map{

        }
  </style>
</head>
<body>

<div class="container">
  <h2>Offered Ride</h2>
  <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="Source">Enter Source</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="src" name="Source">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="Destination">Enter Destination</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="dest" name="Destination">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="Round_trip">Is it a round trip?</label>
        </div>
      </div>
    </div>
    <div class="form-group">
            <label class="control-label col-sm-2" for="Date_Time">Enter Date and Time</label>
            <div class="col-sm-10">          
              <input type="datetime-local" class="form-control" id="dest" name="Date_Time">
            </div>
    </div>
    <div class="form-group">
            <label class="control-label col-sm-2" for="Vacant_seats">Vacant Seats</label>
            <div class="col-sm-10">          
              <input type="number" max="6" min="1" class="form-control" id="seats" name="Vacant_seats">
            </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>
<div class="container" id="map">
    
</div>
</body>
</html>
