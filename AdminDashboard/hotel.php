<?php
	include('../conn.php');
?>
<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "UTF-8" name = "viewport" content = "width-device=width, initial-scale=1" />
<!--		<link rel = "stylesheet" type = "text/css" href = "/vendor/bootstrap-410/css/bootstrap.min.css" />-->
		<title>Hotels</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel = "stylesheet" type = "text/css" href = "../Style/slideShow.css" />
        <link rel = "stylesheet" type = "text/css" href = "../Style/styleBody.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="vendor/datepicker/datepicker.css">
	</head>
<body >
<style>
body {margin:0;}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
background: linear-gradient(0.09turn,#EB2D2E,#1082C5,#7F257D)!important; 	
  position: fixed;
  top: 0;
  width: 100%;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
	color: white;
	text-decoration: none;
	background: linear-gradient(0.7turn,#EB2D2E,#1082C5,#7F257D)!important
}


</style>
<ul>
  <li><a  href="../index.php">Home</a></li>
  <li><a  href="hotel.php">Hotels</a></li>
  <li><a href="index.php">Bookings</a></li>
  <li style="float:right"><a href="logout.php"> Logout <i class="fas fa-sign-out-alt"></i></a></li>
</ul>
	<div class = "row" style="width:100%;margin:auto;padding:0px;height:555px">
		
		<div class = "col-md-10 well c-hotel" style="width:100%;">
			<div class="row">
                <div class="col-lg-12">
                    <h2 class = "text-primary" align="center">Hotel List</h2>
		 </div>
            </div><br>
			<div class="row">
                <div class="c-t-list-hotel">
                    <div id="userTable" style="height:420px;"></div>
                </div>
			</div>
		</div>
	</div>


<div style="left: 0;bottom: 0;position:fixed;width: 100%;background: linear-gradient(0.09turn,#EB2D2E,#1082C5,#7F257D)!important; 	color: white;text-align: center;padding:20px;0px 20px 0px">

  <p> © 2017-2019 | Khwaja Fareed University of Engineering &amp; Information Technology | Department of Computer Sciences |  kfueit.edu.pk</p>
</div>

</body>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type = "text/javascript">
	$(document).ready(function(){
		showUser();
        showOrder();
		//Add New
		$(document).on('click', '#addnew', function(){
			if ($('#adm-name-hotel').val()=="" || $('#adm-desk-hotel').val()=="" || $('#adm-dir-hotel').val()=="" || $('#city').val()=="Select City"){
				alert('Please input data first');
			}
			else{
			$nm_htl=$('#adm-name-hotel').val();
            $desk_htl=$('#adm-desk-hotel').val();
			$cname=$('#city').val();
            $dir_dir=$('#adm-dir-hotel').val();
				$.ajax({
					type: "POST",
					url: "addnew.php",
					data: {
						nama_htl: $nm_htl,
						desk_htl: $desk_htl,
						city_n: $cname,
                        dir_htl: $dir_dir,
						add_new_hotel: 1,
					},
					success: function(){
                        $("#input-form")[0].reset();
						showUser();
					}
				});
			}
		});
		//Delete
		$(document).on('click', '.delete', function(){
			$id=$(this).val();
				$.ajax({
					type: "POST",
					url: "delete.php",
					data: {
						id: $id,
						del_hotel: 1,
					},
					success: function(){
						showUser();
					}
				});
		});
		//Update
		$(document).on('click', '.updateuser', function(){
			$uid=$(this).val();
			$('#edit'+$uid).modal('hide');
			$('body').removeClass('modal-open');
			$('.modal-backdrop').remove();
			$vNamaHotel=$('#vNamaHotel'+$uid).val();
			$vDescHotel=$('#vDescHotel'+$uid).val();
            $vPhotoDir=$('#vPhotoDir'+$uid).val();		
            $vNamecity=$('#vNamecity'+$uid).val();
				$.ajax({
					type: "POST",
					url: "update.php",
					data: {
						id: $uid,
						nama: $vNamaHotel,
						city: $vNamecity,
						desc: $vDescHotel,
                        dir: $vPhotoDir,
                        edit_hotel: 1,
					},
					success: function(){
						showUser();
					}
				});
		});



	});

	//Showing our Table
	function showUser(){
		$.ajax({
			url: 'show_user.php',
			type: 'POST',
			async: false,
			data:{
				show: 1
			},
			success: function(response){
				$('#userTable').html(response);
			}
		});
	}

    //Showing our Table
    function showOrder(){
        $.ajax({
            url: 'show_user.php',
            type: 'POST',
            async: false,
            data:{
                show_order: 1
            },
            success: function(response){
                $('#orderHotel').html(response);
            }
        });
    }

</script>
<script>
var myArray = new Array("Abbottabad",
"Adezai",
"Ali Bandar",
"Amir Chah",
"Attock",
"Ayubia",
"Bahawalpur",
"Bahawalnagar",
"Burewala",
"Bhakkar",
"Chiniot",
"Chakwal",
"Chitral",
"Dadu",
"Dera Ghazi Khan",
"Dera Ismail Khan",
"Daska",
"Dera Bugti",
"Digri",
"Faisalabad",
"Ghotki",
"Gwadar",
"Gujranwala",
"Gujrat",
"Hyderabad",
"Haripur",
"Hafizabad",
"Hasilpur",
"Haveli Lakha",
"Islamabad",
"Jacobabad",
"Jamshoro",
"Jhang",
"Jhelum",
"Karachi",
"Kamokey",
"Kashmor",
"Kasur",
"Khairpur",
"Khanpur",
"Khanewal",
"Kohat",
"Korangi",
"Lahore",
"Lasbela",
"Layyah",
"Liari",
"Lodhran",
"Multan",
"Mandi Bahauddin",
"Mirpur",
"Mianwali",
"Mirpur Khas",
"Muzaffar Garh",
"Muzaffarabad",
"Nawabshah",
"Nazimabad",
"Nowshera",
"Okara",
"Peshawar",
"Quetta",
"Rawalpindi",
"Rahim Yar Khan",
"Rajan Pur",
"Ranipur",
"Rawalakot",
"Rohri",
"Sialkot",
"Sadiqabad",
"Sahiwal",
"Sargodha",
"Sheikhupura",
"Shikarpur",
"Sui",
"Sukkur",
"Swabi",
"Swat",
"Tando Adam",
"Thatta",
"Toba Tek Singh",
"Umarao",
"Umarkot",
"Vehari",
"Wadh",
"Wah Cantt",
"Wazirabad",
"Yakmach",
"Zhob");

// Get dropdown element from DOM
var dropdown = document.getElementById("city");

// Loop through the array
for (var i = 0; i < myArray.length; ++i) {
    // Append the element to the end of Array list
    dropdown[dropdown.length] = new Option(myArray[i], myArray[i]);
}
</script>

</html>