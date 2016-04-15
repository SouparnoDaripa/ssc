<?php
  include('../db_con.php');
  if(isset($_POST['u_id'])){
  	$uniq_id = $_POST['u_id'];
  	$type_id = $_POST['type_id'];
  	$item_id = $_POST['item_id'];

  	$sql = "SELECT * from choice where uniq_id = '".$uniq_id."' AND item_id = '".$item_id."'";
  	$query = mysqli_query($db_conx, $sql);
  	$num_rows = mysqli_num_rows($query);

  	if($num_rows < 1){
  		$sql = "INSERT into choice (uniq_id, type_id, item_id) values ('$uniq_id', '$type_id', '$item_id')";
  		$query = mysqli_query($db_conx, $sql);
  	}
  }
  $print ='<button class="btn btn-sm right" onclick = "removeChoice(\'0\', \''.$uniq_id.'\')">Clear All</button>';
  $i=1;
  $test=0;
  while($i<19){
  	$sql = "SELECT * from category where type_id = '$i' LIMIT 1";
	  $query = mysqli_query($db_conx, $sql);
	  $row = mysqli_fetch_array($query);
	  $type = $row[1];

	  $sql = "SELECT c.id, c.uniq_id, c.type_id, i.item_name from choice c INNER JOIN item i on c.item_id = i.id where c.uniq_id = '$uniq_id' AND c.type_id = '$i'";
	  $query = mysqli_query($db_conx, $sql);
	  $num_rows = mysqli_num_rows($query);

	  if($num_rows > 0){
      	  $test++;
		  $print .= '<div class="category'.$i.'">
		  				<h3>'.$type.'</h3>';
		  while($row = mysqli_fetch_array($query)){
		  	$print .='<div class="s-item-box">
                          '.$row[3].'<span role ="button" class="right" onclick = "removeChoice(\''.$row[0].'\', \''.$row[1].'\')">x</span>
                        </div>';
		  }
	  $print .='</div>';
	  }
	  $i++;
  }
  if($test == 0){
    $print .='<p>Sorry, You have no selected choices.</p>';
  }else{
    $print .='<a role="button" class="btn btn-warning btn-block continue" href="menu_action.php?ref='.$uniq_id.'">Continue</a>';
  }
  echo $print;
?>