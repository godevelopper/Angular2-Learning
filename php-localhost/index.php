<?php
/**
 * Created by opium.
 * Date: 27.01.2017
 * Time: 15:41
 */


header("Access-Control-Allow-Origin: http://localhost:3000");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Headers: x-id");

/*header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: x-id");*/


$data = array(
    array('id' => '1','first_name' => 'Cynthia'),
    array('id' => '2','first_name' => 'Keith'),
    array('id' => '3','first_name' => 'Robert'),
    array('id' => '4','first_name' => 'Theresa'),
    array('id' => '5','first_name' => 'Margaret')
);

echo json_encode($data);
