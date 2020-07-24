## About Project

Login with One - Time - Password (OTP)

## Setup Project

Install docker, docker-compose

Clone project: ```git clone https://github.com/daodhoa/sbTest.git```

Change directory to sbTest: ```cd sbTest```

Run following command:
- ```docker-compose up -d```
- ```docker exec -it sbTest_php_1 bash```
- ```cp .env.example .env```
- ```composer install```
- ```php artisan key:generate```
- ```php artisan migrate```

Open your favourite browser and access: ```http://localhost```
Everything is 200.

## Sequence Diagram
![alt text](https://github.com/daodhoa/sbTest/blob/master/SequenceDiagram.jpg?raw=true)
