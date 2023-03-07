<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Application in PHP using AJAX - Coding Birds Online</title>
    <link rel="shortcut icon" href="https://demo.codingbirdsonline.com/website/img/coding-birds-online/coding-birds-online-favicon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="custom.css">
    
	<!--JQuery Library-->
	<script src=
        "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
            </script>

            <!--Font Awesome for the icons-->
            <link rel="stylesheet" href=
        "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <script>
		$(function () {
			$("li").click(function (e) {
				e.preventDefault();
				$("li").removeClass("active");
				$(this).addClass("active");
			});
		});

        function home() {
            document.getElementById("dashboard").style.display  = "block";
            document.getElementById("kpi").style.display  = "none";
            document.getElementById("csm").style.display  = "none";
            document.getElementById("pds").style.display  = "none";
            document.getElementById("pow").style.display  = "none";
            document.getElementById("agents").style.display  = "none";
            document.getElementById("digital").style.display  = "none";
        }
        function kpi() {
            document.getElementById("home").style.display  = "none";
            document.getElementById("kpi").style.display  = "block";
            document.getElementById("csm").style.display  = "none";
            document.getElementById("pds").style.display  = "none";
            document.getElementById("pow").style.display  = "none";
            document.getElementById("agents").style.display  = "none";
            document.getElementById("digital").style.display  = "none";
        }
        function csm() {
            document.getElementById("home").style.display  = "none";
            document.getElementById("kpi").style.display  = "none";
            document.getElementById("csm").style.display  = "block";
            document.getElementById("pds").style.display  = "none";
            document.getElementById("pow").style.display  = "none";
            document.getElementById("agents").style.display  = "none";
            document.getElementById("digital").style.display  = "none";
        }
        function pds() {
            document.getElementById("home").style.display  = "none";
            document.getElementById("kpi").style.display  = "none";
            document.getElementById("csm").style.display  = "none";
            document.getElementById("pds").style.display  = "block";
            document.getElementById("pow").style.display  = "none";
            document.getElementById("agents").style.display  = "none";
            document.getElementById("digital").style.display  = "none";
        }
        function pow() {
            document.getElementById("home").style.display  = "none";
            document.getElementById("kpi").style.display  = "none";
            document.getElementById("csm").style.display  = "none";
            document.getElementById("pds").style.display  = "none";
            document.getElementById("pow").style.display  = "block";
            document.getElementById("agents").style.display  = "none";
            document.getElementById("digital").style.display  = "none";
        }
        function agents() {
            document.getElementById("home").style.display  = "none";
            document.getElementById("kpi").style.display  = "none";
            document.getElementById("csm").style.display  = "none";
            document.getElementById("pds").style.display  = "none";
            document.getElementById("pow").style.display  = "none";
            document.getElementById("agents").style.display  = "block";
            document.getElementById("digital").style.display  = "none";
        }
        function marketing() {
            document.getElementById("home").style.display  = "none";
            document.getElementById("kpi").style.display  = "none";
            document.getElementById("csm").style.display  = "none";
            document.getElementById("pds").style.display  = "none";
            document.getElementById("pow").style.display  = "none";
            document.getElementById("agents").style.display  = "none";
            document.getElementById("digital").style.display  = "block";
        }
	</script>
</head>
<body style = "background-color: #cfd8dc !important">
<div class="navbar" style="border-radius: 0px !important; border-bottom: solid #fff 2px !important; font-size: 16sp !important">
		<ul>
        <li class="list-item active">
				<b class="left-curve"></b>
				<b class="right-curve"></b>
				<a onclick="home()">
					<i class="fa fa-home"></i>
					CETS Master
				</a>
			</li>
			
			<li class="list-item">
				<b class="left-curve"></b>
				<b class="right-curve"></b>
				<a onclick="kpi()">
					<i class="fa fa-book"></i>
					KPI Form
				</a>
			</li>
			<li class="list-item">
				<b class="left-curve"></b>
				<b class="right-curve"></b>
				<a onclick="csm()">
					<i class="fa fa-book"></i>
					CSM
				</a>
			</li>
			<li class="list-item">
				<b class="left-curve"></b>
				<b class="right-curve"></b>
				<a onclick="pds()">
					<i class="fa fa-book"></i>
					PDS
				</a>
			</li>
            <li class="list-item">
				<b class="left-curve"></b>
				<b class="right-curve"></b>
				<a onclick="pow()">
					<i class="fa fa-book"></i>
					PoW
				</a>
			</li>
            <li class="list-item">
				<b class="left-curve"></b>
				<b class="right-curve"></b>
				<a onclick="agents()">
					<i class="fa fa-book"></i>
					Agents & Business Affiliates
				</a>
			</li>
            <li class="list-item">
				<b class="left-curve"></b>
				<b class="right-curve"></b>
				<a onclick="digital()">
					<i class="fa fa-book"></i>
					Digital Marketing
				</a>
			</li>
           
		</ul>
	</div>

