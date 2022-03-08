apt-get update 
apt-get install -y docker.io git
apt-install docker-compose -y
git clone https://github.com/oguzhanfiliz/PathCaseCRUDAPI.git
cd ./PathCaseCRUDAPI
docker compose up -d