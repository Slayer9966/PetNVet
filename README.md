```
# 🐾 Pet n Vet - Veterinary Management System

**Pet n Vet** is a full-stack veterinary management system built using **Laravel** and **MySQL**. This web application streamlines pet healthcare services, allowing users to manage their pets’ records, purchase products online, and for admins to handle users, inventory, and generate insightful reports — all through a clean, responsive UI.

---

## 🚀 Features

### 🐶 For Pet Owners
- Register and manage multiple pets.
- Track vaccination and treatment history.
- Purchase pet food, medicine, and accessories online.

### 🧑‍⚕️ For Admins
- Add and manage users and their pets.
- Monitor vaccination logs and treatment records.
- Manage product inventory and pricing.
- View detailed sales, stock, and profit reports.

### 📦 Inventory Management
- Track product stock in real-time.
- Auto-alerts for low inventory.
- Categorized product listings.

### 📊 Sales & Profit Reports
- View daily, weekly, or monthly earnings.
- Analyze sales performance by product.
- Monitor profit trends over time.

### 🔐 Secure System
- Role-based login system for users and admins.
- Built-in Laravel security features.

---

## 🛠️ Tech Stack

- **Backend:** Laravel 10
- **Database:** MySQL
- **Frontend:** Blade Templates (HTML/CSS/Bootstrap)
- **Authentication:** Laravel Breeze / Sanctum (based on your setup)
- **Email Service:** Mailtrap / SMTP

---

## 📂 Project Structure

---
PetnVet/
├── app/                   # Application logic (models, controllers)
├── public/                # Public assets and entry point
├── resources/             # Blade views and frontend assets
├── routes/                # Web routes
├── database/              # Migrations and seeders
├── .env.example           # Environment config example
├── composer.json          # PHP dependencies
└── artisan                # Laravel CLI
---

---

## ⚙️ Setup Instructions

### 1. Clone the Repository
---
git clone https://github.com/Slayer9966/PetNVet.git
cd PetNVet
---

### 2. Install Dependencies
---
composer install
npm install && npm run dev
---

### 3. Configure Environment
---
cp .env.example .env
php artisan key:generate
---

### 4. Set Up Database
Edit `.env` file with your DB credentials:
---
DB_DATABASE=petnvet
DB_USERNAME=root
DB_PASSWORD=yourpassword
---

Then run:
---
php artisan migrate --seed
---

### 5. Run the Application
---
php artisan serve
---

Visit: http://127.0.0.1:8000/

---

## 🔒 Admin Panel

Login as admin using seeded credentials or register manually.  
Admins can manage users, pets, inventory, sales reports, and more.

---

## 📧 Email Setup

Add these to `.env`:

---
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=admin@petnvet.com
MAIL_FROM_NAME="${APP_NAME}"
---

---

## 📌 Notes

- Payment gateway not integrated yet.
- Feature enhancements (PDF reports, appointment booking) are planned.

---

## 📜 License

This project is licensed under the **MIT License** — feel free to use and build upon it.

---

## 🙋‍♂️ Author

**Syed Muhammad Faizan Ali**  
📍 Islamabad, Pakistan  
📧 faizandev666@gmail.com  
🔗 [GitHub](https://github.com/Slayer9966) | [LinkedIn](https://www.linkedin.com/in/faizan-ali-7b4275297/)
```
