<?php
require_once("connection.php");

function donor()
{

    global $conn;
    if (!isset($_GET['donor'])) {

        $get_don = "select * from signup";
        $list_don = mysqli_query($conn, $get_don);
        while ($list = mysqli_fetch_array($list_don)) {
            $don_id = $list['id'];
            $don_name = $list['name'];
            echo "<li class='list-group-item'><a href='donor.php?donor=$don_id'>$don_name</a></li>";

        }
    }


}


function detailsdonor()
{


    global $conn;
    if (isset($_GET['donor'])) {
        $d_id = $_GET['donor'];
        $det_don = "select * from signup where id='$d_id'";
        $d_don = mysqli_query($conn, $det_don);
        while ($li = mysqli_fetch_array($d_don)) {

            $d_name = $li['name'];
            $d_email = $li['email'];
            $d_city = $li['city'];
            $d_bg = $li['blood_group'];

            echo "<li class='list-group-item text-center'>$d_name</li>
							 <li class='list-group-item text-center'>$d_email</li>
							 <li class='list-group-item text-center'>$d_city</li>
							 <li class='list-group-item text-center'>$d_bg</li>
							 
							 ";

        }
    }


}

?>
    //for blood sell table
<?php
require_once("connection.php");

function blood()
{

    global $conn;
    if (!isset($_GET['blood'])) {

        $bl = "select * from blood_sell";
        $list_bl = mysqli_query($conn, $bl);
        while ($list = mysqli_fetch_array($list_bl)) {
            $blood_id = $list['id'];
            $c_name = $list['name'];

            $c_bg = $list['bg'];
            $c_unit = $list['no_u'];
            $con = $list['con'];
            echo "
							 <tr>
							 <td>$c_name</td>
							 <td>$c_bg</td>
							 <td>$c_unit</td>
							 <td>$con</td>
						      </tr>";
        }
    }


}


?>

<?php
require_once("connection.php");

function bloodstock()
{

    global $conn;
    if (!isset($_GET['bloods'])) {

        $bl = "select * from blood_stock";
        $list_bl = mysqli_query($conn, $bl);
        while ($list = mysqli_fetch_array($list_bl)) {
            $blood_id = $list['id'];
            $c_name = $list['name'];

            $c_bg = $list['bg'];
            $c_unit = $list['no_u'];
            $con = $list['con'];
            echo "
							 <tr>
							 <td>$c_name</td>
							 <td>$c_bg</td>
							 <td>$c_unit</td>
							 <td>$con</td>
						      </tr>";
        }
    }


}


?>