AsyncHttpClient client = new DefaultAsyncHttpClient();
client.prepare("POST", "https://snapchat-checker.p.rapidapi.com/check_bulk")
	.setHeader("x-rapidapi-key", "Sign Up for Key")
	.setHeader("x-rapidapi-host", "snapchat-checker.p.rapidapi.com")
	.setHeader("Content-Type", "application/json")
	.setBody("{"input":["test@gmail.com","john@doe.com","19295551234"]}")
	.execute()
	.toCompletableFuture()
	.thenAccept(System.out::println)
	.join();

client.close();