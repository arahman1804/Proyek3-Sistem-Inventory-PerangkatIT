				
	 				<?php 
					$query_yes = mysqli_query($GLOBALS["___mysqli_ston"], "select * from notification order by notification.date_of_notification DESC")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
					$count_no = mysqli_num_rows($query_yes);
		            ?>
					
					<?php 
					$query_no = mysqli_query($GLOBALS["___mysqli_ston"], "select * from notification 
					LEFT JOIN notification_read ON notification_read.notification_id = notification.notification_id
					where notification_read.admin_id  = '$session_id'
					")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
					$count_yes = mysqli_num_rows($query_no);					
		            ?>
					
					<?php $not_read = $count_no -  $count_yes; ?>
