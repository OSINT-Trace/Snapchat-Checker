import requests

url = "https://snapchat-checker.p.rapidapi.com/check_bulk"

payload = { "input": ["test@gmail.com", "john@doe.com", "19295551234"] }
headers = {
	"x-rapidapi-key": "Sign Up for Key",
	"x-rapidapi-host": "snapchat-checker.p.rapidapi.com",
	"Content-Type": "application/json"
}

response = requests.post(url, json=payload, headers=headers)

print(response.json())