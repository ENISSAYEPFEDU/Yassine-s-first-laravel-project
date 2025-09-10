# Laravel Fruits Project

This is a simple Laravel project created as part of my course assignment.  
The application displays a list of fruits with their names, prices, and IDs.

---

## Installation

1. Clone this repository:
   ```bash
   git clone https://github.com/<your-username>/laravel-fruits.git
   cd laravel-fruits
2. Install dependencies:
   ```bash
   git clone https://github.com/<your-username>/laravel-fruits.git
   cd laravel-fruits
3. Copy the .env file:
   ```bash
   cp .env.example .env
4. Generate the application key:
   ```bash
   php artisan key:generate
5. Run the development server:
   ```bash
   php artisan serve
    



   

## Discleamer

The vendor/ directory is not included in this repository because it contains all Composer dependencies and makes the project too heavy to upload (more than 50 MB).
Instead, it is ignored by Git following Laravel’s default .gitignore rules.
To restore it after cloning the project, simply run: 

    composer install on your terminal (bash)

This will download and install all required dependencies into the vendor/ folder.



## Fruits Page UI
<h1>Home page </h1>
<h2>
    <img width="431" height="246" alt="image" src="https://github.com/user-attachments/assets/e1e31564-9e5c-4b53-92b8-6cf7ecfc811c" />
</h2>
<h1>List of available fruit </h1>
<h2>
    <img width="1084" height="551" alt="image" src="https://github.com/user-attachments/assets/1a90056e-4111-4182-b829-932b85e91a38" />
</h2>

<h1>View details btn</h1>
<h2>
    <img width="1130" height="247" alt="image" src="https://github.com/user-attachments/assets/58d37615-eb6a-43e1-88a8-9b157b2b40d5" />
</h2>





### Explanation
- The title is displayed at the top of the page.  
- The fruits list is shown with their ID.  
- These values are passed from the route defined in `routes/`.  
- The view uses Blade templating (`@foreach`) to loop through the fruits.

    


