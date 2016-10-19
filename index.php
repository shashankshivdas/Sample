<?php
$number=$_POST['5512295527'];
$body=$_POST['Body'];
    header("content-type: text/xml");
if($_REQUEST['Body']=='Start'||$_REQUEST['Body']=='start'||$_REQUEST['Body']=='Restart'||$_REQUEST['Body']=='restart')
	{       $message1="Please select one of the following options using a number or the subject name\n"; 
		$message2="1. Purchase\n";
		$message3="2. Repair\n";
		
	  
         $message="$message1$message2$message3";	
	}
if($_REQUEST['Body']=='1'||$_REQUEST['Body']=='Purchase'||$_REQUEST['Body']=='purchase')
	{        
		$message1="Please select one of the following options:\n";
		$message2="Text MO for Monitor\n";
		$message3="Text P for Projector\n";
		$message4=" Text C for CPU";
	    
         $message="$message1$message2$message3$message4";	
	}
if($_REQUEST['Body']=='MO')
	{        
	$message1="Our Technician John would visit you in the next 24 hours with all the brochures and the best prices for the Monitors\n\n";
	  $message="$message1";	
	}
if($_REQUEST['Body']=='P')
	{     
	$message2=""Our Technician Mark would visit you in the next 24 hours with all the brochures and the best prices for the Projectors\\n\n";
	  $message="$message2";	
	}
if($_REQUEST['Body']=='C')
	{        
$message3=""Our Technician Mark would visit you in the next 24 hours with all the brochures and the best prices for the CPUs\\n";
	 $message="$message3";	
	}
if($_REQUEST['Body']=='2'||$_REQUEST['Body']=='Repair'||$_REQUEST['Body']=='repair')
	{        
		$message1=" Please select one of the following options:\n";
		$message2="Text MO for Monitor\n";
		$message3="Text P for Projector\n";
		$message4=" Text C for CPU";
         $message="$message1$message2$message3$message4";	
	}
if($_REQUEST['Body']=='MO'||$_REQUEST['Body']=='mo')
	{        
$message1="Our Technician John would visit you in the next 48 hours to check for the issue with the Monitors\n\n";
	
	  $message="$message1";	
	}
if($_REQUEST['Body']=='P'||$_REQUEST['Body']=='p')
	{        
	$message1="Our Technician Luke would visit you in the next 48 hours to check for the issue with the Projectors\n\n";
	
	  $message="$message1";	
	}
if($_REQUEST['Body']=='C'||$_REQUEST['Body']=='c')
	{        
$message1="Our Technician Prince would visit you in the next 48 hours to check for the issue with the CPU's\n\n";

	  $message="$message1";	
	}


?>

<Response>
    <Message>
Hello  <?php echo $number?>.
<?php echo $message?> 
<?php echo"\nPress start to redo the procedure";?>	    

</Message>
</Response>
