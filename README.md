# States and Municipalities of the Mexican Republic :mexico:	

Laravel Seeder and SQL Insert of States and Municipalities of the Mexican Republic

## Description 
This repository contains two tables with information about states and municipalities in Mexico, along with Laravel migrations and seeders for implementing the data into a Laravel application:

- states: Contains the name and ID (key) of each state.
- townships: Contains the name, ID (key), and the state to which each municipality belongs.
The tables are designed to be used together to obtain comprehensive information about Mexican states and municipalities.

## Usage

### Laravel Setup

1. Make sure you have Laravel installed and a Laravel project created.
2. Copy the states and townships tables from the 'database/migrations' folder into your Laravel project's 'database/migrations' folder.
3. Run the following command to migrate the tables into your Laravel database:

```bash
php artisan migrate
```

4. Copy the StatesTableSeeder and TownshipsTableSeeder files from the database/seeds folder into your Laravel project's database/seeds folder.
5. Run the following command to seed the tables with the provided data:

```bash
php artisan db:seed
```

## License
This repository is licensed under the MIT License.  For more information, see the LICENSE file within the repository.

