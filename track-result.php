<?php
function dd($data){
	var_dump($data);
	die();
}
require_once('database.php');
require_once('library.php');
include('layout.php');
// error_reporting(0);

$cons= $_POST['Consignment'];

$sql = "SELECT *
		FROM tbl_courier
		WHERE cons_no = '$cons'";
$result = dbQuery($sql);
$no = dbNumRows($result);
if ($no == 1) {
    while ($data = dbFetchAssoc($result)) {
        extract($data);
    ?>

			<!-- banner bottom -->
		<section class="ser-btm py-md-5">
		    <div class="container py-4 mt-2">
                <h3 class="text-2xl font-semibold text-center mb-3">Shipment Details</h3>
                <div class="text-center flex justify-content-center">
                    <div class="lg-w-50 row justify-content-center align-self-center align-items-center">
                        <table class="table-striped table flex justify-center">
                            <thead class="row justify-content-center ">
                                <tr>
                                    <th class="text-warning">SENDER'S INFORMATION</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                            <tr class="info mb-3">
                                <th class="text-left mb-3 ">Shipper Name:</th>
                                <td class="text-left"><?php echo $ship_name; ?></td>
                            </tr>
                        
                            <tr class="info">
                                <th width="" class="text-left">Shipper Phone:</th>
                                <td width="245" class="text-left"><?php echo $ship_phone; ?></td>
                            </tr>
                            <tr class="info">
                                <th width="293" class="text-left">Shipper Address:</th>
                                <td width="245" class="text-left"><?php echo $s_add; ?></td>
                            </tr>   
                            <thead class="row justify-content-center">
                                <tr>
                                    <th class="text-warning">RECEIVER'S INFORMATION</th>
                                </tr>
                            </thead>
                            <tr class="info">
                                <th class="text-left">Receiver Name:</th>
                                <td class="text-left"><?php echo $rev_name; ?></td>
                            </tr>
                            <tr class="info">
                                <th class="text-left">Receiver Phone:</th>
                                <td class="text-left"><?php echo $r_phone; ?></td>
                            </tr>
                            <tr class="info">
                                <th class="text-left">Receiver Address:</th>
                                <td class="text-left"><?php echo $r_add; ?></td>
                            </tr>
                            <thead class="row justify-content-center ">
                                <tr>
                                    <th class="text-warning">PACKAGE INFORMATION</th>
                                </tr>
                            </thead>
                            <tr class="info">
                                <th class="text-left">Tracking Number:</th>
                                <td class="text-left font-semibold text-red-600" style="color:red"><?php echo $cons_no; ?></td>
                            </tr>
                            <tr class="info">
                                <th class="text-left">Shippment Type:</th>
                                <td class="text-left"><?php echo $type; ?></td>
                            </tr>
                            <tr class="info">
                                <th class="text-left">Weight:</th>
                                <td class="text-left"><?php echo $weight .'kg'; ?></td>
                            </tr>
                            <tr class="info">
                                <th class="text-left">Invoice No:</th>
                                <td class="text-left"><?php echo $invice_no; ?></td>
                            </tr>
                            <tr class="info">
                                <th class="text-left">Total Freight:</th>
                                <td class="text-left"><?php echo $freight; ?></td>
                            </tr>
                            <tr class="info">
                                <th class="text-left">Item Location:</th>
                                <td class="text-left"><?php echo $mode; ?></td>
                            </tr>
                            <tr class="info">
                                <th class="text-left">Order Updated:</th>
                                <td class="text-left"><?php echo $pick_date. ' - '. $pick_time; ?></td>
                            </tr>
                            <tr class="info">
                                <th class="text-left">Status:</th>
                                <td class="text-left"><?php echo $status; ?></td>
                            </tr>
                            <tr class="info">
                                <th class="text-left">Comment:</th>
                                <td class="text-left"><?php echo $comments; ?></td>
                            </tr>
                            
                            </tbody>
                        </table>
                    </div>
                </div>
			</div>
		</section>
    <?php
    include('footer.php');
        }
    }else{
        ?>
	    <section class="ser-btm py-md-5">
		    <div class="container py-4">
                <h3 class="text-lg text-center mb-3">No shipment found</h3>
                <h3 class="text-medium text-center mb-3">Consignment Number <font color="#FF0000"><?php echo $cons; ?></font> not found. Please verify the Number.<br/>
                <a href="index.html" class="text-medium text-blue-300 py-3">Go Back</a> to Search Again.</h3>
               
                
			</div>
		</section>
    <?php
    }
    include('footer.php');
    ?>

