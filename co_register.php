<?php 
session_start();

	include('app/database/connect.php'); 	
	include("functions.php");
    
    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//data was posted
		$org_name = $_POST['org_name'];
		$org_password = $_POST['org_password'];
		$org_email = $_POST['org_email'];
                $org_category = $_POST['org_category'];
                $org_weblink = $_POST['org_weblink'];
                $org_fblink = $_POST['org_fblink'];
                $org_xtralink = $_POST['org_xtralink'];
                $org_address = $_POST['org_address'];
                $org_state = $_POST['org_state'];
                $org_city = $_POST['org_city'];
                $org_zipcode = $_POST['org_zipcode'];
                $org_contact = $_POST['org_contact'];

        if(!empty($org_name) && !is_numeric($org_name) &&!empty($org_password) && !empty($org_email) && !empty($org_category) && 
        !empty($org_weblink) && !empty($org_fblink) && !empty($org_xtralink) && !empty($org_address) && !empty($org_state) &&
        !empty($org_city) && !empty($org_zipcode) && !empty($org_contact)) {
            
            //save to database
			$user_name = random_num(20);
            $query = "INSERT INTO organization (org_name,org_password,org_email,org_category,org_weblink,org_fblink,org_xtralink,
            org_address,org_state, org_city,org_zipcode,org_contact) VALUES ('$user_id','$org_name','$org_password','$org_email','$org_category','$org_weblink','$org_fblink','$org_xtralink','$org_address','$org_state','$org_city',' $org_zipcode','$org_contact')";

			mysqli_query($conn, $query);
			header("location: index.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!--Charity Organization Register-->
<!DOCTYPE html>
<html>
<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <title> Give & Sm:)e | SignUp </title>

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="css/query.css">
   <link rel="stylesheet" href="css/style.css">
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
        <!--Nav Bar-->
    	<?php include("app/includes/header.php"); ?>
 <!--End of NavBar-->
<div class="container">
    <form method="POST" action=".php">
        <legend class="title text-center">Charity Organization Sign Up </legend>
        <fieldset class="form-box card card-box">
            <div class="card-body">
            <label for="coUsername"> Username </label>
            <input  class="form-control" 
                    class="form-text"
                    type="text" 
                    name="org_name" 
                    id="org_name"
                    required 
                    maxlength="50" 
                    placeholder="(Max 20 characters)">
            <br>
            <label for="org_password" class="form-label">Password</label>
            <input  class="form-control"
                    type="password" 
                    id="inputPassword5" 
                    aria-describedby="hint" 
                    placeholder="********"/>
            <small id="hint" class="form-text">
              *Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
            </small>
            <br>
            <label for="org_email"> Email </label>
            <input  class="form-control" 
                    class="form-text"
                    type="email" 
                    name="org_email" 
                    id="org_email"
                    required 
                    placeholder="Enter your email">
            <br>
            <label for="org_contact"> Phone No. </label>
            <input  class="form-control" 
                    class="form-text"
                    type="text" 
                    name="org_contact"
                    id="org_contact" 
                    required 
                    maxlength="11" 
                    placeholder="Enter your phone no.">
            <br><hr>
            <label for="org_weblink"> Website Link </label>
            <input  class="form-control" 
                    class="form-text"
                    type="url" 
                    name="org_weblink"
                    id="org_weblink" 
                    placeholder="If have any (optional)">
            <br>
            <label for="org_xtralink"> Extra Social Media Link  </label>
            <p>
                <select name="org_xtralink" id="org_xtralink" class="btn btn-secondary btn-sm dropdown-toggle">
                <option class="dropdown-item"> Facebook </option>
                <option class="dropdown-item"> Instagram </option>
                <option class="dropdown-item"> LinkedIn </option>
                <option class="dropdown-item"> Twitter </option>   
            </p><br>
            <input  class="form-control" 
                    class="form-text"
                    type="url" 
                    name="coXtra" 
                    placeholder="If have any (optional)">
            <br>
            <label for="coDescript"> Describe </label>
            <textarea   class="form-control" 
                        class="form-text"
                        name="coDes" 
                        placeholder="Describe your organization">
            </textarea>
            <br><hr>
            <label for="org_address"> Address</label>
            <textarea  class="form-control" 
                    class="form-text" 
                    type="text"
                    name="org_address"
                    id="org_address" 
                    placeholder="Enter your full address here">
            </textarea><br>
            <label for="org_city"> City/Town </label>
            <input  class="form-control" 
                    class="form-text"
                    type="text"
                    required 
                    name="org_city"
                    id="org_city"/>
            <br>
            <label for="org_state"> State </label>
            <select class="form-control" 
                    class="form-text"
                    type="text"
                    required 
                    name="org_state"
                    id="org_state" >                    
                <option> Perlis </option>
                <option> Kedah </option>
                <option> Penang </option>
                <option> Perak </option>
                <option> Selangor </option>
                <option> Negeri Sembilan </option>
                <option> Melaka </option>
                <option> Johor </option>
                <option> Pahang </option>
                <option> Terengganu </option>
                <option> Kelantan </option>
                <option> Sabah </option>
                <option> Sarawak </option>
            </select></p>
            <br>
            <label for="org_zipcode"> Zip/Postal Code </label>
            <input  class="form-control" 
                    class="form-text"
                    type="text"
                    required 
                    name="org_zipcode"
                    id="org_zipcode"
                    maxlength="5"/>
            <br><hr>
         
            <button type="submit" class="btn btn-primary" value="Signup"> SignUp </button>
            </div>
        </fieldset>
    </form>
