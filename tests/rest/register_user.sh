#! /bin/bash

curl --verbose localhost:8080/api/register \
    -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"maria","email":"maria@mail.loc","password":"pass","password_confirmation":"pass"}' | jq