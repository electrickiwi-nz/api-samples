from http.server import BaseHTTPRequestHandler, HTTPServer
from os import path

DIR_PATH = path.abspath(path.dirname(__file__))

hostName = "localhost"
hostPort = 5080


class RequestHandler(BaseHTTPRequestHandler):

    content_type = 'text/html'

    def do_GET(self):
        _path = self.getPath()
        if _path is None:
            self.send_response(404)
            self.end_headers()
            return
        self.send_response(200)
        self.send_header('Content-Type', self.content_type)
        self.end_headers()
        self.wfile.write(self.getContent(_path))

    def getPath(self):
        if self.path == '/':
            return path.join(DIR_PATH, 'index.html')
        if self.path == '/auth':
            return path.join(DIR_PATH, 'auth.html')
        elif self.path.startswith("/callback"):
            return path.join(DIR_PATH, "callback.html")
        elif self.path.startswith("/auth.js"):
            return path.join(DIR_PATH, "auth.js")

    def getContent(self, content_path):
        with open(content_path, mode='r', encoding='utf-8') as f:
            content = f.read()
        return bytes(content, 'utf-8')


myServer = HTTPServer((hostName, hostPort), RequestHandler)
myServer.serve_forever()
