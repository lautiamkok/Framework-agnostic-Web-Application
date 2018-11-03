# Spectre

> Framework-agnostic web application

A minimal framework for framework-agnostic web applications. Read the ideas and motivations behind it:

* [Nuxt: Decoupling the view and controller in your PHP application](https://www.codementor.io/lautiamkok/decoupling-the-view-and-controller-in-your-php-application-introducing-nuxt-c4awxbol0)

* [Creating a Nuxt application with Koa, Express, and Slim](https://www.codementor.io/lautiamkok/creating-a-nuxt-application-with-koa-express-and-slim-cfqjp0ylw)

* [Creating a R web application with Nuxt and Plumber](https://www.codementor.io/lautiamkok/creating-a-r-web-application-with-nuxt-and-plumber-dnsjkq4wq)

* [Creating a Nuxt application with Python frameworks](https://www.codementor.io/lautiamkok/creating-a-nuxt-application-with-python-frameworks-kd2yjqsfx)

* [Creating a Modular Koa Application](https://www.codementor.io/lautiamkok/creating-a-modular-koa-application-cfprkirld)

* [Creating a Modular Slim Application](https://www.codementor.io/lautiamkok/creating-a-modular-slim-application-gtj9fcxq0)

An extended project: [Monsoon - a PHP Content Management System (CMS)](https://bitbucket.org/lau_tiamkok/monsoon/).

# Requirements

## Server API

1. [Slim (PHP)](https://www.slimframework.com/), or:

* [Koa (NodeJS)](http://flask.pocoo.org/)
* [Express (NodeJS)](https://expressjs.com/)
* [Flask (Python)](http://flask.pocoo.org/)
* [Lumen (PHP)](https://lumen.laravel.com/)

## Server Client

1. [Nuxt (JavaScript)](https://nuxtjs.org/), or:

* [Next](https://nextjs.org/)
* [Angular Universal](https://angular.io/guide/universal)

# Quick Setup (an example)

## Nuxt Setup

``` bash
# install dependencies
$ npm install

# serve with hot reload at localhost:3000
$ npm run dev

# build for production and launch server
$ npm start
```

## Slim (PHP) Setup

``` bash
# Dependencies
$ composer update

# Production build localhost:8181
$ cd [my-app-name]
$ php -S 0.0.0.0:8181 -t public
```

# References

* https://j11y.io/javascript/a-framework-agnostic-model/
* https://whatis.techtarget.com/definition/agnostic
* https://desmart.com/blog/dont-hard-code-yourself-make-your-code-framework-agnostic
