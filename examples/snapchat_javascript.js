const data = JSON.stringify({
	input: "test@example.com"
});

const xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener('readystatechange', function () {
	if (this.readyState === this.DONE) {
		console.log(this.responseText);
	}
});

// API.Market URL: https://prod.api.market/api/v1/osint-trace-1/snapchat-checker/check/snapchat
xhr.open('POST', 'https://snapchat-checker.p.rapidapi.com/check');
// API.Market Header: X-Api-Key: YOUR_API_KEY
xhr.setRequestHeader('x-rapidapi-key', 'Sign Up for Key');
xhr.setRequestHeader('x-rapidapi-host', 'snapchat-checker.p.rapidapi.com');
xhr.setRequestHeader('Content-Type', 'application/json');

xhr.send(data);