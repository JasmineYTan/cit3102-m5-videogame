PROJECT INFORMATION<br>
Project Title: Video Games API (Midterm Activity 2)<br>
Names: Kirsten Khurt Reboredo, Jasmine Nicole Tan<br>
Section: IT3E<br>
Resource: Video Games<br>

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
<br>
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

WHY DOES DELETE RETURN A 204 INSTEAD OF A 200?<br>
Jasmine Tan: A 204 No Content status code means that a request was successful, but there is no data/body to return. It tells the user that the request worked without sending any extra information. This is useful to know if the data was successfully deleted because there is no need to return the deleted content. Unlike a 200 OK response, a 204 response does not include a response body, helping to save data by avoiding unnecessary information. It makes it useful when the server only needs to confirm that an operation was successful.<br>

Khurt Reboredo: 
DELETE returns 204 because the server successfully deletes the requested record and has no content to send back. The 204 status tells you the operation succeeded without a response body. A 200 status usually means the server succeeded and returned a response, such as a message or data. Using 204 keeps the response simple when you only need to confirm the deletion.
