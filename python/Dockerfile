FROM python:3-slim

COPY src/requirements.txt /tmp 
RUN pip install --no-cache-dir -r /tmp/requirements.txt \
    && apt autoremove -y 
WORKDIR /usr/src/app
COPY src .

CMD [ "python server.py"]