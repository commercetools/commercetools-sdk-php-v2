# Symfony demo app for Dynatrace

This Demo is to show how PHP SDK can be used in a Symfony application for a Docker environment with monitoring tools enabled.

For now, we configured the docker environment for Dynatrace.

## Requirements

- PHP at least 8.1
- Symfony 6 
- Docker
- Registration in Dynatrace

## Installation

1. Clone/Download the example folder.
2. Navigate to the path `symfony-app-dynatrace/`.

### Token creation
1. Create the token in Dynatrace at least with PAAS and "Ingest metrics" scopes.
2. The token is necessary to paste it in the .env file later.


## Using the Symfony Demo app in a Docker Environment

### Configuring the Demo App

1. Open the Terminal
2. Run `composer install` or `composer update`
3. Copy the [.env.sample](docker/php/.env.sample) file to the root folder renaming it to `.env`. So in the root folder run `cp docker/php/.env.sample .env`.
4. Fill the `.env` file with the missing data.
5. Run `composer dump-env prod`

### Preparing the Docker environment

1. Always in the Root of the project 
2. Run `docker compose up`
3. Wait until the environment is running

### Navigate the application

1. Navigate to [http://localhost:8080/products](http://localhost:8080/products) or [http://localhost:8080/categories](http://localhost:8080/categories)
2. The result would be an array objects containing products or categories.
3. If it's not make sure that in Merchant Center in the project key selected (see the environment variable for the client credentials in the point 3 of the Installation section), there would be some data for products and categories.
4. Go in the Dynatrace UI to see the monitoring of the API calls.

The docker configuration files will be found in the `docker/php` folder and the `docker-compose.yml` in the `symfony-app-dynatrace/` folder so they can be used in your application.
