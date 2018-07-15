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
var countDownDate = new Date().getTime()+10000*60;

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
        document.getElementById("demo").innerHTML = "EXPIRED";
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
	<center><h2> APTITUDE ASSESSMENT TEST</h2></center>	
<form action="verify.php" method="POST">	
   
   <?php 
// $con = mysqli_connect("localhost", "root", "", "cfg");
include("../assets/connection.php");
 $count=0;
if (!$conn) {
    die("ERROR: Could not connect. "
                .mysqli_connect_error());
}
 $sqlc = "SELECT count(question) as count from questions ";
if ($resc = mysqli_query($conn, $sqlc)) {
    if (mysqli_num_rows($resc) > 0) {
      
        while ($row = mysqli_fetch_array($resc)) {
			$count=$row['count'];
			
		}
		
	}
	
}
$level2="level2";

$sql = "SELECT * from questions where level='level2' ORDER BY RAND()";

if ($res = mysqli_query($conn, $sql)) {
	$i=1;
    if (mysqli_num_rows($res) > 0) {
		
       
        while ($row = mysqli_fetch_array($res)) 
		{$id= $row['qid'];$level=$row['level'];
	     if($level=="level2")
		 {
		
   ?>
		  	<form action="verify2.php" method="POST">
           
						
					<label class="question-label"><?php echo $i ;?></label>	
                <label ><textarea style="border: none; width:80%; background-color: transparent;" id="<?php echo $i; ?>"  style="width:50%"> <?php echo $row['question']; ?></textarea> <div class="button" onclick="speak('<?php echo $i; ?>');">Speak</div>  </label><br>	
                
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
		   }
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
  
<br/><br/><br/><br/><br/><br/>
<select id="voiceOptions"></select>
<br/>
<input type="range" id="volumeSlider" min="0" max="1" value="0.5" step="0.1" />
<br/>
<input type="range" id="rateSlider" min="0" max="1" value="0.5" step="0.1" />
<br/>
<input type="range" id="pitchSlider" min="0" max="2" value="0.5" step="0.1" />
<br/>
            
<script src="../assets/js/texttoaudio.js"></script>
