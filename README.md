<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About SOA Laravel

This project is a personal blueprint starter with customized SOA architecture.

Service-Oriented Architecture (SOA) is a stage in the evolution of application development and/or integration. It defines a way to make software components reusable using the interfaces. Formally, SOA is an architectural approach in which applications make use of services available in the network.

Laravel is accessible, powerful, and provides tools required for large, robust applications.

[Devat Karetha](https://github.com/dekts)

## Install

You can create new Laravel project using git clone

`git clone git@github.com:dekts/laravel-9-architecture.git`

After the project is created run the following commands

`cd laravel-9-architecture`

Install the dependencies using composer

`composer install`

Copy the environment from .env.example to .env and add database connection

`copy .env.example .env`

Then generate application key

`php artisan key:generate`

Then create storage link

`php artisan storage:link`

Then run the migrations

`php artisan migrate:fresh`

## SOA Structure

```
app
├── Exceptions
│    └── Core
│    │     ├── GeneralException.php
│    │     ├── GeneralIndexException.php
│    │     ├── GeneralNotFoundException.php
│    │     ├── GeneralSearchException.php
│    │     ├── GeneralStoreException.php
│    │     ├── GeneralUpdateException.php
│    │     ├── GeneralDestroyException.php
│    │     ├── FormRequestTableNotFoundException.php
│    └── Example
│    │     ├── ExampleIndexException.php
│    │     ├── ExampleNotFoundException.php
│    │     ├── ExampleSearchException.php
│    │     ├── ExampleStoreException.php
│    │     ├── ExampleUpdateException.php
│    │     ├── ExampleDestroyException.php
│    └── ExampleType
│         ├── ExampleTypeIndexException.php
│         ├── ExampleTypeNotFoundException.php
│         ├── ExampleTypeSearchException.php
│         ├── ExampleTypeStoreException.php
│         ├── ExampleTypeUpdateException.php
│         ├── ExampleTypeDestroyException.php
├── Filters
│    └── Core
│         ├── FilterBuilder.php
│         ├── QueryFilter.php
├── Helpers
│    └── Core
│         ├── Helper.php
├── Http
│    └── Controllers
│    │     └── Api
│    │     │      └── Core
│    │     │      │    ├── ApiController.php
│    │     │      └── Example
│    │     │      │    ├── ExampleController.php
│    │     │      └── ExampleType
│    │     │           ├── ExampleTypeController.php
│    │     └── Auth
│    │     │     ├── AuthenticatedSessionController.php
│    │     │     ├── ConfirmablePasswordController.php
│    │     │     ├── EmailVerificationNotificationController.php
│    │     │     ├── EmailVerificationPromptController.php
│    │     │     ├── NewPasswordController.php
│    │     │     ├── PasswordResetLinkController.php
│    │     │     ├── RegisteredUserController.php
│    │     │     ├── VerifyEmailController.php
│    │     └── Example
│    │     │     ├── ExampleController.php
│    │     └── ExampleType
│    │     │     ├── ExampleTypeController.php
│    │     ├── Controller.php
│    └── Requests
│         └── Auth
│         │     ├── LoginRequest.php
│         └── Core
│         │     ├── FormRequest.php
│         │     ├── CreateFormRequest.php
│         │     ├── UpdateFormRequest.php
│         │     ├── DeleteFormRequest.php
│         │     ├── ShowFormRequest.php
│         │     ├── SearchFormRequest.php
│         └── Example
│         │     ├── CreateExampleRequest.php
│         │     ├── UpdateExampleRequest.php
│         │     ├── DeleteExampleRequest.php
│         │     ├── ShowExampleRequest.php
│         │     ├── SearchExampleRequest.php
│         └── ExampleType
│         │     ├── CreateExampleTypeRequest.php
│         │     ├── UpdateExampleTypeRequest.php
│         │     ├── DeleteExampleTypeRequest.php
│         │     ├── ShowExampleTypeRequest.php
│         │     ├── SearchExampleTypeRequest.php
│         ├── Controller.php
├── Interfaces
│    └── Core
│    │     ├── FilterInterface.php
│    │     ├── RepositoryInterface.php
│    │     ├── SearchInterface.php
│    └── Example
│    │     ├── ExampleInterface.php
│    └── ExampleType
│          ├── ExampleTypeInterface.php
├── Models
│    └── Example
│    │     ├── Example.php
│    └── ExampleType
│          ├── ExampleType.php
├── Repositories
│    └── Core
│    │     ├── Repository.php
│    └── Example
│    │     ├── ExampleRepository.php
│    └── ExampleType
│          ├── ExampleTypeRepository.php
├── Scopes
│    └── You can design scopes here
├── Services
│    └── Example
│    │    ├── ExampleService.php
│    └── ExampleType
│         ├── ExampleTypeService.php
├── Traits
│    └── Core
│        ├── ApiResponses.php
│        ├── Filterable.php
├── Transformers
│    └── Core
│    │     ├── EmptyResource.php
│    │     ├── EmptyResourceCollection.php
│    └── Example
│    │     ├── ExampleResource.php
│    └── ExampleType
│    │     ├── ExampleTypeResource.php
│    └── ExampleType
│          ├── ExampleTypeResource.php
├── View
│    └── Components
│    ├── AppLayout.php
│    ├── GuestLayout.php
```
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
