<?php
include('connect.php');

$title= $_POST['title'];
$main = $_POST['mainTags'];
$sub = $_POST['subTags'];
$correct = $_POST['correct'];
$currentID = null;

//get current id value from database
$result = mysqli_query($conn,"SELECT currentID FROM qid");
$userData = mysqli_fetch_array($result, MYSQL_ASSOC);

if (mysqli_num_rows($result) >0) {
    $currentID = intval($userData['currentID']);
}

//split by commas main tags
$mainTags = explode(",",$main);
$mainTagsCount = sizeof($mainTags);

//split by commas sub tags
$subTags = explode(",",$sub);
$subTagsCount = sizeof($subTags);

//split by commas correct tags
$correctTags = explode(",",$correct);
$correctTagsCount = sizeof($correctTags);

//adding to associative array with tag ID MAIN
$count = 0;
$mainWithId = array();  //the array contain main tag name and tag id //////////////////////////////////////////////////
foreach($mainTags as $value) {

    $item = array(
        'tag' => $mainTags[$count],
        'id' => $currentID
    );

    $count++;
    $currentID++;
    $mainWithId[] = $item;
}
print_r($mainWithId);

//adding to associative array with tag ID SUB
$subWithId = array();  //the array contain tag name and tag id //////////////////////////////////////////////////
$count = 0;
foreach($subTags as $value) {
    $i = $subTagsCount;
    $item = array(
        'tag' => $subTags[$count],
        'id' => $currentID
    );

    $i--;
    $count++;
    $currentID++;
    $subWithId[] = $item;
}
echo"<br/>";
print_r($subWithId);


//adding to associative array with tag ID SUB
$correctSequence = array();  //the array contain correct tag name and tag id //////////////////////////////////////////////////
$count = 0;
foreach($correctTags as $value) {
    $values = null;

    for($i=0;$i<sizeof($mainWithId);$i++){
        if($mainWithId[$i]['tag'] == $correctTags[$count]){
            $values = $mainWithId[$i]['id'];
            break;
        }
    }

    for($i=0;$i<sizeof($subWithId);$i++){
        if($subWithId[$i]['tag'] == $correctTags[$count]){
            $values = $subWithId[$i]['id'];
            break;
        }
    }

    $item = array(
        'tag' => $correctTags[$count],
        'id' => $values
    );

    $count++;
    $correctSequence[] = $item;
}
echo"<br/>";
print_r($correctSequence);



?>