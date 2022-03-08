apt-get update 
apt-get install -y docker.io git
apt-install docker-compose -y
git clone https://github.com/oguzhanfiliz/PathCaseCRUDAPI.git
cd ./PathCaseCRUDAPI
pwd
docker-compose up -d
docker exec -it laravel /bin/sh
php artisan migrate --seed
docker run -d -p 9900:9000 -v /var/run/docker.sock:/var/run/docker.sock -v portainer_data:/data portainer/portainer