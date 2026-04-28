# ETEC Learning Dashboard

A simple PHP course project that presents a modern learning dashboard UI for an education platform.  
This project is structured with MVC-style folders (`app`, `views`, `routes`, `config`) and is designed to run in a local XAMPP environment.

## Course Project Description

This dashboard represents a training/course management concept with:

- learner and instructor activity metrics
- completion progress summary
- top learner performance list
- responsive layout with reusable view components (`header`, `sidebar`, `main`)

The current version focuses on front-end presentation and page composition in PHP, making it a good base for adding real routing, controllers, authentication, and database features.

## Tech Stack

- PHP (server-side rendering)
- HTML/CSS
- Tailwind CSS (via CDN)
- Google Fonts (Plus Jakarta Sans)
- XAMPP (Apache + PHP local server)

## Project Structure

```
ETEC/
	app/
		controllers/
		models/
	config/
		database.php
	public/
		css/
			dashboard.css
		js/
	routes/
		web.php
	views/
		layout/
			header.php
			sidebar.php
		pages/
			home.php
		main.php
	index.php
	composer.json
```

## Dependencies

This project now uses Composer for dependency management.

Runtime requirements:

- PHP `>=8.1`
- PHP extension `ext-json`
- PHP extension `ext-mbstring`
- PHP extension `ext-pdo`

## Installation

1. Place the project in your XAMPP `htdocs` folder:

   `C:/xampp/htdocs/ETEC`

2. Install Composer dependencies from the project root:

   ```bash
   composer install
   ```

3. Start Apache from XAMPP Control Panel.

4. Open in your browser:

   `http://localhost/ETEC`

## Notes

- `config/database.php` and `routes/web.php` are currently placeholders and can be extended as your course project grows.
- Tailwind CSS is currently loaded from CDN in `index.php`.

## Next Enhancements

- add route handling in `routes/web.php`
- create controllers in `app/controllers`
- connect PDO in `config/database.php`
- move static sample data into model files

sdfsdfsdfsdfsdf