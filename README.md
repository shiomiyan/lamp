```
mkcert -key-file ./config/certs/server.key -cert-file ./config/certs/server.pem localhost 127.0.0.1 ::1
docker-compose up --build
```
