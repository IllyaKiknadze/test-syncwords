## How to run
    - cd laradock
    - docker-compose up -d nginx postgres
    - docker-compose exec postgres bash
    - run code from "createdb.sh" in postgres container
    - exit postgres container
    - docker-compose exec workspace bash
    - composer install
    - php artisan migrate --seed
### Use Postman collection, export are in the root folder 
```
SyncWords.postman_collection.json
```
#### Generate token via triggering `` /api/get-token ``
