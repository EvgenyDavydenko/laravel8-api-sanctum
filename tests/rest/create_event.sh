#! /bin/bash

curl --verbose localhost:8080/api/create \
    -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 4|nFVPIvX8SGoRwwe5TIwGVvZv7hWrCNDXumDTn01b" \
    -d '{"title":"Event 1","descr":"description event1"}' | jq