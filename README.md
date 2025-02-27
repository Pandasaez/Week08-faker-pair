# Week08-faker-pair
Class Activity App Dev

By Zuriel Montallana & Jasper Saez

See full documentation of PHP Faker here: https://fakerphp.org/
Create a GitHub repository titled week08-faker-pair. Add your assigned pair as a collaborator to this repository. For each of the problems outlined below, develop a corresponding PH file. Implement Bootstrap styling for the tables within these PHP files, utilizing the CDN and pre-existing Bootstrap classes.
1. Create PHP script to generate fake user profiles, but this time using localized data for the Philippines.
Each user profile should include:
• Full Name (Filipino names)
• Email Address
• Phone Number (PH format: + 63 9XX xXX xxxx)
• Complete Address (including province and city in the Philippines)
, Birthdate (formatted as YYYY-MM-DD)
• Job Title
Write a PHP script that generates 5 fake user profiles and displays them in a formatted table.
2. Create a PHP script to populate a Books table using Faker. Each book should have the following details:
• Title (Generated using Lorem words)
• Author (Random full name
• Genre (Choose randomly from predefined genres)
• Publication Year (Random year between 1900 and 2024)
ISBN Random 13-digit ISBN number)
• Summary (A short Lorem Ipsum paragraph)
Write a PHP script using Faker to generate 15 fake book records and display them in a formatted table.
Predefined Genres:
о
Fiction
• Mystery
• Science Fiction
• Fantasy
• Romance
• Thriller
Historical
• Horror
3. Develop a User Accounts table for a system. Instead of using an integer for the user ID, the system will use a UUID. Additionally, user passwords should be securely stored using SHA-256 encryption
Each user account should include:
• User ID (Generated as a UUID)
• Full Name (Randomly generated)
• Email Address
Username (Lowercase version of the first part of the email)
• Password (Random password, encrypted using SHA-256
• Account Created (Random datetime in the past 2 years)
Write a PHP script using Faker to generate 10 fake user accounts and display them in a formatted table.