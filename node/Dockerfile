FROM node:16-alpine3.11 AS node_modules

WORKDIR /app
COPY src/package.json ./

RUN npm install



FROM node:16-alpine3.11

WORKDIR /usr/src/app
COPY --from=node_modules /app /usr/local/lib/
COPY src .

CMD [ "npm start" ]