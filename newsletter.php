
<body>
<div class="container">
<!-- newsletter form This is the form that the message to be sent is typed into-->
	<form class="form-horizontal" action="send.php" method="POST">
	<fieldset>
	<!-- Form Name -->
	<legend>Newsletter</legend>
	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-2 control-label" for="/header">Header:</label>  
	  <div class="col-md-6">
	  <input id="header" name="header" type="text" placeholder="Enter header" 
	  class="form-control input-md" required="Please fill out all fields"> 
	  </div>
	</div>
	<!-- Textarea -->
	<div class="form-group">
	  <label class="col-md-2 control-label" for="letter">Message</label>
	  <div class="col-md-6">                     
		<textarea placeholder="Enter Message" style="min-height:400px;"  required="Please fill out all fields"
		class="form-control" name="letter"></textarea>
	  </div>
	</div>
	<!-- Button -->
	<div class="form-group">
	  <label class="col-md-2 control-label" for="submit"></label>
	  <div class="col-md-6">
		<button id="submit" name="submit" class="btn btn-info">Send</button>
	  </div>
	</div>

	</fieldset>
	</form>
</div>
</body>
