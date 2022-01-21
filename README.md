[comment]: <> (<p align="center">)

[comment]: <> (<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>)

[comment]: <> (<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>)

[comment]: <> (<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>)

[comment]: <> (<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>)

[comment]: <> (</p>)
## İçindekiler
Docker [Docker](#docker)
1. [Clone](#clone)
2. [Authentication](#authentication)
3. [Register](#register)
4. [Login](#login)
5. [Logout](#logout)
6. [Product Get](#product-get)
7. [Product Get All](#product-get-all)
8. [Create Product](#create-product)
9. [Update Product](#update-product)
10. [Delete Product](#delete-product)
11. [Search Product](#search-product)
12. [Orders get](#orders-get)
13. [New Order](#new-order)
14. [Order Update](#order-update)
15. [Order Search](#order-search)



### Clone
```gitexclude
git clone https://github.com/oguzhanfiliz/PathCaseCRUDAPI.git

```
```
cd PathCaseCRUDAPI
```

```
composer install
```
- .env.example file configiration
- - DB_DATABASE,APP_URL, DB_USERNAME,DB_PASSWORD 
- - -


``` 
php artisan migrate --seed
```
- **_You should see database seeding completed successfully_**

```gitexclude
php artisan serve
```
**live at http://127.0.0.1:8000 if you haven't changed it**


Create,Read,Update,Delete,Search

**Seeder created for you**

`email:oguzhanfiliz@outlook.com`

`password:123456`

return api key.

## Authentication
### Register

```http request
http://localhost:8000/api/register
```

```json
{
    'name' : 'example',
    'email' : 'example@gmail.com',
    'password': '123456',
    'password_confirmation' : '123456'
}

```


**[⬆ return top](#İçindekiler)**
### Login

```http request
http://localhost:8000/api/login
```

```json 
{
    'email' : 'example@gmail.com',
    'password' : '123456'
}
```

**[⬆ return top](#İçindekiler)**
### Logout

```http request
http://localhost:8000/api/logout
```
**[⬆ return top](#İçindekiler)**
### Product Get

```http request
http://localhost:8000/api/products/4
```

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
**[⬆ return top](#İçindekiler)**
### Product Get All
```http request
http://localhost:8000/api/products
```
```json

[
    {
        "id": 1,
        "name": "Nisi aliquam aut consequuntur.",
        "slug": "Voluptatem consectetur sit repellat ullam.",
        "description": "Perferendis maxime aut sint sequi. Rerum eum sint dolor saepe. Pariatur nam fugit rerum veniam vel iste. Dolorem doloremque accusantium ipsam.",
        "price": "2.00",
        "created_at": "2022-01-20T17:46:25.000000Z",
        "updated_at": "2022-01-20T17:46:25.000000Z"
    },
    {
        "id": 2,
        "name": "Enim quas sed reprehenderit.",
        "slug": "Aut et fugiat nobis qui dignissimos.",
        "description": "Animi laudantium voluptates voluptatem tempora. Reiciendis est nobis eligendi et. Voluptatum ullam officia nemo minima. Est repellendus laboriosam quos nihil.",
        "price": "3.00",
        "created_at": "2022-01-20T17:46:25.000000Z",
        "updated_at": "2022-01-20T17:46:25.000000Z"
    },
    {
        "id": 3,
        "name": "Nobis consequatur eos ex aut.",
        "slug": "Et qui.",
        "description": "Atque deserunt est modi magnam nihil non. Ab itaque aliquid maiores quia. Sunt rerum consequatur quam magnam voluptate.",
        "price": "6.00",
        "created_at": "2022-01-20T17:46:25.000000Z",
        "updated_at": "2022-01-20T17:46:25.000000Z"
    },
    {
        "id": 4,
        "name": "Accusamus ut mollitia rerum aut vero.",
        "slug": "Molestiae et assumenda.",
        "description": "Ipsa ipsam at dolor recusandae quaerat voluptas consequatur fugit. Nobis enim eligendi nostrum distinctio dolor labore odio. Vel molestiae qui minima voluptates.",
        "price": "8.00",
        "created_at": "2022-01-20T17:46:25.000000Z",
        "updated_at": "2022-01-20T17:46:25.000000Z"
    },
    {
        "id": 5,
        "name": "Sunt est sit enim rerum totam debitis esse esse.",
        "slug": "Non magni doloremque voluptatibus.",
        "description": "Non animi recusandae vel necessitatibus adipisci qui commodi. Asperiores enim perspiciatis nam dolores et odit iusto et. Harum praesentium aut voluptatem vero aut et tenetur. Eos in qui ab qui sunt.",
        "price": "7.00",
        "created_at": "2022-01-20T17:46:25.000000Z",
        "updated_at": "2022-01-20T17:46:25.000000Z"
    }
]
```
**[⬆ return top](#İçindekiler)**
### Create Product
```http request
http://localhost:8000/api/products?name=iphonesssssss&slug=iphonesssssss&description=abcsss&price=555
```

```json
{
    'name': 'example',
    'slug': 'example',
    'description' : 'example',
    'price' : '555'
}
```
**[⬆ return top](#İçindekiler)**
### Update product
```http request
http://localhost:8000/api/products/3
```
```json
{
    'price' : '444'
}

```
**[⬆ return top](#İçindekiler)**
### Delete Product
```http request
http://localhost:8000/api/products/5
```
**[⬆ return top](#İçindekiler)**
### Search Product
```http request
http://localhost:8000/api/products/search/example
```

```json
[
    {
        "id": 1,
        "name": "Nisi aliquam aut consequuntur.",
        "slug": "Voluptatem consectetur sit repellat ullam.",
        "description": "Perferendis maxime aut sint sequi. Rerum eum sint dolor saepe. Pariatur nam fugit rerum veniam vel iste. Dolorem doloremque accusantium ipsam.",
        "price": "2.00",
        "created_at": "2022-01-20T17:46:25.000000Z",
        "updated_at": "2022-01-20T17:46:25.000000Z"
    }
]
```
**[⬆ return top](#İçindekiler)**
### Orders get 
 **The order date has not arrived and the user added** 

```http request
http://localhost:8000/api/orders
```

```json
[
    {
        "id": 7,
        "name": "Siparis35",
        "customerID": 7,
        "productID": 6,
        "quantity": 25,
        "address": "Kütahya",
        "shippingDate": "2023-01-22 00:01:00",
        "created_at": "2022-01-20T18:40:44.000000Z",
        "updated_at": "2022-01-20T18:40:44.000000Z"
    }
]
```
**[⬆ return top](#İçindekiler)**
### New Order
```http request
http://localhost:8000/api/orders?name=Siparis35&quantity=25&address=Kütahya&productID=6&shippingDate=22-01-2023
```

```json
{
    "name": "Siparis35",
    "customerID": 7,
    "quantity": "25",
    "address": "Kütahya",
    "productID": "6",
    "shippingDate": "2023-01-22 00:01:00",
    "updated_at": "2022-01-20T18:40:44.000000Z",
    "created_at": "2022-01-20T18:40:44.000000Z",
    "id": 7
}
```
**[⬆ return top](#İçindekiler)**
### Order Update
```http request
http://localhost:8000/api/orders/17?shippingDate=2022-02-12
```

```json
{
    'shippingDate': '2022-02-12'
}


```

**[⬆ return top](#İçindekiler)**
### Order Search
```http request
http://localhost:8000/api/orders/search/sipa
```

```json
[
    {
        "id": 7,
        "name": "Siparis35",
        "customerID": 7,
        "productID": 6,
        "quantity": 25,
        "address": "Kütahya",
        "shippingDate": "2023-01-22 00:01:00",
        "created_at": "2022-01-20T18:40:44.000000Z",
        "updated_at": "2022-01-20T18:40:44.000000Z"
    }
]
```
## Docker
**Clone**
```http request
git clone https://github.com/oguzhanfiliz/PathCaseCRUDAPI.git
cd /PathCaseCRUDAPI
```
**Docker Compose Run**

detach mode optional

``` dockerfile
docker compose up -d
```
Go to container sh

```json
docker exec -it laravel /bin/sh
```

**DB migration**

seed optional
```json
php artisan migrate --seed
```
if you get an error change "migrate" to "migrate:refresh" 

Success...



Created Oğuzhan Filiz


**[⬆ return top](#İçindekiler)**
