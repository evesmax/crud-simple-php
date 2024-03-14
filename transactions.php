<?php
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://data.mongodb-api.com/app/data-izrqo/endpoint/data/v1/action/insertOne',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "collection":"logs",
    "database":"transactions",
    "dataSource":"Cluster0",
    "document": {'.$jsonInsert.'   
    }
}',
  CURLOPT_HTTPHEADER => array(
    'api-key: BM9DyYsmZ727Ju6DbUuUCTSVbeYSCIp7Lma3p3W4VztmZgQJgcVO20J8rht8hngQ',
    'Content-Type: application/json'
  ),
));
$response = curl_exec($curl);
curl_close($curl);
echo $response;
