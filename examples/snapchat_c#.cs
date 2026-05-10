using System.Net.Http.Headers;
var client = new HttpClient();
var request = new HttpRequestMessage
{
	Method = HttpMethod.Post,
	// API.Market URL: https://prod.api.market/api/v1/osint-trace-1/snapchat-checker/check/snapchat
RequestUri = new Uri("https://snapchat-checker.p.rapidapi.com/check"),
	// API.Market Header: X-Api-Key: YOUR_API_KEY
Headers =
	{
		{ "x-rapidapi-key", "Sign Up for Key" },
		{ "x-rapidapi-host", "snapchat-checker.p.rapidapi.com" },
	},
	Content = new StringContent("{\"input\":\"test@example.com\"}")
	{
		Headers =
		{
			ContentType = new MediaTypeHeaderValue("application/json")
		}
	}
};
using (var response = await client.SendAsync(request))
{
	response.EnsureSuccessStatusCode();
	var body = await response.Content.ReadAsStringAsync();
	Console.WriteLine(body);
}