The code is done in Laravel 9.x
-I have used VS Code for coding and Postman for testing the API.
-The API's are available for the CRUD operation on Posts and a User Register and Login.

Instructions:
-Please make sure you config the db in your machine, and update the env file accordingly
-You can run the migration files to migrate all the db tables.
-Run the app using php artisan serve, you will get the app url as something like, "http://127.0.0.1:8000"

Tips to note while using Postman
-Please ensure you set the Header "Accept" as "application/json" and "Content-Type" as "application/json" in your Postman
-If you get a different app url Please replace the that with the one I'm sharing below.
-Please add Bearer Token from the Authorization tab and populate it with the token received from login/register API, for every other API's

Configuring the throttling limit
-Please change the value of "THROTTLE_LIMIT_PER_SEC" in the config/constants.php file. Default value is set to 5. So user wont be able to send more than 5 requests.

-Open Postman and run the following API's to create a user
[POST] User Registration
http://127.0.0.1:8000/api/auth/register
Request Body
{
    "name": "John Doe",
    "email": "john.doe@test.com",
    "password" : "P@12345"
}
Sample Output
{
    "status": true,
    "message": "User created successfully",
    "token": "4|jtooOieAgoCn65pxQxK4L81bXdVx2c7pfozadL9C"
}

[POST] User Login
http://127.0.0.1:8000/api/auth/login 
Request Body
{
    "email": "john.doe@test.com",
    "password" : "P@12345"
}
Sample Output
{
    "status": true,
    "message": "User logged in successfully",
    "token": "5|U2yDcPxlgsaDyssGDQQz0OfVHr27UrV7ZJtnt61N"
}

[POST] Create Post
http://127.0.0.1:8000/api/posts/
-Please ensure you add the Bearer token from Authorization tab and use the token you received from login/register API
Request Body
{
    "title": "My first Post",
    "description": "My first post body."
}
Sample Output
{
    "status": true,
    "message": "Post created successfully",
    "post": {
        "title": "My first Post",
        "description": "My first post body.",
        "updated_at": "2022-05-22T11:24:45.000000Z",
        "created_at": "2022-05-22T11:24:45.000000Z",
        "id": 4
    }
}

[GET] Get all Posts
http://127.0.0.1:8000/api/posts/
-Please ensure you add the Bearer token from Authorization tab and use the token you received from login/register API
No Request Body
Sample Output
{
    "status": true,
    "posts": [
        {
            "id": 2,
            "title": "My Second Post",
            "description": "My second post content",
            "created_at": "2022-05-22T06:03:15.000000Z",
            "updated_at": "2022-05-22T06:03:15.000000Z"
        }
    ]
}

[PUT] Update a Post
http://127.0.0.1:8000/api/posts/4
-Please ensure you add the Bearer token from Authorization tab and use the token you received from login/register API
Request Body
{
    "title": "My First Post edited",
    "description": "My first post content edited"
}
Sample Output
{
    "status": true,
    "message": "Post updated successfully",
    "post": {
        "id": 4,
        "title": "My First Post edited",
        "description": "My first post content edited",
        "created_at": "2022-05-22T11:24:45.000000Z",
        "updated_at": "2022-05-22T11:36:20.000000Z"
    }
}

[DELETE] Delete a Post
http://127.0.0.1:8000/api/posts/4
-Please ensure you add the Bearer token from Authorization tab and use the token you received from login/register API
No Request Body
Sample Output
{
    "status": true,
    "message": "Post deleted successfully"
}

