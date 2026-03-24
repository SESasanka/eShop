# eShop - Online E-Commerce Platform

A feature-rich e-commerce web application built with PHP and MySQL, providing a complete online shopping experience with user authentication, product management, shopping cart functionality, and order processing.

## ✨ Features

### User Features
- **User Authentication**: Sign up, sign in, and password recovery functionality
- **User Profile**: Manage personal information and update profile details
- **Product Browsing**: Search and browse products with advanced filtering
- **Shopping Cart**: Add/remove items, update quantities, and manage cart
- **Wishlist/Watchlist**: Save products for later viewing
- **Purchasing**: Complete purchase workflow with invoice generation
- **Order History**: Track previous purchases and invoices
- **Messaging System**: Communication with admin/sellers
- **Feedback System**: Leave reviews and feedback on products

### Admin Features
- **Admin Panel**: Secure admin dashboard
- **User Management**: View, manage, and block/unblock users
- **Product Management**: Add, update, and manage product listings
- **Inventory Management**: Control product availability and categories
- **Order Management**: View and update order/invoice status
- **Category Management**: Create and manage product categories
- **Sales Analytics**: View selling and purchasing history

### Seller Features
- **Product Listing**: Add and manage own products
- **Selling History**: Track sales and revenue
- **Status Management**: Update product availability
- **Message Management**: Communicate with customers

## 🛠️ Tech Stack

- **Backend**: PHP 7.x+
- **Database**: MySQL
- **Frontend**: HTML5, CSS3, JavaScript
- **UI Framework**: Bootstrap 4/5
- **Libraries**: PHPMailer (Email sending), OAuth (Social authentication)

## 📋 Prerequisites

- PHP 7.0 or higher
- MySQL 5.7 or higher
- Apache Web Server (with mod_rewrite enabled)
- XAMPP or similar local server environment

## 🚀 Installation

### 1. Clone or Download the Project
```bash
# Extract the project to your web server directory
# For XAMPP: C:\xampp\htdocs\eShop
```

### 2. Database Setup
```sql
-- Import the database schema (create database.sql if not exists)
CREATE DATABASE eshop;
USE eshop;
-- Import any provided SQL files or follow schema setup
```

### 3. Configure Database Connection
Edit `connection.php` and update the database credentials:
```php
$host = 'localhost';
$user = 'root';
$password = '';  // Your database password
$database = 'eshop';
```

### 4. Email Configuration (Optional)
For password reset and verification emails, configure `PHPMailer.php` with your SMTP settings:
- SMTP Server
- Email address
- Password/API key

### 5. Access the Application
- **User Portal**: `http://localhost/eShop/home.php`
- **Admin Panel**: `http://localhost/eShop/adminPanel.php`

## 📁 Project Structure