<!-- Home Dasboard  -->
<div id = "dashboard">
        <div class="container" style="padding-top: 70px !important">
        
            <h4>Dashboard</h4>
            <a href="javaScript:void(0);" data-toggle="modal" data-target="#myModal" class="btn btn-primary pull-right bottom-gap">Add New <i class="fa fa-plus" aria-hidden="true"></i></a>
            <table class="table table-bordered" style="border: 2px solid #9EB6CE; background-color: #fff" >
                <thead id="thead" >
                    <tr style=" color: #000; background-color: #E4ECF7;border: 1px solid #9EB6CE;border-collapse: collapse !important">
                        <th  style = " color: #000; border: 1px solid #9EB6CE; border-collapse: collapse !important" >Sr.No</th>
                        <th style = " color: #000; border: 1px solid #9EB6CE; border-collapse: collapse !important" >Name</th>
                        <th style = " color: #000; border: 1px solid #9EB6CE; border-collapse: collapse !important" >Email</th>
                        <th style = " color: #000; border: 1px solid #9EB6CE; border-collapse: collapse !important" >Contact</th>
                        <th style = " color: #000; border: 1px solid #9EB6CE; border-collapse: collapse !important" >Action</th>
                    </tr>
                </thead>
                <tbody id="crudData" ></tbody>
            </table>
        
        </div>
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">×</button>
                        <h4 class="modal-title">CRUD Application Form</h4>
                    </div>
                    <div class="modal-body">
                        <form id="crudAppForm">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Name <span class="field-required">*</span></label>
                                    <input type="text" name="name" id="name" placeholder="Name" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="email">Email <span class="field-required">*</span></label>
                                    <input type="text" name="email" id="email" placeholder="Email" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="contact">Contact <span class="field-required">*</span></label>
                                    <input type="text" name="contact" id="contact" placeholder="Contact" class="form-control">
                                </div>
                            </div>
                        </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="hidden" name="editId" id="editId" value="" />
                                    <button type="submit" name="submitBtn" id="submitBtn" class="btn btn-primary"><i class="fa fa-spinner fa-spin" id="spinnerLoader" ></i> <span id="buttonLabel">Save</span> </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
<div>

<!-- KPI Form  -->
<div id = "kpi">
        <div class="container" style="padding-top: 70px !important">
        
        
            <h4>Date:</h4>
            <a href="javaScript:void(0);" data-toggle="modal" data-target="#myModal" class="btn btn-primary pull-right bottom-gap">Add New <i class="fa fa-plus" aria-hidden="true"></i></a>
            <table class="table table-bordered" style="border: 2px solid #9EB6CE; background-color: #fff" >
                <thead id="thead" >
                    <tr style=" color: #000; background-color: #E4ECF7;border: 1px solid #9EB6CE;border-collapse: collapse !important">
                        <th  style = " color: #000; border: 1px solid #9EB6CE; border-collapse: collapse !important" >Sr.No</th>
                        <th style = " color: #000; border: 1px solid #9EB6CE; border-collapse: collapse !important" >Name</th>
                        <th style = " color: #000; border: 1px solid #9EB6CE; border-collapse: collapse !important" >Email</th>
                        <th style = " color: #000; border: 1px solid #9EB6CE; border-collapse: collapse !important" >Contact</th>
                        <th style = " color: #000; border: 1px solid #9EB6CE; border-collapse: collapse !important" >Action</th>
                    </tr>
                </thead>
                <tbody id="crudData" ></tbody>
            </table>
        
        </div> 
<div>
    <!-- CSM  -->
<div id = "csm">
        <div class="container" style="padding-top: 70px !important">
        
        
            <h4>Date:</h4>
            <a href="javaScript:void(0);" data-toggle="modal" data-target="#myModal" class="btn btn-primary pull-right bottom-gap">Add New <i class="fa fa-plus" aria-hidden="true"></i></a>
            <table class="table table-bordered" style="border: 2px solid #9EB6CE; background-color: #fff" >
                <thead id="thead" >
                    <tr style=" color: #000; background-color: #E4ECF7;border: 1px solid #9EB6CE;border-collapse: collapse !important">
                        <th  style = " color: #000; border: 1px solid #9EB6CE; border-collapse: collapse !important" >Sr.No</th>
                        <th style = " color: #000; border: 1px solid #9EB6CE; border-collapse: collapse !important" >Name</th>
                        <th style = " color: #000; border: 1px solid #9EB6CE; border-collapse: collapse !important" >Email</th>
                        <th style = " color: #000; border: 1px solid #9EB6CE; border-collapse: collapse !important" >Contact</th>
                        <th style = " color: #000; border: 1px solid #9EB6CE; border-collapse: collapse !important" >Action</th>
                    </tr>
                </thead>
                <tbody id="crudData" ></tbody>
            </table>
        
        </div> 
<div>
    <!-- PDS  -->
