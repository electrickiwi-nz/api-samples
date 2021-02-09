# Electric Kiwi API - Python Sample

This is a Python client that provides sample code on how to authenticate and make calls to the Electric Kiwi API. To get started with the APIs, please check the [docs](https://developer.electrickiwi.co.nz/api-documentation/).


## Language Requirements

- Python 3.8+
- pip3


## Installation

To get started, you will need to create a virtual environment first and then install dependencies.

### Windows

```
pip install virtualenv
virtualenv <your-env>
<your-env>\Scripts\activate
pip install -r requirements.txt
```

### Linux/MacOS

```
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

```
python server.py
```

Then in your browser you can head to `http://localhost:5080/`, unless you've changed the host/port in `settings.ini` file.


## Dependencies

This sample uses the following main libraries, which will be installed with requirements:

* oauthlib
* Flask
* requests_oauthlib