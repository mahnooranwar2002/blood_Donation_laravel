# 🩸 Blood Donation Management System

A comprehensive Laravel-based platform designed to bridge the gap between blood donors and seekers, ensuring timely access to life-saving blood donations.

---

## 🚀 Features

* **User Management:** Secure authentication with Role-Based Access Control (RBAC) for Users and Agents.
* **Blood Requests:** Real-time creation and management of blood requirement posts.
* **Blood Group Categorization:** Organized management and filtering for all major blood groups.
* **Agent Portal:** Dedicated dashboard for authorized agents to verify and process requests.
* **Job Queues:** Background task processing using Laravel Queues (e.g., for automated email notifications).
* **Security:** Enhanced security using password reset tokens and session management.
* **FAQ & Support:** Built-in Frequently Asked Questions and a contact system for user assistance.

---

## 🛠 Database Architecture (ERD)

The database is designed for scalability and efficiency. Key tables include:

* **Users:** Stores registered members and their authentication details.
* **Blood Requests:** Records specific blood needs, linked to groups and locations.
* **Agents:** Specialized table for staff/volunteers managing the platform operations.
* **Blood Groups:** A reference table containing all valid blood types (A+, B-, etc.).
* **System Tables:** Core Laravel tables including `migrations`, `failed_jobs`, and `sessions`.

---

## 📂 Project Structure (Key Tables)

| Table | Description |
| :--- | :--- |
| **users** | Stores user credentials, contact info, and roles. |
| **blood_requests** | Tracks blood requirements, status, and requester details. |
| **agents** | Stores data for verified agents managing the system. |
| **blood_groups** | Master list of available blood types. |
| **jobs** | Manages background processing and asynchronous tasks. |
| **sessions** | Tracks active user login states and security. |

---

## 💻 Tech Stack

* **Backend:** Laravel 10.x / 11.x
* **Database:** MySQL
* **Frontend:** Blade Templates / Bootstrap / JavaScript
* **Caching:** Laravel Cache (Database or Redis drivers)

---

