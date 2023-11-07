#! /bin/bash

curl --verbose localhost:8080/api/profile \
    -X GET \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 4|nFVPIvX8SGoRwwe5TIwGVvZv7hWrCNDXumDTn01b" \ | jq