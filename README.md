# [2022] CoffeeTea ☕🍵 Online Ordering Website

**CoffeeTea** is a PHP-MySQL powered web application for a café that sells **coffee and tea online**.  
It allows customers to browse drinks, add them to a cart, and place orders, while the admin can manage products, users, and orders through a secure backend. This was developed for academic purpose.

<img width="1366" height="654" alt="279583925_341407211351438_7474071249411743852_n" src="https://github.com/user-attachments/assets/1454ce62-6a52-4dd3-b1e4-4b156951937b" />

<img width="1366" height="656" alt="280473667_694878665109950_2740604307020775108_n" src="https://github.com/user-attachments/assets/de29550d-a7bf-462e-a7d6-842a905627d7" />

<img width="1366" height="653" alt="280532940_413850293673900_1753901284758510400_n" src="https://github.com/user-attachments/assets/c6896ce1-f098-40f4-8a36-cddc3aaaabf4" />

---

## 🚀 Features

### Customer Side
- 🏠 **Homepage** with featured drinks  
- 📋 **Browse Menu** (`shop.php`, `view_page.php`)  
- 🔍 **Search Function** (`search_page.php`)  
- 🛒 **Shopping Cart** (`cart.php`)  
- 💳 **Checkout** (`checkout.php`)  
- ❤️ **Wishlist** (`wishlist.php`)  
- 👤 **User Accounts** – register, login, logout  
- 📩 **Contact Form** (`contact.php`)  

### Admin Side
- 📊 **Admin Dashboard** (`admin_page.php`)  
- ☕ **Manage Products** – add, edit, delete coffee/tea items  
- 🧾 **Manage Orders** – view and update order status  
- 👥 **Manage Users** – view registered customers  
- ✉️ **Manage Contact Messages** – from customers  

---

## ⚙️ Tech Stack

- **Frontend:** HTML, CSS, JavaScript  
- **Backend:** PHP  
- **Database:** MySQL (`shop_db.sql`)  

---

## 📂 Project Structure
```
CoffeeTea/
│── about.php
│── cart.php
│── checkout.php
│── contact.php
│── home.php
│── login.php / register.php / logout.php
│── orders.php
│── search_page.php
│── shop.php / view_page.php / wishlist.php
│── config.php                # Database connection
│── shop_db.sql               # Database schema
│
├── admin/ (or root prefixed with admin_)
│   ├── admin_page.php        # Dashboard
│   ├── admin_products.php
│   ├── admin_update_product.php
│   ├── admin_orders.php
│   ├── admin_users.php
│   ├── admin_contacts.php
│
├── components
│   ├── header.php / footer.php
│   ├── admin_header.php
```

---

## 🖥️ Installation & Setup

1. **Clone the repository**
   ```bash
   git clone: https://github.com/dreirivera/Coffeetea.git
   cd CoffeeTea
   ```

2. **Database setup**
   - Open **phpMyAdmin**.  
   - Create a database, e.g. `coffeetea_db`.  
   - Import `shop_db.sql` into the database.

3. **Configure backend**
   - Update `config.php` with your MySQL credentials:
     ```php
     $host = "localhost";
     $user = "root";
     $password = "";
     $dbname = "coffeetea_db";
     ```

4. **Run locally**
   - Place the project in `htdocs` (XAMPP) or `www` (WAMP/MAMP).  
   - Start **Apache** and **MySQL**.  
   - Visit in browser:  
     ```
     http://localhost/CoffeeTea
     ```

---

## 👨‍💻 Author
- Edrei Reigne Rivera
  * riveraedreireigne@gmail.com
  * edreireigne_rivera@cvsu.edu.ph



## 📜 License
This project is licensed under the [MIT License](LICENSE).  