<div id = "pds">
        <div class="container" style="padding-top: 70px !important">
        
        
            <h4>Date:</h4>
            <a href="javaScript:void(0);" data-toggle="modal" data-target="#myModal" class="btn btn-primary pull-right bottom-gap">Add New <i class="fa fa-plus" aria-hidden="true"></i></a>
            <table class="table table-bordered" style="border: 2px solid #9EB6CE; background-color: #fff" >
                <thead id="thead" >
                    <tr style=" color: #000; background-color: #E4ECF7;border: 1px solid #9EB6CE;border-collapse: collapse !important">
                        <th  style = " color: #000; border: 1px solid #9EB6CE; border-collapse: collapse !important" >Sr.No</th>
                        <th style = " color: #000; border: 1px solid #9EB6CE; border-collapse: collapse !important" >Name</th>
                        <th style = " color: #000; border: 1px solid #9EB6CE; border-collapse: collapse !important" >Email</th>
                        <th style = " color: #000; border: 1px solid #9EB6CE; border-collapse: collapse !important" >Contact</th>
                        <th style = " color: #000; border: 1px solid #9EB6CE; border-collapse: collapse !important" >Action</th>
                    </tr>
                </thead>
                <tbody id="crudData" ></tbody>
            </table>
        
        </div> 
<div>
    <!-- Pow -->
<div id = "pow">
        <div class="container" style="padding-top: 70px !important">
        
        
            <h4>Date:</h4>
            <a href="javaScript:void(0);" data-toggle="modal" data-target="#myModal" class="btn btn-primary pull-right bottom-gap">Add New <i class="fa fa-plus" aria-hidden="true"></i></a>
            <table class="table table-bordered" style="border: 2px solid #9EB6CE; background-color: #fff" >
                <thead id="thead" >
                    <tr style=" color: #000; background-color: #E4ECF7;border: 1px solid #9EB6CE;border-collapse: collapse !important">
                        <th  style = " color: #000; border: 1px solid #9EB6CE; border-collapse: collapse !important" >Sr.No</th>
                        <th style = " color: #000; border: 1px solid #9EB6CE; border-collapse: collapse !important" >Name</th>
                        <th style = " color: #000; border: 1px solid #9EB6CE; border-collapse: collapse !important" >Email</th>
                        <th style = " color: #000; border: 1px solid #9EB6CE; border-collapse: collapse !important" >Contact</th>
                        <th style = " color: #000; border: 1px solid #9EB6CE; border-collapse: collapse !important" >Action</th>
                    </tr>
                </thead>
                <tbody id="crudData" ></tbody>
            </table>
        
        </div> 
<div>
    <!-- Agents & Business Affiliates  -->
<div id = "agents">
        <div class="container" style="padding-top: 70px !important">
        
        
            <h4>Date:</h4>
            <a href="javaScript:void(0);" data-toggle="modal" data-target="#myModal" class="btn btn-primary pull-right bottom-gap">Add New <i class="fa fa-plus" aria-hidden="true"></i></a>
            <table class="table table-bordered" style="border: 2px solid #9EB6CE; background-color: #fff" >
                <thead id="thead" >
                    <tr style=" color: #000; background-color: #E4ECF7;border: 1px solid #9EB6CE;border-collapse: collapse !important">
                        <th  style = " color: #000; border: 1px solid #9EB6CE; border-collapse: collapse !important" >Sr.No</th>
                        <th style = " color: #000; border: 1px solid #9EB6CE; border-collapse: collapse !important" >Name</th>
                        <th style = " color: #000; border: 1px solid #9EB6CE; border-collapse: collapse !important" >Email</th>
                        <th style = " color: #000; border: 1px solid #9EB6CE; border-collapse: collapse !important" >Contact</th>
                        <th style = " color: #000; border: 1px solid #9EB6CE; border-collapse: collapse !important" >Action</th>
                    </tr>
                </thead>
                <tbody id="crudData" ></tbody>
            </table>
        
        </div> 
<div>
<!-- Digital Marketing -->
<div id = "digital">
        <div class="container" style="padding-top: 70px !important">
        
        
            <h4>Date:</h4>
            <a href="javaScript:void(0);" data-toggle="modal" data-target="#myModal" class="btn btn-primary pull-right bottom-gap">Add New <i class="fa fa-plus" aria-hidden="true"></i></a>
            <table class="table table-bordered" style="border: 2px solid #9EB6CE; background-color: #fff" >
                <thead id="thead" >
                    <tr style=" color: #000; background-color: #E4ECF7;border: 1px solid #9EB6CE;border-collapse: collapse !important">
                        <th  style = " color: #000; border: 1px solid #9EB6CE; border-collapse: collapse !important" >Sr.No</th>
                        <th style = " color: #000; border: 1px solid #9EB6CE; border-collapse: collapse !important" >Name</th>
                        <th style = " color: #000; border: 1px solid #9EB6CE; border-collapse: collapse !important" >Email</th>
                        <th style = " color: #000; border: 1px solid #9EB6CE; border-collapse: collapse !important" >Contact</th>
                        <th style = " color: #000; border: 1px solid #9EB6CE; border-collapse: collapse !important" >Action</th>
                    </tr>
                </thead>
                <tbody id="crudData" ></tbody>
            </table>
        
        </div> 
<div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="crud-app.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>