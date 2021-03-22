# taktzeitadmin
**Symfony version 4.4**

**Installation**
```
git clone https://github.com/meltsynv/taktzeidadmin.git

composer install
yarn
yarn encore dev-server
```
**Server Start**
```
symfony server:start
```
**Git Befehle**
```
git status
git pull
git add
git commit -m "youre commit text"
git push
```
**Generate user and admin**
```
.env [connect to ure database]
php bin/console doctrine:database:create

DataFixtures/AppFixtures.php [uncomment relevant part and run command:]
php bin/console doctrine:fixtures:load --append
```
