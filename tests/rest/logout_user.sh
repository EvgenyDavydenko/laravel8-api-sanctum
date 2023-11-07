#! /bin/bash

curl --verbose localhost:8080/api/logout \
    -X GET \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 3|gRj4ga3Lt2rabFymCdynjpWjrWrJkUwOFfEgMGk6" \ | jq