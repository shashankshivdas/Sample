<?php
$number=$_POST['5512295527'];
$body=$_POST['Body'];
    header("content-type: text/xml");
if($_REQUEST['Body']=='Start'||$_REQUEST['Body']=='start'||$_REQUEST['Body']=='Restart'||$_REQUEST['Body']=='restart')
	{       $message1="Please select one of the following options using a number\n"; 
		$message2="1. Purchase\n";
		$message3="2. Repair\n";
		
	  
         $message="$message1$message2$message3";	
	}
if($_REQUEST['Body']=='1'||$_REQUEST['Body']=='Purchase'||$_REQUEST['Body']=='purchase')
	{        
		$message1="Please select one of the following options:\n";
		$message2="Text MO for Monitor\n";
		$message3="Text P for Projector\n";
		$message4=" Text C for CPU\n";
		$message5=" Text PR for Printer\n";
		$message6=" Text M for Phone\n";
		$message7=" Text W for Whole Computer\n";
	    
         $message="$message1$message2$message3$message4$message5$message6$message7";	
	}
if($_REQUEST['Body']=='MO'||$_REQUEST['Body']=='mo')
	{        
	$message1="Our Technician John(+1 550 000 4000) will call you to get your address and will give a visit in the next 24 hours with all the brochures and the best prices for the Monitors\n\n";
	  $message="$message1";	
	}
if($_REQUEST['Body']=='P'||$_REQUEST['Body']=='p')
	{     
	$message2="Our Technician Mark(+1 550 000 4001) will call you to get your address and will give a visit in the next 24 hours with all the brochures and the best prices for the Projectors\n\n";
	  $message="$message1";	
	}
if($_REQUEST['Body']=='C'||$_REQUEST['Body']=='c')
	{        
$message3="Our Technician Luke(+1 550 000 4002) will call you to get your address and will give a visit in the next 24 hours with all the brochures and the best prices for the CPUs\n\n";
	 $message="$message1";	
	}
if($_REQUEST['Body']=='PR'||$_REQUEST['Body']=='pr')
	{        
$message3="Our Technician Andy(+1 550 000 4003) will call you to get your address and will give a visit in the next 24 hours with all the brochures and the best prices for the Printers\n\n";
	 $message="$message1";	
	}
if($_REQUEST['Body']=='M'||$_REQUEST['Body']=='m')
	{        
$message3="Our Technician Robert(+1 550 000 4004) will call you to get your address and will give a visit in the next 24 hours with all the brochures and the best prices for the phones\n\n";
	 $message="$message1";	
	}
if($_REQUEST['Body']=='W'||$_REQUEST['Body']=='w')
	{        
$message3="Our Technician Sandy(+1 550 000 4005) will call you to get your address and will discussthe best prices for complete set of Computers\n\n";
	 $message="$message1";	
	}
if($_REQUEST['Body']=='2'||$_REQUEST['Body']=='Repair'||$_REQUEST['Body']=='repair')
	{        
		$message1=" Please select one of the following options:\n";
		$message2="Text MO for Monitor\n";
		$message3="Text P for Projector\n";
		$message4=" Text C for CPU\n";
		$message5=" Text PR for Printer\n";
		$message6=" Text M for Phone\n";
		$message7=" Text W for Whole Computer\n";
         $message="$message1$message2$message3$message4$message5$message6$message7";	
	}
if($_REQUEST['Body']=='MO'||$_REQUEST['Body']=='mo')
	{        
$message1="Our Technician John(+1 550 000 4000) will call you to get your address and will give a visit in the next 24 hours to check for the issue with the Monitor\n\n";
	
	  $message="$message1";	
	}
if($_REQUEST['Body']=='P'||$_REQUEST['Body']=='p')
	{        
	$message1="Our Technician Luke(+1 550 000 4001) will call you to get your address and will give a visit in the next 24 hours to check for the issue with the Projector\n\n";
	
	  $message="$message1";	
	}
if($_REQUEST['Body']=='C'||$_REQUEST['Body']=='c')
	{        
$message1="Our Technician Prince(+1 550 000 4002) will call you to get your address and will give a visit in the next 24 hours to check for the issue with the CPU\n\n";
	  $message="$message1";	
	}
if($_REQUEST['Body']=='PR'||$_REQUEST['Body']=='pr')
	{        
$message1="Our Technician Robert(+1 550 000 4003) will call you to get your address and will give a visit in the next 24 hours to check for the issue with the Printer\n\n";
	  $message="$message1";	
	}
if($_REQUEST['Body']=='M'||$_REQUEST['Body']=='m')
	{        
$message1="Our Technician Ray(+1 550 000 4004) will call you to get your address and will give a visit in the next 24 hours to check for the issue with the phone\n\n";
	  $message="$message1";	
	}
if($_REQUEST['Body']=='W'||$_REQUEST['Body']=='w')
	{        
$message1="Our Technician Andy(+1 550 000 4005) will call you to get your address and will give a visit in the next 24 hours to check for the issue with the Computer\n\n";
	  $message="$message1";	
	}
?>

<Response>
    <Message>
Hello<?php echo $number?>.
<?php echo $message?> 
<?php echo"\nPress start to redo the procedure";?>	    

</Message>
</Response>
