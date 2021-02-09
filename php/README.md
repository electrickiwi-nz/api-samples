# Electric Kiwi API - PHP Sample

A PHP client that provides sample code on how to authenticate and make calls to Electric Kiwi API. To get started with the APIs, please check the [docs](https://developer.electrickiwi.co.nz/api-documentation/).


## Language Requirements

- PHP 7.4+
- Composer


## Installation

To get started, you need to install dependencies first as follows
```
composer install
```


## Configuration

Before moving to the next step and running the server, you'd need to modify `config.php` file with your client credentials.

Simply modify `YOUR_CLIENT_ID` and `YOUR_CLIENT_SECRET` with your credentials.


## Running the server

To start running the server and the authentication process, you'd need to run the server first, you can do this with PHP's built-in web server

```
php -S localhost:5080
```

Then in your browser, visit `http://localhost:5080/` and you'll be redirected to the authorization page and eventually redirected to a page with sample API responses.


## Dependencies

This sample uses the following main libraries, which will be installed via composer:

* league/oauth2-client