# The Application that visualizes the amount of effort
As of 2020, work at home has increased. At that time, it is difficult to maintain motivation because of the work at home.
on that occasion, I try to keep my motivation by recording my efforts in this app.

# Requirement
- PHP(>= 6.0)
- MySQL
- Heroku

# Set up
- git clone https://github.com/taisei-matsu/my_app.git
- composer install
- php artisan migrate --seed
- php artisan serve

# Usage
## In case you are registered
- Access to http://127.0.0.1:8000/login
- Please log in as a demo user
  - E-Mail Address: tom@example.com
  - Password: 'password'

## In case you are a new user
- Access to http://localhost:8000/register
- Please register as a demo user
  - E-Mail Address: becky@example.com
  - Password: 'password1'
  - Password confirmation: 'password1'
 
# DEMO
## In case you are registered
https://user-images.githubusercontent.com/65840756/96372093-4f6e4b80-11a0-11eb-8c5e-c9db8786f0e2.gif

## In case you are a new user
https://user-images.githubusercontent.com/65840756/96372096-539a6900-11a0-11eb-85dc-eb4acf6f57e6.gif
