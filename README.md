# LAravel with integrated simple referral system!

-   [DEMO video](https://streamable.com/kdc6dc)

# Installation

1. Clone the repo

2. cd larareferral

3. Inastall Composer Dependencies

    - composer install

4. Install NPM Dependencies

    - npm install

5. Run NPM

    - npm run dev

6. Create a copy of .env file

    - cp .env.example .env

7. Generate an app encryption key

    - php artisan key:generate

8. Create an empty database for the application

9. In the .env file, add database information to allow Laravel to connect to the database

10. Migrate the database
    - php artisan migrate
