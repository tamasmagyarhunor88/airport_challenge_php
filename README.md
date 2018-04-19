# Airport challenge in PHP
        ______
        _\____\___
=  = ==(____PHP____)
          \_____\___________________,-~~~~~~~`-.._
          /     o o o o o o o o o o o o o o o o  |\_______________
         /							  \	
	 `~-.__       __..----..__  airHUNOR              	  /
                `---~~\___________/------------````````````````````
          ~~~~~~~  ===(_________)



To deepen my basic PHP knowledge, I start doing our lovely Airport challenge

### Download and run
Make sure you have Composer installed on your machine. Composer is a PHP dependency/package manager like bundler for Ruby or NPM for NodeJS.
```
$ git clone https://github.com/tamasmagyarhunor88/airport_challenge_php.git
$ cd airport_challenge_php
$ composer install
```
To run tests
```
$ vendor/bin/phpunit Tests/AirportTest.php
$ vendor/bin/phpunit Tests/PlaneTest.php
```

### User Stories
```
As an air traffic controller
To get passengers to a destination
I want to instruct a plane to land at
  an airport and confirm that it has landed
```

### Notes
It is not clear what is the convention for file/function/class/test namings so there might be a little unconsistency. Probably I will get back in future to refactor correctly 
