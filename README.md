<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Api
Create,Read,Update,Delete,Search
###GetAll Request
```http://localhost:8000/api/products```

```javascript
[
    {
    "id": 1,
    "name": "Product One",
    "slug": "product-one",
    "description": "This is product one",
    "price": "99.99",
    "created_at": "2022-01-19T14:55:32.000000Z",
    "updated_at": "2022-01-19T14:55:32.000000Z"
    },
    {
    "id": 3,
    "name": "Product Two",
    "slug": "product-two",
    "description": "This is product two",
    "price": "299.00",
    "created_at": "2022-01-19T18:59:15.000000Z",
    "updated_at": "2022-01-19T18:59:15.000000Z"
    },
    {
    "id": 4,
    "name": "iphone",
    "slug": "iphone",
    "description": "abc",
    "price": "22.00",
    "created_at": "2022-01-19T19:12:16.000000Z",
    "updated_at": "2022-01-19T19:12:16.000000Z"
    }
]
```
###GetAll Request
```http://localhost:8000/api/products/4```

```javascript
[
    {
    "id": 4,
    "name": "iphone",
    "slug": "iphone",
    "description": "abc",
    "price": "22.00",
    "created_at": "2022-01-19T19:12:16.000000Z",
    "updated_at": "2022-01-19T19:12:16.000000Z"
    }
]
```

###Post Request
```http
http://localhost:8000/api/products?name=iphone&slug=iphone&description=abc&price=22
```
- Response

```javascript
[
    {
    "id": 4,
    "name": "iphone",
    "slug": "iphone",
    "description": "abc",
    "price": "22.00",
    "created_at": "2022-01-19T19:12:16.000000Z",
    "updated_at": "2022-01-19T19:12:16.000000Z"
    }
]
```

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).
