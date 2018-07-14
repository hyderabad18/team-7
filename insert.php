<?php 
$servername ="localhost" ;
$username = "root";
$password ="";
$dbname ="team7";
 
$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO  questions(qid,question,optiona,optionb,optionc,optiond,ans,type,level) VALUES ('1', 'The small child does whatever his father was done.', 'has done','	did','does','had done','a','verbal','level1')";
$sql .= "INSERT INTO  questions(qid,question,optiona,optionb,optionc,optiond,ans,type,level) VALUES ('2', 'You need not come unless you want to.', 'You don't need to come unless you want to','You come only when you want to','You come unless you don't want to','You come only when you want to','b','verbal','level1')";
$sql .= "INSERT INTO  questions(qid,question,optiona,optionb,optionc,optiond,ans,type,level) VALUES ('3', 'There are not many men who are so famous that they are frequently referred to by their short names only', 'initials','signatures','pictures','middle names','a','verbal','level1')";
$sql .= "INSERT INTO  questions(qid,question,optiona,optionb,optionc,optiond,ans,type,level) VALUES ('4', 'The man to who I sold my house was a cheat.', 'to whom I sell','to who I sell','who was sold to','to whom I sold','c','verbal','level1')";
$sql .= "INSERT INTO  questions(qid,question,optiona,optionb,optionc,optiond,ans,type,level) VALUES ('5', 'They were all shocked at his failure in the competition.', 'were shocked at all','had all shocked at','had all shocked by','had been all shocked on','a','verbal','level1')";
$sql .= "INSERT INTO  questions(qid,question,optiona,optionb,optionc,optiond,ans,type,level) VALUES ('6', 'I need not offer any explanation regarding this incident - my behaviour is speaking itself.', 'will speak to itself','speaks for itself','has been speaking','speaks about itself','b','verbal','level2')";
$sql .= "INSERT INTO  questions(qid,question,optiona,optionb,optionc,optiond,ans,type,level) VALUES ('7', 'He is too important for tolerating any delay.', 'to tolerate','to tolerating','at tolerating','with tolerating','d','verbal','level2')";
$sql .= "INSERT INTO  questions(qid,question,optiona,optionb,optionc,optiond,ans,type,level) VALUES ('8', 'Why did you not threw the bag away?', 'did you not throw','had you not threw','did you not thrown','you did not thrown','a','verbal','level2')";
$sql .= "INSERT INTO  questions(qid,question,optiona,optionb,optionc,optiond,ans,type,level) VALUES ('9', 'The intruder stood quietly for few moments', 'for few time','for the few moments','for moments','for a few moments','b','verbal','level2')";
$sql .= "INSERT INTO  questions(qid,question,optiona,optionb,optionc,optiond,ans,type,level) VALUES ('10', 'The performance of our players was rather worst than I had expected.', 'bad as I had expected','worse than I had expected','worse than expectation','worst than was expected','d','verbal','level2')";
//$sql = "INSERT INTO  questions(qid,question,optiona,optionb,optionc,optiond,ans,type,level) VALUES ('1', '', '','','','','','','','')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

echo "Connected successfully";
?>