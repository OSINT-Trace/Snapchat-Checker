#!/usr/bin/env bash

# Primary (Recommended): OSINT Trace Direct API
curl --request POST \
  --url https://api.osinttrace.com/v1/check/snapchat \
  --header 'x-osint-key: YOUR_OSINT_KEY' \
  --header 'Content-Type: application/json' \
  --data '{"input":"test_username"}'

# Alternative (API.Market):
# curl --request POST \
#   --url https://prod.api.market/api/v1/osint-trace-1/snapchat-checker/check/snapchat \
#   --header 'X-Api-Key: YOUR_API_KEY' \
#   --header 'Content-Type: application/json' \
#   --data '{"input":"test_username"}'

# Alternative (RapidAPI):
# curl --request POST \
#   --url https://snapchat-checker.p.rapidapi.com/check \
#   --header 'x-rapidapi-host: snapchat-checker.p.rapidapi.com' \
#   --header 'x-rapidapi-key: YOUR_RAPIDAPI_KEY' \
#   --header 'Content-Type: application/json' \
#   --data '{"input":"test_username"}'