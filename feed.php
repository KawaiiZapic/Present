<?php
$feed_url = "https://your_blog/feed";
$data = simplexml_load_file($feed_url)->channel->item;
$resp = [
    "status" => 0,
    "data" => []
];
if($data){
    for($i = 0; $i < 8; $i++){
        if($data[$i]){
            $resp["data"][]=[
                "link" => ((array)$data[$i]->link)[0],
                "title" => ((array)$data[$i]->title)[0],
                "timestamp" => date("Y-m-d",strtotime($data[$i]->pubDate[0]))
            ];
        }
        else{
            break;
        }
    }
}
else{
    $resp["status"] = -1;
}
header("Content-type: application/json");
echo json_encode($resp);
