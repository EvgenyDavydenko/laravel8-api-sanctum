#! /bin/bash

curl --verbose localhost:8080/api/login \
    -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"maria@mail.loc","password":"pass"}' | jq