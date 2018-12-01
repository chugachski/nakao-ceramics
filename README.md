# Nakao Ceramics Site

## Description
Nakao Ceramics WordPress site application. Local development is done with a Docker configuration simulating a standard WordPress environment. Project build on a [Sage 9](https://roots.io/sage/) WordPress starter theme.

#### Requirements
The following applications should be installed locally in order to work on the web application:

- Docker for Mac/Windows
- Node
- NPM
- Yarn

#### Local Development
1. Make sure Docker for Mac/Windows, as well as Node.js and NPM are installed on your local system
2. Clone this repository into your project root directory
3. Obtain a copy of a pregenerated volume archive, containing the application database and upload files
4. Extract the tarball archive
5. Build the front end application
6. `cd` into the project root dir and run `docker-compose up -d`. Docker will load your project directory as the wp-content directory in the container, and run the containers as daemons in the background

## Dev Workflow
After running `docker-compose up -d` you will have a local environment at
`http://localhost:8080`.
