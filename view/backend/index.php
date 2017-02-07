<?php
	// Flag variable for changing inner page content for various pages.
	if ( isset($_GET['manager']) ) {
		$manager = $_GET['manager'];
	}
	else {
		$manager = 'dashboard';
	}

//	// Defining the current logged in user type.
//	global $current_user, $wpdb;
//	$role               = $wpdb->prefix . 'capabilities';
//	$current_user->role = array_keys( $current_user->$role );
//	$role               = $current_user->role[0];

	// All database table query functions written in this file.
	//include ( EVENTO_DIR . '/model/function.php' );

	// Plugins header file
	//include ( EVENTO_DIR . '/view/backend/header.php' );

	// Plugins navigation menu file. Depends on logged in user role.
	//include ( EVENTO_DIR . '/view/backend/' . $role . '/navigation.php' );

	// Plugins main body file. Depends on logged in user role.
	//include ( EVENTO_DIR . '/view/backend/' . $role . '/' . $manager . '.php' );

	// Plugins footer file.
	//include ( EVENTO_DIR . '/view/backend/footer.php' );


?>
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
	<!-- BEGIN CONTENT BODY -->
	<div class="page-content">
		<!-- BEGIN PAGE HEADER-->

		<!-- BEGIN PAGE TITLE-->
		<h3 class="page-title"> Dashboard
			<small>Statistics</small>
		</h3>
		<!-- END PAGE TITLE-->

		<hr>


		<!-- START -->
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<div class="dashboard-stat blue">
				<div class="visual">
					<i class="fa fa-user"></i>
				</div>
				<div class="details">
					<div class="number">{{ $streg }}</div>
					<div class="desc"> TOTAL STUDENT </div>
				</div>
			</div>
		</div>
		<!-- END -->



		<!-- START -->
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<div class="dashboard-stat yellow">
				<div class="visual">
					<i class="fa fa-users"></i>
				</div>
				<div class="details">
					<div class="number">{{ $jbreg }}</div>
					<div class="desc"> TOTAL JOB HOLDER </div>
				</div>
			</div>
		</div>
		<!-- END -->

		<!-- START -->
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<div class="dashboard-stat blue">
				<div class="visual">
					<i class="fa fa-user"></i>
				</div>
				<div class="details">
					<div class="number">{{ $totalinv }}</div>
					<div class="desc"> TOTAL INVITED. </div>
				</div>
			</div>
		</div>
		<!-- END -->

		<!-- START -->
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<div class="dashboard-stat purple">
				<div class="visual">
					<i class="fa fa-users"></i>
				</div>
				<div class="details">
					<div class="number">{{ $user }}</div>
					<div class="desc">TOTAL USER </div>
				</div>
			</div>
		</div>
		<!-- END -->

	</div>
	<!-- END CONTENT BODY -->
</div>