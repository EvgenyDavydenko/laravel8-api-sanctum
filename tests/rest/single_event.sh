#! /bin/bash

curl --verbose localhost:8080/api/single/4 \
    -X GET \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 5|3UCnegzibg0AIc8rAVEewWwiMGitB1LWeCxUiBTz" \ | jq