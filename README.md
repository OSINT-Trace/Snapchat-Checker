# Snapchat Account Checker API

[![Available on](https://img.shields.io/badge/Available%20on-gray?style=for-the-badge)](#) [![API.Market](https://img.shields.io/badge/API.Market-8B5CF6?style=for-the-badge)](https://api.market/store/osint-trace-1/snapchat-checker) [![RapidAPI](https://img.shields.io/badge/RapidAPI-black?style=for-the-badge&logo=rapidapi)](https://rapidapi.com/osint-org-osint-org-default/api/snapchat-checker)

A lightweight API to verify Snapchat account existence by username, email, or phone number.

## Table of Contents
- [Features](#features)
- [Getting Started](#getting-started)
- [API Endpoints](#api-endpoints)
  - [Single Account Check](#single-account-check)
  - [Response Format](#response-format)
- [Requirements](#requirements)
- [Pricing](#pricing)
- [Support](#support)
- [Legal Compliance](#legal-compliance)

## Features

✅ Single account verification  
✅ Supports emails, usernames, and phone numbers  
✅ Fast JSON responses  
✅ Enterprise-grade reliability  

## Getting Started
1. **Get API Key**
   - Subscribe via your preferred marketplace: [API.Market](https://api.market/store/osint-trace-1/snapchat-checker) or [RapidAPI Hub](https://rapidapi.com/osint-org-osint-org-default/api/snapchat-checker)
   - Get your API Key from your dashboard

2. **Base URL & Authentication**
   The Base URL and authentication headers depend on the marketplace you use:

   **API.Market:**
   - Base URL: `https://prod.api.market/api/v1/osint-trace-1/snapchat-checker`
   - Header: `X-Api-Key`

   **RapidAPI:**
   - Base URL: `https://snapchat-checker.p.rapidapi.com`
   - Headers: `X-RapidAPI-Host: snapchat-checker.p.rapidapi.com` and `X-RapidAPI-Key`

## API Endpoints
### Single Account Check

**Endpoint**
> POST /check

***Request***  
   ```json
{
    "input": "test@example.com"
}
```

**Examples**

<details>
<summary><b>API.Market (cURL)</b></summary>

```bash
curl --request POST \
     --url https://prod.api.market/api/v1/osint-trace-1/snapchat-checker/check/snapchat \
     --header 'X-Api-Key: YOUR_API_KEY' \
     --header 'Content-Type: application/json' \
     --data '{"input": "test@example.com"}'
```
</details>

<details>
<summary><b>RapidAPI (cURL)</b></summary>

```bash
curl --request POST \
     --url https://snapchat-checker.p.rapidapi.com/check \
     --header 'X-RapidAPI-Host: snapchat-checker.p.rapidapi.com' \
     --header 'X-RapidAPI-Key: YOUR_API_KEY' \
     --header 'Content-Type: application/json' \
     --data '{"input": "test@example.com"}'
```
</details>

## Response Format
**Successful Response**
```json
{
  "live": true
}
```


## Requirements
- Minimum input length: 3 characters


- Valid input types:
  - Email addresses
  - Usernames
  - Phone numbers (E.164 format recommended)
 
## Pricing
Flexible plans available through [API.Market](https://api.market/store/osint-trace-1/snapchat-checker) or [RapidAPI](https://rapidapi.com/osint-org-osint-org-default/api/snapchat-checker/pricing).   
Free tier available for testing and low-volume usage.

## Support

For technical issues or enterprise inquiries:  
📧 <info@osinttrace.com>
## Legal Compliance

This API is intended for legitimate use cases only. Users are responsible for:

- Complying with Snapchat's Terms of Service
- Adhering to all applicable data privacy laws
- Obtaining proper consent for data processing

*This service is not affiliated with or endorsed by Snap Inc.*
