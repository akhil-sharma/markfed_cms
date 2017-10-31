

<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
  <link rel="stylesheet" href="css/style.css">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


	<title>Admin Panel</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script src="http://bio.mq.edu.au/Tools/jquery/plugins/riklomas-quicksearch/jquery.quicksearch.js"></script>

  <script>
   var TRange=null;

function findString () {
  var str=document.getElementById('searcher').value;
 if (parseInt(navigator.appVersion)<4) return;
 var strFound;
 if (window.find) {

  // CODE FOR BROWSERS THAT SUPPORT window.find

  strFound=self.find(str);
  if (!strFound) {
   strFound=self.find(str,0,1);
   while (self.find(str,0,1)) continue;
  }
 }
 else if (navigator.appName.indexOf("Microsoft")!=-1) {

  // EXPLORER-SPECIFIC CODE

  if (TRange!=null) {
   TRange.collapse(false);
   strFound=TRange.findText(str);
   if (strFound) TRange.select();
  }
  if (TRange==null || strFound==0) {
   TRange=self.document.body.createTextRange();
   strFound=TRange.findText(str);
   if (strFound) TRange.select();
  }
 }
 else if (navigator.appName=="Opera") {
  alert ("Opera browsers not supported, sorry...")
  return;
 }
 if (!strFound) alert ("String '"+str+"' not found!")
 return;
}
  </script>
  

	
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
</head>
<body>
<div class="container">
<form style="margin-top: 7%;" action="sendmail.php" method="POST">
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address (To):</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
  </div>


  <div class="form-group">
    <label for="exampleFormControlInput1">Cc:</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="cc">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Subject:</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Email Subject" name="subject">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Body:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="body" placeholder="Email Body"></textarea>
  </div>
<hr>

<!-- 

<div class="form-group">
    <label for="exampleFormControlInput1">Attachment:</label>
    <input type="file" class="form-control" id="exampleFormControlInput1" name="attachment">
  </div> -->


  <button type="submit" class="btn btn-default" id="myButton">SEND</button>
</form>
</div>
</body>
</html>