PROJECT INFORMATION
Project Title: Video Games API (Midterm Activity 2)
Names: Kirsten Khurt Reboredo, Jasmine Nicole Tan
Section: IT3E
Resource: Video Games

HOW TO RUN
1. Make sure you have the following requirements:
    -PHP
    -Composer
    -Laravel
    -SQLlite
    -Bruno API Client
2. Clone this repository
3. Open the project folder in a terminal.
4. Install the dependencies:
    -composer install
5. Create your environment file:
    -copy .env.example .env
6. Generate the application key:
    -php artisan key:generate
7. Create the SQLite database file if it does not exist:
    -database/database.sqlite
8. Run the database migrations:
    -php artisan migrate
9. Start the Laravel development server:
    -php artisan serve
10. Use the API base URL
    -http://127.0.0.1:8000

API ROUTES
| Method | Endpoint | Description | Token Required? |
|---|---|---|---|
| POST | `{{baseURL}}/register` | Register a user | No |
| POST | `{{baseURL}}/login` | Log in a user | No |
| GET | `{{baseURL}}/video-games` | Get game index without token (should result in a 401 error) | No |
| GET | `{{baseURL}}/video-games` | Get games with a token | Yes |
| POST | `{{baseURL}}/video-games` | Create a video game | Yes |
| POST | `{{baseURL}}/video-games` | Create a video game with an missing field (should result in 422 error) | Yes |
| GET | `{{baseURL}}/video-games/1` | Get one video game | Yes |
| GET | `{{baseURL}}/video-games/99999` | Get video game that does not exist | Yes |
| PUT | `{{baseURL}}/video-games/1` | Update a video game | Yes |
| DELETE | `{{baseURL}}/video-games/1` | Delete a video game | Yes |

WHY DOES DELETE RETURN A 204 INSTEAD OF A 200?
Jasmine Tan: A 204 error, named No Content, is a status code that explicitly states that there is no body/data to return. It informs the user that the request ran successfully, and the reason  why it has no body is because the content was deleted. This response is the best way to inform the user that the data was deleted by delivering no body, in comparison to just delivering a 200, where the user is unaware whether it ran successfully due to ignoring the command or due to successful deletion.

Khurt Reboredo: 
