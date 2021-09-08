# Electric Kiwi API - Python Sample

This is a Python client that provides sample code on how to authenticate and make calls to the Electric Kiwi API. To get started with the APIs, please check the [docs](https://developer.electrickiwi.co.nz/api-documentation/).


## Language Requirements

- Python 3.8+
- pip3


## Installation

To get started, you will need to create a virtual environment first and then install dependencies.

### Windows

```bash
pip install virtualenv
virtualenv <your-env>
<your-env>\Scripts\activate
pip install -r requirements.txt
```

### Linux/MacOS

```bash
pip install virtualenv
virtualenv <your-env>
source <your-env>/bin/activate
pip install -r requirements.txt
```

## Configuration

Before moving to the next step and running the server, you will need to modify the `settings.ini` file with your client credentials.

Simply modify `YOUR_CLIENT_ID` and `YOUR_CLIENT_SECRET` with your credentials.


## Running the server

To start running the server and the authentication process, you will need to run the Flask server first:

```bash
python server.py
```

Then in your browser you can head to `http://localhost:5080/`, unless you've changed the host/port in `settings.ini` file.


## Dependencies

This sample uses the following main libraries, which will be installed with requirements:

* oauthlib
* Flask
* requests_oauthlib


## Running the sample within Docker

To run the sample within Docker, Docker desktop has to be installed. The steps for the installation can be found [here](https://www.docker.com/products/docker-desktop)

If you are using docker version 3.6 and above, use the below commands: 

```bash
cd python
docker compose build
docker compose run -p "5080:5080" ek_api_python
```

If you are using docker version below 3.6, use the below commands: 

```bash
cd python
docker-compose build
docker-compose run -p "5080:5080" ek_api_python
```