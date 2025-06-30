🚀 Overview
Nova Capital is a comprehensive web-based stock market portfolio management system that allows users to simulate stock trading, track their investments, and stay updated with market news. Built with modern web technologies and featuring a clean, intuitive interface.
✨ Features
🏠 Home Page

Company overview and mission statement
Featured company portfolio values
Real-time market highlights
Easy navigation to login/signup

🔐 Authentication System

Secure user registration and login
New user bonus: $10,000 starting capital
Session management
Password encryption

📊 Dashboard

Personalized user dashboard
Quick access to all major features
Portfolio overview
Account balance display

📈 Core Features

Daily Stock Averages - Track daily market performance
Buy/Sell Stocks - Trade stocks from 6 featured companies
Transaction History - Complete record of all trades
Stock News - Latest market news and updates
Feedback System - User feedback and support

🛠 Tech Stack
Frontend

HTML5 - Structure and content
CSS3 - Styling and responsive design
JavaScript - Interactive functionality and dynamic content

Backend

PHP - Server-side logic and API endpoints
MySQL - Database management

Database Structure

User Authentication Table - Stores login credentials and user data
Transaction Table - Records all buy/sell transactions

🚀 Installation & Setup
Prerequisites

Web server (Apache/Nginx)
PHP 7.4 or higher
MySQL 5.7 or higher
Modern web browser

# Nova Capital - Detailed Project Structure

This document provides a comprehensive overview of the Nova Capital project structure based on the actual file organization.

## 📁 Complete File Structure

### Root Directory Files

#### HTML Pages
- **Homepage.html** - Main landing page with company overview
- **main.html** - Main application interface
- **dashboard.html** - User dashboard with portfolio overview
- **Average.html** - Daily stock averages and market trends
- **news.html** - Latest stock market news
- **feedback.html** - User feedback and contact form
- **signin.html** - User sign-in page
- **signup.html** - New user registration page

#### PHP Backend Files
- **login.php** - Handles user authentication
- **registration.php** - Processes new user registrations
- **logout.php** - Manages user logout
- **config.php** - Database configuration and connection
- **his.php** - Transaction history processing
- **stock-history.php** - Stock price history data
- **debug.php** - Debug utilities and error handling
- **dash1.php** - Dashboard data processing and API

#### Node.js Files
- **package.json** - Node.js dependencies and scripts
- **package-lock.json** - Locked dependency versions
- **index.js** - Main JavaScript application file
- **node_modules/** - Node.js package dependencies

## 🏢 Company-Specific Files

### Individual Company Pages
Each major company has its own dedicated HTML page:

1. **Amazon.html** - Amazon (AMZN) stock trading page
2. **Apple.html** - Apple (AAPL) stock trading page  
3. **Google.html** - Google/Alphabet (GOOGL) stock trading page
4. **Meta.html** - Meta Platforms (META) stock trading page
5. **Microsoft.html** - Microsoft (MSFT) stock trading page
6. **Tesla.html** - Tesla (TSLA) stock trading page

### Company Transaction Handlers
Individual PHP files handle buy/sell transactions for each company:

- **amazon_transaction.php** - Amazon stock transactions
- **apple_transaction.php** - Apple stock transactions
- **google_transaction.php** - Google stock transactions
- **meta_transaction.php** - Meta stock transactions
- **microsoft_transaction.php** - Microsoft stock transactions
- **tesla_transaction.php** - Tesla stock transactions

### Company Stock Data APIs
PHP files to retrieve user's owned stocks for each company:

- **get_owned_stocks_amazon.php** - Amazon holdings
- **get_owned_stocks_apple.php** - Apple holdings
- **get_owned_stocks_google.php** - Google holdings
- **get_owned_stocks_meta.php** - Meta holdings
- **get_owned_stocks_microsoft.php** - Microsoft holdings
- **get_owned_stocks_tesla.php** - Tesla holdings

### Company Logos and Assets
High-quality company logos and branding assets:

- **amazon.png** - Amazon logo (215 KB)
- **apple.png** - Apple logo (83 KB)
- **google.png** - Google logo (18 KB)
- **meta.png** - Meta logo (58 KB)
- **microsoft.png** - Microsoft logo (39 KB)
- **fb.png** - Facebook logo (4 KB)

## 🔧 Utility and Support Files

### User Management
- **get_balance.php** - Retrieve user account balance
- **get_csrf_token.php** - Generate CSRF protection tokens
- **get_transactions.php** - Fetch user transaction history

### Additional Assets
- **Bull-removebg-preview.png** - Bull market icon (86 KB)
- **Qd6QO301.svg** - SVG graphics/icons (6 KB)

### Backend Directory
- **php/** - Contains additional PHP backend files and utilities

## 📊 File Size Distribution

### Large Files (>50 KB)
- package-lock.json (66 KB) - Node.js dependencies
- meta.png (58 KB) - Meta company logo
- Bull-removebg-preview.png (86 KB) - Bull market icon

### Medium Files (10-50 KB)
- Homepage.html (35 KB) - Main landing page
- news.html (23 KB) - News page
- microsoft.png (39 KB) - Microsoft logo
- Various HTML pages (13-19 KB each)

### Small Files (<10 KB)
- Most PHP transaction handlers (6 KB each)
- Authentication files (1-2 KB each)
- Utility scripts and configuration files

## 🔄 Data Flow Architecture

### User Authentication Flow

signin.html → login.php → config.php → dashboard.html
signup.html → registration.php → config.php → main.html


### Stock Trading Flow

Company Page (e.g., Amazon.html) → 
amazon_transaction.php → 
config.php (database) → 
get_owned_stocks_amazon.php → 
Updated Portfolio Display


### Dashboard Data Flow

dashboard.html → 
dash1.php → 
get_balance.php + get_transactions.php → 
Portfolio Summary Display


## 🗄 Database Integration

### Core Tables
Based on the PHP files, the system uses these main database tables:

1. *Users Table* - Managed by login.php, registration.php
2. *Transactions Table* - Updated by individual *_transaction.php files
3. *Stock Holdings* - Tracked by get_owned_stocks_*.php files

### Data Consistency
- Each company has separate transaction handlers ensuring data integrity
- Balance updates are handled through get_balance.php
- Transaction history is maintained via his.php and stock-history.php

## 🚀 Development Workflow

### Frontend Development
1. HTML pages for user interface
2. Company-specific pages for each stock
3. Responsive design with integrated styling

### Backend Development  
1. PHP files handle all server-side logic
2. Individual handlers for each company's transactions
3. Separate API endpoints for data retrieval

### Full-Stack Integration
1. Node.js for modern JavaScript features
2. PHP for database operations and business logic
3. MySQL for data persistence

## 📝 File Naming Conventions

### HTML Files
- PascalCase: Homepage.html, Average.html
- Lowercase: main.html, news.html, feedback.html

### PHP Files
- Lowercase with underscores: amazon_transaction.php
- Action-based: get_balance.php, get_transactions.php

### Image Files
- Lowercase company names: amazon.png, apple.png
- Descriptive names: Bull-removebg-preview.png

This structure demonstrates a well-organized, scalable architecture that separates concerns between frontend presentation, backend logic, and data management while maintaining individual handlers for each company's stock operations.