```
eShop/
├── index.php                      # Home page/Landing page
├── home.php                       # Home screen
├── connection.php                 # Database connection
├── header.php                     # Navigation header
├── footer.php                     # Footer component
│
├── Auth/
├── signupProcess.php              # User registration
├── signInProcess.php              # User login
├── signOutProcess.php             # User logout
├── verificationProcess.php        # Email verification
├── resetPasswordProcess.php       # Password reset
├── forgotPasswordProcess.php      # Forgot password
│
├── User/
├── userProfile.php                # User profile page
├── updateProfileProcess.php       # Update profile
├── myProducts.php                 # Seller's products
│
├── Products/
├── singleProductView.php          # Product details
├── addProduct.php                 # Add new product
├── addProductProcess.php          # Product submission
├── updateProduct.php              # Update product
├── updateProductProcess.php       # Update submission
├── manageProducts.php             # Manage products
├── advancedSearch.php             # Advanced search page
├── advancedSearchProcess.php      # Search processing
├── basicSearchProcess.php         # Basic search
├── sortProcess.php                # Product sorting
│
├── Shopping/
├── cart.php                       # Shopping cart
├── addToCartProcess.php           # Add to cart
├── cartQtyUpdateProcess.php       # Update cart quantity
├── deleteFromCartProcess.php      # Remove from cart
├── watchlist.php                  # Watchlist/Favorites
├── addToWatchlistProcess.php      # Add to watchlist
├── removeWatchlistProcess.php     # Remove from watchlist
│
├── Orders/
├── invoice.php                    # Invoice page
├── saveInvoiceProcess.php         # Save invoice
├── changeInvoiceStatusProcess.php # Update invoice status
├── purchasingHistory.php          # Purchase history
├── sellingHistory.php             # Selling history
├── buyNowProcess.php              # Buy now process
│
├── Admin/
├── adminPanel.php                 # Admin dashboard
├── adminSignin.php                # Admin login
├── adminVerificationProcess.php   # Admin verification
├── manageUsers.php                # User management
├── userBlockProcess.php           # Block/unblock users
├── findSellingsProcess.php        # Analyze sales
├── changeStatusProcess.php        # Change status
├── productBlockProcess.php        # Block/unblock products
│
├── Categories/
├── addNewCategoryProcess.php      # Add category
├── saveCategoryProcess.php        # Save category
│
├── Messaging/
├── messages.php                   # Messages page
├── sendMsgProcess.php             # Send message
├── viewMsgProcess.php             # View messages
├── sendAdminMsgProcess.php        # Send admin message
├── deleteFromFeedbackProcess.php  # Delete feedback
├── deleteAllFromFeedbackProcess.php # Clear feedback
├── sendIdProcess.php              # Send ID
│
├── Feedback/
├── saveFeedbackProcess.php        # Save review/feedback
│
├── Assets/
├── style.css                      # Custom styles
├── script.js                      # Custom scripts
├── bootstrap.css                  # Bootstrap styles
├── bootstrap.js                   # Bootstrap scripts
├── bootstrap.bundle.js            # Bootstrap bundle
│
├── Libraries/
├── PHPMailer.php                  # Email library
├── SMTP.php                       # SMTP configuration
├── POP3.php                       # POP3 configuration
├── OAuth.php                      # OAuth authentication
├── Exception.php                  # Exception handling
│
├── resource/
├── profile_images/                # User profile pictures
├── slider_images/                 # Slider/banner images
├── mobile_images/                 # Product images
├── payment_method/                # Payment method icons
│
├── font/                          # Custom fonts
│
└── README.md                      # This file
```

## 🔐 Security Considerations

- **Database Credentials**: Store in `connection.php`, ensure proper file permissions
- **Email Configuration**: Never commit sensitive SMTP credentials to version control
- **User Input**: All inputs should be validated and sanitized
- **SQL Injection**: Use prepared statements for database queries
- **Session Management**: Implement proper session handling and timeouts
- **Password Reset**: Use secure token generation for password reset links

## 🗄️ Database Tables (Expected Schema)

- `users` - User accounts and profiles
- `products` - Product listings
- `categories` - Product categories
- `cart` - Shopping cart items
- `orders` / `invoices` - Purchase records
- `watchlist` - Saved products
- `messages` - User messages
- `feedback` - Reviews and ratings
- `admin_users` - Administrator accounts

## 🔄 Workflow

### User Workflow
1. Signup/Login → Browse Products → Search/Filter → Add to Cart/Watchlist → Checkout → Invoice → View History

### Admin Workflow
1. Admin Login → Manage Users → Manage Products → Manage Orders → View Analytics

### Seller Workflow
1. Seller Login → Add Products → Manage Inventory → View Sales History → Respond to Messages

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit changes (`git commit -m 'Add AmazingFeature'`)
4. Push to branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📝 License

This project is open source and available under the MIT License.

## 👤 Author

**Sasanka Akash**
- LinkedIn: [linkedin.com/in/sasanka-akash-2891202b7](https://linkedin.com/in/sasanka-akash-2891202b7)
- YouTube: [@codingwithsasanka](https://youtube.com/@codingwithsasanka)

## 📧 Support

For support, please open an issue or contact the author.

---

**Last Updated**: March 2026
