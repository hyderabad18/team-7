<html>
<head>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
p {
  text-align: center;
  font-size: 60px;
  margin-top:0px;
}
</style>
</head>
<script>
// Set the date we're counting down to
var countDownDate = new Date().getTime()+30000*60;

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
  
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML =  hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        window.alert("Time is finished and please submit");
		
    }
}, 1000);
</script>


<style>
#ap {
    border: 2px solid black;
    padding: 25px;
    background: url(background-greywhite.jpg);
    background-repeat: no-repeat;
    background-size: auto;
}

</style>
</head>
<body>
			
               <!-- CONTENT AREA -->
               <div id="ap">
			   <p id="demo"></p>
	<center><h2> ASSESSMENT TEST</h2></center>	
<form action="verifysampletest.php" method="POST">	
   
   <?php 
$con = mysqli_connect("localhost", "root", "", "cfg");
 $count=0;
if (!$con) {
    die("ERROR: Could not connect. "
                .mysqli_connect_error());
}

//if (isset($_POST["submit"]))
	//{
	//	if (!empty($_POST['paperid']))
			//{
			//$paperid = $_POST['paperid'];
			//$sector=$_POST['sector'];

$sql = "SELECT * from sample_paper where paperno='paper1' && sector='engineering' ORDER BY RAND()";

if ($res = mysqli_query($con, $sql)) {
	$i=1;
    if (mysqli_num_rows($res) > 0) {
		
       
        while ($row = mysqli_fetch_array($res)) 
		{$id= $row['qid'];
		
   ?>
		  	
           
						
					<label class="question-label"><?php echo $i ;?></label>	
				<label ><strong><?php echo $row['question']; ?></label></strong><br>	
			<input type="radio" name="ans<?php echo $i; ?>" value="a"/>
							<label ><?php echo $row['optiona']; ?></label><br>
                         <input type="radio" name="ans<?php echo $i ;?>" value="b"/>
							<label ><?php echo $row['optionb']; ?></label><br>
                         <input type="radio" name="ans<?php echo $i; ?>" value="c"/>
							<label ><?php echo $row['optionc']; ?></label><br>
                         <input type="radio" name="ans<?php echo $i ;?>" value="d"/>
							<label ><?php echo $row['optiond']; ?></label><br>	
							
							
				           
                           <input type="hidden" name="qid<?php echo $i;?>" value="<?php echo $id;?>" >
							
      
        <?php
		   
		$i=$i+1;
		}
        
		
		?>
		<center> <input type="submit" name="submit" value="submit" style="height:30px"> </center>
		<?php
       
    }
    else {
        echo "No matching records are found.";
    }
}
else {
    echo "ERROR: Could not able to execute $sql. ";
                                
}

  ?> 
  