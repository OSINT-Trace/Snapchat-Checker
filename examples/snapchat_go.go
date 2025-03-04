package main

import (
	"fmt"
	"strings"
	"net/http"
	"io"
)

func main() {

	url := "https://snapchat-checker.p.rapidapi.com/check_bulk"

	payload := strings.NewReader("{"input":["test@gmail.com","john@doe.com","19295551234"]}")

	req, _ := http.NewRequest("POST", url, payload)

	req.Header.Add("x-rapidapi-key", "Sign Up for Key")
	req.Header.Add("x-rapidapi-host", "snapchat-checker.p.rapidapi.com")
	req.Header.Add("Content-Type", "application/json")

	res, _ := http.DefaultClient.Do(req)

	defer res.Body.Close()
	body, _ := io.ReadAll(res.Body)

	fmt.Println(res)
	fmt.Println(string(body))

}