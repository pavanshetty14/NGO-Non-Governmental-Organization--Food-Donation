# NGO-Non-Governmental-Organization--Food-Donation
A web-based platform designed to connect **donors, NGOs, and volunteers** for efficient food donation and distribution. This system helps reduce food wastage and supports communities in need by streamlining the process of food collection and delivery.

---

## 🚀 Features
- **Donor Module**
  - Donate food via an online form
  - Find the nearest NGO location
  - Contact NGOs directly

- **NGO Module**
  - NGO registration & profile management
  - Track donations
  - Manage volunteers

- **Volunteer Module**
  - Volunteer registration portal
  - Task assignments from NGOs

- **Admin Panel**
  - Manage NGOs and volunteers
  - View and respond to contact queries
  - Track donation analytics

---

## 🛠️ Tech Stack
- **Frontend**: HTML, CSS  
- **Backend**: PHP  
- **Database**: MySQL  
- **Other**: Basic analysis & reporting tools  

---

## 📂 Project Structure
- `/NGO` → Main project files  
- `/Ad` → Admin panel (management, styles, images)  
- `/AN` → Analysis & reports  

---

## ⚙️ Setup Guide (Run Locally with XAMPP/WAMP)

### Prerequisites
- Install [XAMPP](https://www.apachefriends.org/) or [WAMP](https://www.wampserver.com/).
- Make sure **Apache** and **MySQL** services are running.

### Steps
1. Download or clone this repository:
   ```bash
   git clone https://github.com/your-username/NGO-Food-Donation.git

Copy the project folder into your server’s root directory:

For XAMPP: C:/xampp/htdocs/

For WAMP: C:/wamp/www/

Open phpMyAdmin in your browser:

http://localhost/phpmyadmin/


Create a new database (example: ngo_food).

Import the provided SQL file (if available) into this database.

Update connection.php with your database credentials:

$servername = "localhost";
$username = "root";   // default for XAMPP/WAMP
$password = "";       // default empty
$dbname = "ngo_food"; // your database name


Run the project in your browser:

http://localhost/NGO/

🎯 Objective

This system aims to:

Minimize food wastage

Ensure excess food reaches NGOs & needy communities

Provide a transparent, easy-to-use donation process

🤝 Contributing

Contributions are welcome! Feel free to fork this repo and submit a pull request.

📜 License

This project is open-source and available under the MIT License
.


Would you like me to also **write the SQL schema file (`ngo_food.sql`)** so that anyone cloning your repo can directly import it?

You said:
give password
ChatGPT said:

Got it 👍

By default, in XAMPP/WAMP, the MySQL root user has no password (just empty).

So in your connection.php, it should look like this:

$servername = "localhost";
$username = "root";
$password = "";  // default is empty
$dbname = "ngo_food";


👉 If you want to add a password (for security):

Open phpMyAdmin → go to User accounts.

Edit the root@localhost user → set a new password (e.g., 1234).

Then update your connection.php:

$servername = "localhost";
$username = "root";
$password = "1234";  // your new password
$dbname = "ngo_food";
