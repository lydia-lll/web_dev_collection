const http = require('http');
//not available through browser; available on server;
//get package
const myServer = http.createServer(function(request,response){
    console.log("A connection to the server was established!");

    if (request.url == '/'){
        response.writeHead(200,{
            'Content-Type': 'text/html'
        });

        response.write('<h1>Hello, world</h1>');
        response.write('<a href="/pikachu">Click me to browse pikachu!</a>')

        response.end();
    }
    else if(request.url == '/pikachu'){
        response.writeHead(200,{
            'Content-Type': 'text/html'
        });

        response.write('<h1>Pikachu</h1>');

        response.end();
    }
    else if(request.url == '/pikachu'){
        response.writeHead(200,{
            'Content-Type': 'text/html'
        });

        response.write('<h1>Pikachu</h1>');

        response.end();
    }
    else{
        response.writeHead(404,{
            'Content-Type': 'text/html'
        });

        response.write('<h1>Not found</h1>');

        response.end();
    }

    
});

myServer.listen(12345);