</div>
</body>
</html>







<!--
<script type="text/javascript">
    var city_state = Object();
    city_state['Perlis'] =
    city_state['Kedah'] = '|Alor Setar||Ayer Hitam|Baling|Bandar Baharu|Bedong|Bukit Kayu Hitam|Changloon|Gurun|Jeniang|Jitra|Karangan|Kepala Batas|Kodiang|Kota Kuala Muda|Kota Sarang Semut|Kuala Kedah|Kuala Ketil|Kuala Nerang|Kuala Pegang|Kulim|Kupang|Langgar|Langkawi|Lunas|Lunas|Merbok|Padang Serai|Pendang|Pokok Sena|Serdang|Sik|Simpang Empat|Sungai Petani|Yan';
    city_state['Penang'] =
    city_state['Perak'] = '|Ayer Tawar||Bagan Datoh|Bagan Serai|Bandar Seri Iskandar|Batu Gajah|Batu Kurau|Behrang Stesen|Bidor|Bota|Bruas|Changkat Jering|Changkat Keruing|Chemor|Chenderiang|Chenderong Balai|Chikus|Enggor|Gerik|Gopeng|Hutan Melintang|Intan|Ipoh|Jeram|Kampar|Kampung Gajah|Kampung Kepayang|Kamunting|Kuala Kangsar|Kuala Kurau|Kuala Sepetang|Lambor Kanan|Langkap|Lenggong|Lumut|Malim Nawar|Manong|Matang|Padang Rengas|Pangkor|Pantai Remis|Parit|Parit Buntar|Pengkalan Hulu|Pusing|Rantau Panjang|Sauk|Selama|Selekoh|Seri Manjong|Seri Manjung|Simpang|Simpang Ampat Semanggol|Sitiawan|Slim River|Sungai Siput|Sungai Sumun|Sungkai|Taiping|Tanjong Malim|Tanjong Piandang|Tanjong Rambutan|Tanjong Tualang|Tapah|Tapah Road|Teluk Intan|Temoh|TLDM Lumut|Trolak|Trong|Tronoh|Ulu Bernam|Ulu Kinta';
    city_state['Selangor'] =
    city_state['Negeri Sembilan'] =
    city_state['Melaka'] =
    city_state['Johor'] =
    city_state['Pahang'] =
    city_state['Terengganu'] =
    city_state['Kelantan'] =
    city_state['Sabah'] =
    city_state['Sarawak'] =
    city_state['Kuala Lumpur'] =
    city_state['Putrajaya'] =
    city_state['Labuan'] =

    
    function print_city_state(oCountrySel, oCity_StateSel);

</script>-->
