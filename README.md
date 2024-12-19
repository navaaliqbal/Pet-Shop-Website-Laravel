
---

# Bonsai Pet Shop 🌱🐾

Welcome to **Bonsai Pet Shop**, an innovative e-commerce platform where pet enthusiasts can explore services, products, and resources tailored for their beloved pets.

---

## 🚀 Features

- **Products Section**: Browse and shop for high-quality pet products, including food, accessories, and grooming tools.
- **Services Section**: Explore grooming, training, veterinary consultations, and other pet-related services.
- **User Authentication**: Allows only authorized users to add, update and delete products.
- **User-Friendly Interface**: Intuitive design for a seamless user experience.
- **Responsive Design**: Accessible across all devices — desktop, tablet, and mobile.
---

## 🛠️ Tools and Technologies

- **Frontend**:  
  - HTML5, CSS3, JavaScript  
  - Bootstrap for responsive design
- **Backend**:  
  - PHP (Laravel Framework)
- **Database**:  
  - MySQL for managing user data and inventory
- **Version Control**:  
  - Git and GitHub for collaborative development
- **Development Environment**:  
  - Visual Studio Code

---

## ⋆⭒˚𖠋𖠋𖠋*.⋆ Team Members

| **Name**             | **Reg ID**      |  
|----------------------|-----------------|  
| Navaal Iqbal         | 409977          |  
| Ayesha Siddiqa       | 407198          |  
| Amna Ahmed           | 408099          |  


---

# Pet Shop Website - Laravel

## 📦 Installation and Setup

Follow these steps to set up the project locally:

### Clone the Repository
```bash
git clone https://github.com/navaaliqbal/Pet-Shop-Website-Laravel.git
```

### Navigate to the Project Directory
```bash
cd Pet-Shop-Website-Laravel
```

### Install PHP Dependencies
Check if Composer is installed:
```bash
composer --version
```
If Composer is available, run:
```bash
composer install
```

### Configure Environment Variables
Create a `.env` file based on `.env.example`:
```bash
cp .env.example .env
```
Update the `.env` file with your database credentials and other configuration details.

### Generate Application Key
```bash
php artisan key:generate
```

### Run Database Migrations
```bash
php artisan migrate
```

If applicable, seed the database:
```bash
php artisan db:seed
```

### Install Node.js Dependencies
Check if Node.js and npm are installed:
```bash
npm --version
node --version
```
Then install the dependencies:
```bash
npm install
```

### Build Frontend Assets
Build the assets for production:
```bash
npm run build
```
For development, run:
```bash
npm run dev
```

### Start the Development Server
Run the Laravel development server:
```bash
php artisan serve
```

You can now access the application at `http://127.0.0.1:8000/`.




