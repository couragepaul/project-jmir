
<!DOCTYPE html>
<html>
<head>
	<title>Form Page</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="beautifier.css">  	
  	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
  	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-messages.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body ng-app="myApp" ng-controller="myCtrl">
<div class="heading">
	<p><a href="index.php"><span class="add_info">ADD INFORMATION</span></a> | <a href="listing.php"><span class="list_info">LISTING PAGE</span></a></p>
</div>
<br>
<br>
<br>
<div class="container">
	
	<form name="myForm" role="form" action="confirmation.php" class="myForm" method="post" required>

	<div class="form-group required" ng-class="{ 'has-error' : myForm.name.$invalid }"> <!-- Full Name -->
		<label for="full_name_id" class="control-label"><span>NAME</span></label>
		<input type="text" class="form-control" id="full_name_id" name="name" placeholder="Full Name" ng-model="fullName" ng-minlength="2" ng-required="true" >
		<div ng-messages= "myForm.name.$error">
			<div ng-message="minlength">Must be over 2 characters</div>
		</div>
	</div>	

	<div class="form-group required" ng-class="{ 'has-error' : myForm.name.$invalid }" > <!-- Province -->
		<label for="province_id" class="control-label"><span>PROVINCE</span></label>
		<div>
			<select class="form-control" id="state_id" name="province">
				<option ng-repeat="x in provinces" name="province" ng-model="province" ng-required="true"><span>{{x}}</span></option>
			</select>
		</div>
							
	</div>	
	<script>
		var app = angular.module('myApp',['ngMessages']);
		app.controller('myCtrl', function($scope) {
			$scope.provinces = [ " Ontario " , "Quebec" , "Nova Scotia" , "New Brunswick" , "Manitoba", "British Columbia" , "Prince Edward Island" , "Sasketchewan" , "Alberta" , "Newfoundland" , "Northwest Territories"  , "Yukon" , "Nunavut"];
		});
	</script>				


	<div class="form-group required" ng-class="{ 'has-error' : myForm.name.$invalid }">
		<div class="row">
		  <div class="col-sm-6">
			  <label for="postal_code" class="control-label"><span>POSTAL CODE</span></label>
			  <input type="text" class="form-control" id="postalCode" name="postalCode" placeholder="Postal Code" ng-model="postalCode" ng-pattern="/^(\d{5}(-\d{4})?|[A-Z]\d[A-Z] *\d[A-Z]\d)$/" ng-minlength="3" ng-required="true" >

			  <div ng-messages= "myForm.postalCode.$error">
			  	<!-- <div ng-message="required">This field is required</div> -->
			  	<div ng-message="pattern">Must be a valid postal code</div>
			  	<div ng-message="minlength">Must be over 3 characters</div>
			  </div>
		  </div>
		  <div class="col-sm-6">
			  <label for="tel_id" class="control-label"><span>TELEPHONE</span></label>
			  <input type="tel" class="form-control" id="tel_id" name="phoneNum" placeholder="Phone Number" ng-model="phoneNumber" ng-pattern="/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[,0-9]{3}[-\s\.]?[,0-9]{4,6}$/" ng-minlength="10" ng-required="true">

			  <div ng-messages="myForm.phoneNum.$error">
			  	<div ng-message="pattern">Must be a valid phone number</div>
			  	<div ng-message="minlength">Must be over 10 digits</div>
			  </div>
		  </div>
		</div>
    </div>	
	
	<div class="form-group required" ng-class="{ 'has-error' : myForm.name.$invalid }"> <!-- Salary -->
		<label for="salary_id" class="control-label"><span>SALARY</span></label>
		<input type="text" class="form-control" id="zip_id" name="salary" placeholder="Enter your desired salary." ng-model="salary" ng-pattern="/^[0-9]+\.?[0-9]*$/" ng-required="true">
		<div ng-messages="myForm.salary.$error">
			<div ng-message="pattern">Must be a valid number</div>
		</div>
	</div>

	<div class="form-group"> <!-- Submit Button -->
		<div class="col-sm-4 col-sm-offset-8">
            <button type="submit" class="btn btn-primary btn-block">SAVE</button>
        </div>
	</div>     
	
</form>	
</div>

</body>
</html>