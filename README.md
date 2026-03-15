Laravel Artisan Commands

To create a Laraval project `composer create-project laravel/laravel my-project` 

Code Generation (Scaffolding)
| Command                                          | Note                                       |
| ------------------------------------------------ | ------------------------------------------ |
| `php artisan make:model ModelName`               | Creates a new Eloquent model               |
| `php artisan make:controller ControllerName`     | Creates a controller class                 |
| `php artisan make:migration migration_name`      | Creates a database migration file          |
| `php artisan make:middleware MiddlewareName`     | Creates a middleware class                 |
| `php artisan make:command CommandName`           | Creates a custom Artisan command           |
| `php artisan make:factory FactoryName`           | Creates a factory for generating fake data |
| `php artisan make:seeder SeederName`             | Creates a database seeder                  |
| `php artisan make:request RequestName`           | Creates a form request for validation      |
| `php artisan make:policy PolicyName`             | Creates a policy for authorization         |
| `php artisan make:event EventName`               | Creates a new event class                  |
| `php artisan make:listener ListenerName`         | Creates an event listener                  |
| `php artisan make:job JobName`                   | Creates a queued job                       |
| `php artisan make:mail MailName`                 | Creates a mail class                       |
| `php artisan make:notification NotificationName` | Creates a notification class               |


Database Management
| Command                                  | Note                                    |
| ---------------------------------------- | --------------------------------------- |
| `php artisan migrate`                    | Runs all pending migrations             |
| `php artisan migrate:rollback`           | Rolls back the last migration batch     |
| `php artisan migrate:reset`              | Rolls back all migrations               |
| `php artisan migrate:refresh`            | Rolls back and re-runs migrations       |
| `php artisan migrate:fresh`              | Drops all tables and re-runs migrations |
| `php artisan db:seed`                    | Seeds the database with sample data     |
| `php artisan db:seed --class=SeederName` | Runs a specific seeder                  |

Application Maintenance
| Command            | Note                                           |
| ------------------ | ---------------------------------------------- |
| `php artisan down` | Puts the application into maintenance mode     |
| `php artisan up`   | Brings the application out of maintenance mode |

Cache Management
| Command                      | Note                            |
| ---------------------------- | ------------------------------- |
| `php artisan cache:clear`    | Clears application cache        |
| `php artisan config:cache`   | Caches configuration files      |
| `php artisan config:clear`   | Clears configuration cache      |
| `php artisan route:cache`    | Caches route definitions        |
| `php artisan route:clear`    | Clears route cache              |
| `php artisan view:clear`     | Clears compiled view files      |
| `php artisan optimize`       | Optimizes framework performance |
| `php artisan optimize:clear` | Clears all optimization caches  |

Development & Debugging

| Command                         | Note                                     |
| ------------------------------- | ---------------------------------------- |
| `php artisan serve`             | Starts the local development server      |
| `php artisan tinker`            | Opens interactive PHP shell              |
| `php artisan route:list`        | Shows all application routes             |
| `php artisan about`             | Displays Laravel environment information |
| `php artisan list`              | Lists all Artisan commands               |
| `php artisan help command_name` | Shows help for a specific command        |


Application Setup
| Command                      | Note                                 |
| ---------------------------- | ------------------------------------ |
| `php artisan key:generate`   | Generates application encryption key |
| `php artisan storage:link`   | Creates storage symbolic link        |
| `php artisan vendor:publish` | Publishes package assets and configs |

Queue & Jobs
| Command                     | Note                            |
| --------------------------- | ------------------------------- |
| `php artisan queue:work`    | Processes queued jobs           |
| `php artisan queue:listen`  | Listens for incoming queue jobs |
| `php artisan queue:restart` | Restarts queue workers          |
| `php artisan queue:failed`  | Shows failed jobs               |
| `php artisan queue:retry`   | Retries failed jobs             |


Task Scheduling
| Command                     | Note                  |
| --------------------------- | --------------------- |
| `php artisan schedule:run`  | Runs scheduled tasks  |
| `php artisan schedule:list` | Shows scheduled tasks |


