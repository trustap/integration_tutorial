README
======

About
-----

This repository is an accompaniment to the [Trustap integration
tutorials](https://docs.trustap.com/tutorials) for learning how to get up and
running with Trustap quickly.

Running
-------

Create `config.php` from `config.sample.php` and populate the `$client_id` and
`$client_secret` values with your Trustap client ID and secret. Then copy
`js/trustapi_config.sample.js` to `js/trustapi_config.js` and populate the
`clientId` value with your Trustap client ID.

Run `docker-compose up` to run the demo, which will be exposed at
`http://localhost:8080`. Visit the [MySQL seed
script](http://localhost:8080/reseed_mysql.php) to initialise the database
defined in `config.php`. You should now be able to browse [the
demo](http://localhost:8080).
