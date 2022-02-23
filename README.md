# The CRUD APP

### How to use

- Clone the repository with 
```bash
git clone __
```
- Copy below and edit database credentials there
```bash
cp .env.example .env
```

- Run 
```
composer install
```
- Run
```
php artisan key:generate
```
- Run the code below (it has some seeded data for your testing)
```
php artisan migrate:fresh --seed
```
- Run
```
php artisan serve
```

## Challenge Instructions to the Test

 - [ ] Design a website having 2 users admin and user
 - [ ] The user should view all the items and one particular item
 - [ ] Admin should have crud powers over the items and add small sections where the admin can see which user clicked what
 - [ ] Use SQL database



