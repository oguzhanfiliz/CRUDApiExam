apt-get update 
apt-get install -y docker.io git
apt-install docker-compose -y
git clone https://github.com/oguzhanfiliz/PathCaseCRUDAPI.git
cd ./PathCaseCRUDAPI
pwd



docker-compose up -d


docker exec -it laravel /bin/sh


php artisan migrate --seed