# 💼 Prince Mehta – Developer Portfolio
![Portfolio Screenshot] (screenshots/portfolio-homepage.png)

This is my personal developer portfolio website built using **PHP, HTML, CSS, and MySQL**.
It showcases my **projects, skills, achievements, certificates, and resume**.

---

## 👨‍💻 About Me

I am a **BCA Final Year Student** and an aspiring **Full Stack Developer**.
I enjoy building web applications and learning modern technologies like **Java, PHP, AWS, and Data Structures**.

---

## 🚀 Features

* Home section with profile and skills
* Projects section to showcase my work
* Skills with progress bars
* Achievements section
* Certificates section with download option
* Resume download
* Contact form connected to MySQL database
* Admin panel to view and delete messages

---

## 🛠 Technologies Used

* **Frontend:** HTML, CSS, JavaScript
* **Backend:** PHP
* **Database:** MySQL
* **Tools:** VS Code, XAMPP

---

## 📂 Project Structure

```
portfolio/
│
├── index.php
├── about.php
├── skills.php
├── project.php
├── certificates.php
├── resume.php
├── contact.php
│
├── admin.php
├── admin_login.php
├── logout.php
│
├── header.php
├── footer.php
│
├── style.css
├── admin.css
│
├── images/
│   └── profile.jpg
│
└── certificates/
```

---

## ⚙️ How to Run the Project

1. Install **XAMPP** or any local server (Apache + MySQL).

2. Copy the project folder into:

```
C:/xampp/htdocs/
```

3. Start **Apache** and **MySQL** from the XAMPP control panel.

4. Open **phpMyAdmin** in your browser:

```
http://localhost/phpmyadmin
```

5. Create a database named:

```
portfolio
```

6. Create a table called **contact** with these fields:

| Field   | Type                              |
| ------- | --------------------------------- |
| id      | INT (Auto Increment, Primary Key) |
| name    | VARCHAR(100)                      |
| email   | VARCHAR(100)                      |
| message | TEXT                              |

7. Run the project in your browser:

```
http://localhost/portfolio
```

---

## 📬 Contact

📍 Pune, Maharashtra, India
📧 [princemehta592@gmail.com](mailto:princemehta592@gmail.com)

---

## 🌐 Future Improvements

* Add live project demos
* Improve UI animations
* Add responsive mobile design
* Deploy portfolio online

---

⭐ If you like this project, feel free to **star the repository**.

