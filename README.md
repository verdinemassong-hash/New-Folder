# Contact Management Project

**Course:** Web Programming II
**Student:** MASSONG FOTE NESLAINE
**Assignment:** Activity (10 marks of the CA)

## Description
A simple PHP and MySQL application. A user fills in a contact form, the data is saved
in a database, and a Dashboard page displays all saved contacts in a table.

## Files
| File | Purpose |
|------|---------|
| `index.php` | Contact form (Name, Email, Contact) that posts to `submit.php` using the POST method |
| `submit.php` | Gets the POST data and inserts it into the database |
| `dashboard.php` | Displays the contacts in a table (Id, Name, Email, Contact) |
| `db.php` | Database connection |
| `style.css` | Styling shared by all pages |
| `database.sql` | Creates the `Contacts` database and the `my_contact` table |

## Database
- **Database:** `Contacts`
- **Table:** `my_contact` (`id`, `name`, `email`, `contact`)

## How to run
1. Install and start XAMPP (Apache and MySQL).
2. Copy the project folder into `C:\xampp\htdocs\`.
3. Open phpMyAdmin (`http://localhost/phpmyadmin`), go to the **SQL** tab, paste the contents of `database.sql` and click **Go**.
4. Open `http://localhost/contacts/index.php` and submit the form.
5. Open `http://localhost/contacts/dashboard.php` to see the saved contacts.

## Technologies
PHP, MySQL, HTML, CSS
