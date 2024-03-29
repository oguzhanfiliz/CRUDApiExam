[comment]: <> (<p align="center">)

[comment]: <> (<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>)

[comment]: <> (<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>)

[comment]: <> (<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>)

[comment]: <> (<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>)

[comment]: <> (</p>)
## Ingredients


Docker [Docker](#docker)
1. [Clone](#clone)
2. [Authentication](#authentication)
3. [Register](#register)
4. [Login](#login)
5. [Logout](#logout)
6. [Product](#product)
7. [Product Get](#product-get)
8. [Product Get All](#product-get-all)
9. [Create Product](#create-product)
10. [Update Product](#update-product)
11. [Delete Product](#delete-product)
12. [Search Product](#search-product)
13. [Order](#order)
14. [Orders get](#orders-get)
15. [New Order](#new-order)
16. [Order Update](#order-update)
17. [Order Search](#order-search)



### Clone
```gitexclude
git clone https://github.com/oguzhanfiliz/CRUDApiExam.git

```
```
cd CRUDApiExam
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

```javascript
  http://localhost:8000/api/register
```

```javascript
{
    'name' : 'example',
    'email' : 'example@gmail.com',
    'password': '123456',
    'password_confirmation' : '123456'
}

```


**[⬆ return top](#İçindekiler)**
### Login

```javascript
http://localhost:8000/api/login
```

```javascript 
{
    'email' : 'example@gmail.com',
    'password' : '123456'
}
```

**[⬆ return top](#İçindekiler)**
### Logout

```javascript
http://localhost:8000/api/logout
```
**[⬆ return top](#İçindekiler)**
## Product

### Product Get

```javascript
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
```javascript
http://localhost:8000/api/products
```
```javascript

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
```javascript
http://localhost:8000/api/products?name=iphonesssssss&slug=iphonesssssss&description=abcsss&price=555
```

```javascript
{
    'name': 'example',
    'slug': 'example',
    'description' : 'example',
    'price' : '555'
}
```
**[⬆ return top](#İçindekiler)**
### Update product
```javascript
http://localhost:8000/api/products/3
```
```javascript
{
    'price' : '444'
}

```
**[⬆ return top](#İçindekiler)**
### Delete Product
```javascript
http://localhost:8000/api/products/5
```
**[⬆ return top](#İçindekiler)**
### Search Product
```javascript
http://localhost:8000/api/products/search/example
```

```javascript
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

## Order

### Orders get 
 **The order date has not arrived and the user added** 

```javascript
http://localhost:8000/api/orders
```

```javascript
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
```javascript
http://localhost:8000/api/orders?name=Siparis35&quantity=25&address=Kütahya&productID=6&shippingDate=22-01-2023
```

```javascript
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
```javascript
http://localhost:8000/api/orders/17?shippingDate=2022-02-12
```

```javascript
{
    'shippingDate': '2022-02-12'
}


```

**[⬆ return top](#İçindekiler)**
### Order Search
```javascript
http://localhost:8000/api/orders/search/sipa
```

```javascript
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
```javascript
git clone https://github.com/oguzhanfiliz/CRUDApiExam.git 
cd ./CRUDApiExam 
composer install
```
**Docker Compose Run**

detach mode optional

``` dockerfile
docker compose up -d
```
Go to container sh

```javascript
docker exec -it laravel /bin/sh
```

**DB migration**

seed optional
```javascript
php artisan migrate --seed
```
if you get an error change "migrate" to "migrate:refresh" 

Success...


## Docker Magic

```javascript
sudo wget https://raw.githubusercontent.com/oguzhanfiliz/CRUDApiExam/main/start.sh
chmod 777 ./start.sh
sudo ./start.sh
```

please wait 1 minute and start db migration in laravel container sh

```javascript

php artisan migrate --seed

```





Created Oğuzhan Filiz


**[⬆ return top](#İçindekiler)**
