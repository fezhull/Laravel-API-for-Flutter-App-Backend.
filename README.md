<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Laravel API Integration for Flutter Frontend
This guide outlines how to integrate a Laravel API with a Flutter frontend for the Property Management System. The API is responsible for managing the data, while Flutter handles the frontend interface.

## Table of Contents

1. Introduction
2. API Setup
3. Endpoints
4. Flutter Integration
5. Setup HTTP Client
6. Handling API Responses
7. Testing the Integration
8. Troubleshooting
9. Conclusion

## Introduction
In this integration guide, you’ll learn how to connect a Flutter mobile application to a Laravel backend API. The Laravel API will manage CRUD (Create, Read, Update, Delete) 

operations for properties in the Property Management System, and Flutter will be the frontend to interact with the backend.

This API integration allows the Flutter app to fetch data from the Laravel backend, submit new properties, edit existing properties, and delete properties.

## API Setup
Before integrating the API into Flutter, ensure that your Laravel API is up and running.

## 1. Clone the Laravel Backend Repository

If you haven't set up the Laravel backend yet, you can follow these steps:

git clone https://github.com/yourusername/property-management-backend.git

cd property-management-backend

composer install

php artisan migrate

php artisan serve

Your backend should now be running on http://127.0.0.1:8000/ by default.

## 2. Set Up API Routes
Ensure that you have the necessary API routes in your routes/api.php file:

- Route::get('/properties', [PropertyController::class, 'index']);

- Route::get('/properties/{id}', [PropertyController::class, 'show']);

- Route::post('/properties', [PropertyController::class, 'store']);

- Route::put('/properties/{id}', [PropertyController::class, 'update']);

- Route::delete('/properties/{id}', [PropertyController::class, 'destroy']);

  The API controller PropertyController should have the corresponding methods: index(), show(), store(), update(), and destroy().

$$ Endpoints
The Laravel API provides the following endpoints for property management:

- GET /api/properties

Fetch a list of all properties.

- GET /api/properties/{id}

Fetch a specific property by its ID.

- POST /api/properties

Create a new property.

- PUT /api/properties/{id}

Update an existing property.

- DELETE /api/properties/{id}

Delete a specific property by its ID.


Laravel API Integration for Flutter Frontend
This guide outlines how to integrate a Laravel API with a Flutter frontend for the Property Management System. The API is responsible for managing the data, while Flutter handles the frontend interface.

Table of Contents
Introduction
API Setup
Endpoints
Flutter Integration
Setup HTTP Client
Handling API Responses
Testing the Integration
Troubleshooting
Conclusion
Introduction
In this integration guide, you’ll learn how to connect a Flutter mobile application to a Laravel backend API. The Laravel API will manage CRUD (Create, Read, Update, Delete) operations for properties in the Property Management System, and Flutter will be the frontend to interact with the backend.

This API integration allows the Flutter app to fetch data from the Laravel backend, submit new properties, edit existing properties, and delete properties.

API Setup
Before integrating the API into Flutter, ensure that your Laravel API is up and running.

1. Clone the Laravel Backend Repository
If you haven't set up the Laravel backend yet, you can follow these steps:

bash
Copy code
git clone https://github.com/yourusername/property-management-backend.git
cd property-management-backend
composer install
php artisan migrate
php artisan serve
Your backend should now be running on http://127.0.0.1:8000/ by default.

2. Set Up API Routes
Ensure that you have the necessary API routes in your routes/api.php file:

php
Copy code
Route::get('/properties', [PropertyController::class, 'index']);
Route::get('/properties/{id}', [PropertyController::class, 'show']);
Route::post('/properties', [PropertyController::class, 'store']);
Route::put('/properties/{id}', [PropertyController::class, 'update']);
Route::delete('/properties/{id}', [PropertyController::class, 'destroy']);
The API controller PropertyController should have the corresponding methods: index(), show(), store(), update(), and destroy().

Endpoints
The Laravel API provides the following endpoints for property management:

GET /api/properties
Fetch a list of all properties.

GET /api/properties/{id}
Fetch a specific property by its ID.

POST /api/properties
Create a new property.

PUT /api/properties/{id}
Update an existing property.

DELETE /api/properties/{id}
Delete a specific property by its ID.

<img width="746" alt="Screenshot 2024-12-08 174734" src="https://github.com/user-attachments/assets/77ea3cf1-63ff-49be-960e-e721491858f0">

<img width="628" alt="Screenshot 2024-12-08 174756" src="https://github.com/user-attachments/assets/c2687721-d262-4d55-b6cd-18e0890a251d">


## Flutter Integration

## 1. Setup HTTP Client

In your Flutter app, you will use the http package to communicate with the Laravel API. Follow these steps to set up the HTTP client:

-Add http dependency to pubspec.yaml

- Create an API service class

Create a class that will handle all the HTTP requests. This will simplify making API calls throughout your app.

-2. Model Class

Ensure you have a Property model to handle property data. Here's an example of the Property model:

3. Handling API Responses in Flutter

Now that the API service is set up, you can handle responses in the Flutter app and display them in the UI.

## Testing the Integration
Test API using Postman: Before testing on Flutter, ensure the backend API is working using Postman. Verify that endpoints return the correct data and handle requests as 

expected.

Test API in Flutter: Test the API integration on your Flutter frontend. Make sure to handle errors and loading states properly, especially if the API response is slow or fails.


Troubleshooting
CORS Issues: If you encounter CORS issues when making API calls from Flutter to the Laravel backend, ensure that you've set up the CORS middleware in Laravel 

(barryvdh/laravel-cors package).

API URL Not Found: Double-check the API base URL and make sure the Laravel server is running. If you’re using a physical device, ensure that the device can reach your local 

development server (you may need to use a local network IP).

API Authentication: If you require authentication for your API, make sure you handle the JWT tokens or OAuth properly in the headers for each API call.

##Conclusion
This guide helps you integrate a Laravel API with a Flutter frontend for managing properties in the Property Management System. Using the http package in Flutter, you can 
 
 interact with the API to fetch, create, update, and delete properties.

Feel free to adjust the code to suit your specific needs and make the system more advanced, such as adding authentication, validation, or pagination to the API.












- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
