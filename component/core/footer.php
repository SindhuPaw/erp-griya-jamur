 <?php
 error_reporting(0);
include 'configuration/config_connect.php';
        $queryback="SELECT * FROM backset";
		$resultback=mysqli_query($conn,$queryback);
		$rowback=mysqli_fetch_assoc($resultback);
		$footer=$rowback['footer'];

        $queryback="SELECT * FROM backset";
    $resultback=mysqli_query($conn,$queryback);
    $rowback=mysqli_fetch_assoc($resultback);
    $nama=$rowback['namabisnis1'];

                        
                
 ?>
 <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> <?php echo $nama;?>
                </div>
                <strong>Copyright ©<?= date("Y") ?> Jagodigital.</strong> All rights
                reserved. <?php echo $footer;?> (jika mau mengganti footernya ada biaya copyright 50k)
				</div>
            </footer>
