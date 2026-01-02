# Important Links for WordPress Codespace

## WordPress

- **Frontend**: http://localhost:80
- **Admin Panel**: http://localhost:80/wp-admin
  - Username: admin
  - Password: admin

## WooCommerce

- **Shop Page**: http://localhost:80/shop/
- **Cart**: http://localhost:80/cart/
- **Checkout**: http://localhost:80/checkout/
- **My Account**: http://localhost:80/my-account/
- **WooCommerce Admin**: http://localhost:80/wp-admin/admin.php?page=wc-admin
- **WooCommerce Settings**: http://localhost:80/wp-admin/admin.php?page=wc-settings

## phpMyAdmin

- **phpMyAdmin**: http://localhost:81
  - Server: db
  - Username: wordpress
  - Password: wordpress

## Database

- **MySQL/MariaDB**: localhost:3306
  - Database: wordpress
  - Username: wordpress
  - Password: wordpress

## Other Tools

- **WP CLI**: Available in terminal (cd wordpress && wp ...)
- **Composer**: For PHP dependencies
- **NPM**: For Node.js dependencies in plugins/themes

## Notes

- In GitHub Codespaces, these localhost URLs are forwarded to secure HTTPS URLs (e.g., https://[codespace-name]-80.app.github.dev)
- Ports 80, 81, and 3306 are forwarded automatically
- WooCommerce is pre-installed and activated
