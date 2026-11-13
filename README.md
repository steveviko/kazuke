# Kazuke

Kazuke is a PHP/MySQL website for presenting travel, tourism, real-estate, and other service offerings. It includes a public catalog with search and enquiry forms, plus a session-protected administration area for maintaining services, items, pages, customers, and messages.

## Features

- Service and package listings with images, descriptions, locations, prices, and categories
- Search and detail pages for catalog items
- Contact and enquiry forms
- Static content pages such as About and Contact
- Admin dashboard with counts for customers, bookings, services, items, and messages
- Admin management for:
  - Service items and images
  - Services and special types/brands
  - Customers
  - Page content
  - Messages and enquiries

## Technology

- PHP
- MySQL
- PDO and MySQLi database access
- Bootstrap, jQuery, Font Awesome, and other bundled front-end assets
- Composer metadata is present, although the application currently has no declared Composer dependencies

## Project structure

```text
.
├── index.php                 # Public home page
├── about.php                 # About page
├── contact.php               # Contact form
├── search.php                # Catalog search
├── category.php              # Items filtered by service/category
├── brand.php                 # Items filtered by special type/brand
├── single.php                # Item detail page
├── book.php                  # Booking/enquiry view
├── admin/                    # Administrator login and management pages
├── includes/                 # Shared public-page components
├── admin/includes/           # Shared admin components and database helpers
├── css/, js/, fonts/         # Front-end assets
├── images/                   # Public images
└── video/                    # Media assets
```

## Requirements

- PHP with the PDO MySQL and MySQLi extensions enabled
- MySQL or MariaDB
- A web server such as Apache or Nginx with PHP support
- A database populated with the tables expected by the application

## Local setup

1. Clone the repository into the document root of a PHP-enabled web server.
2. Create a MySQL database.
3. Configure the database connection in both `config.php` and `admin/includes/config.php`.
4. Ensure the database contains the tables used by the application, including `admin`, `services`, `brands`, `items`, `TblTourPackages`, `tblbooking`, `tblenquiry`, `tblissues`, and `tblpages`.
5. Make the upload directory writable by PHP:

   ```text
   admin/pacakgeimages/
   ```

6. Open the project URL in a browser. The administration login is available at:

   ```text
   /admin/
   ```

There is no database schema or seed dump in this repository, so the database must be supplied separately.

For a quick development server, from the project root run:

```bash
php -S localhost:8000
```

Then visit <http://localhost:8000/>.

## Configuration and security

Database credentials are currently stored directly in PHP configuration files and some legacy pages use separate MySQLi connection settings. Replace all placeholder or development credentials before deployment, keep secrets out of version control, and standardize the connection configuration before exposing the application publicly.

The admin login currently uses MD5 password hashes. This should be migrated to `password_hash()` and `password_verify()` before production use. Uploaded files should also be validated by type and size, and the admin area should be deployed behind HTTPS.

## Notes

- The application contains legacy naming and compatibility code, including both PDO and MySQLi access.
- Some older pages reference local database settings while others use the shared remote configuration; verify every page after setting up a local database.
- No automated test suite or build pipeline is included.

## License

No license file is currently included. Add a license before redistributing the project.
