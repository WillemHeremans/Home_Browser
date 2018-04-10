<?php

#	$myObj = new \stdClass();
#	
#		$myObj->name = "Twitter";
#		$myObj->url = "m.twitter.com";
#		$myObj->img = './icons/twitter.png';

#	$myJSON = json_encode($myObj);

#	echo $myJSON;
#	
#	//mkdir("./result", 0777);
#	
#	$fp = fopen('results.json', 'a+');
#fwrite($fp, json_encode($myObj));
#fclose($fp);
	
	
#$object = new stdClass();
#   $object->property = 'Here we go';

#   echo($object->property);


#	$sql="select * from Posts limit 20"; 

#$response = array();
#$posts = array();
#$result=mysql_query($sql);
#while($row=mysql_fetch_array($result)) { 
#  $title=$row['title']; 
#  $url=$row['url']; 

#  $posts[] = array('title'=> $title, 'url'=> $url);
#} 

#$response['posts'] = $posts;

#$fp = fopen('results.json', 'w');
#fwrite($fp, json_encode($response));
#fclose($fp);

$data = array();
$data['title'] = $_POST['title'];
$data['url'] = $_POST['url'];
$data['img'] = $_POST['img'];

//format the data
$formattedData = json_encode($data);

//set the filename
$filename = 'members.json';

//open or create the file
$handle = fopen($filename,'a+');

//write the data into the file
fwrite($handle,$formattedData);

//close the file
fclose($handle);
	


#   	
#   $myFile = "data.json";
#   $arr_data = array(); // create empty array

#  try
#  {
#	   //Get form data
#	   $formdata = array(
#	      'firstName'=> $_POST['firstName'],
#	      'lastName'=> $_POST['lastName'],
#	      'email'=>$_POST['email'],
#	      'mobile'=> $_POST['mobile']
#	   );

#	   //Get data from existing json file
#	   $jsondata = file_get_contents($myFile);

#	   // converts json data into array
#	   $formdata = json_decode($jsondata, true);

#	   // Push user data to array
#	   array_push($formdata,$formdata);

#       //Convert updated array to JSON
#	   $jsondata = json_encode($formdata, JSON_PRETTY_PRINT);
#	   
#	   //write json data into data.json file
#	   if(file_put_contents($myFile, $jsondata)) {
#	        echo 'Data successfully saved';
#	        
#	    }
#	   else 
#	        echo "error";

#   }
#   catch (Exception $e) {
#            echo 'Caught exception: ',  $e->getMessage(), "\n";
#   }

#var_dump($jsondata);

?>
