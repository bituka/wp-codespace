# WordPress Codespace Fixes Applied

## Issues Encountered

### 1. HTTP ERROR 401

- **Problem**: External URLs (`https://musical-space-fiesta-xrvpp7xrpv2v469-80.app.github.dev/`) returned 401 Unauthorized
- **Cause**: GitHub Codespaces port forwarding requires authentication by default
- **Solution**: Make ports public through VS Code Ports tab or devcontainer.json configuration

### 2. 301 Moved Permanently Redirect

- **Problem**: External URL redirected from `https://` to `https://:443/` causing redirect loops
- **Cause**: WordPress was configured to force HTTPS, but GitHub Codespaces use different port forwarding
- **Solution**: Modified WordPress configuration to use dynamic host URLs

## Fixes Applied

### 1. Downloaded WordPress Core

```bash
wp core download --path=/workspaces/wp-codespace/wordpress
```

### 2. Created WordPress Configuration

Created `wp-config.php` with database settings:

```php
define( 'DB_NAME', 'wordpress' );
define( 'DB_USER', 'wordpress' );
define( 'DB_PASSWORD', 'wordpress' );
define( 'DB_HOST', 'db' );
```

### 3. Installed WordPress

```bash
wp core install --url="http://localhost" --title="WordPress" \
  --admin_user=admin --admin_password=admin \
  --admin_email=admin@example.com --allow-root
```

### 4. Fixed URL Configuration

#### Updated `wp-config.php` to handle dynamic URLs:

```php
$_SERVER['HTTPS'] = 'off';

define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] );
define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] );
```

This configuration:

- Disables HTTPS forcing
- Dynamically sets WordPress URLs based on the request host
- Prevents redirect loops when accessed through Codespace URLs

### 5. Devcontainer Configuration

Updated `.devcontainer/devcontainer.json` to auto-open browser:

```json
"portsAttributes": {
  "80": {
    "label": "WordPress",
    "onAutoForward": "openBrowser"
  },
  "81": {
    "label": "phpMyAdmin",
    "onAutoForward": "openBrowser"
  }
}
```

## Working URLs

### WordPress Site

- **Public URL**: https://musical-space-fiesta-xrvpp7xrpv2v469-80.app.github.dev/
- **Admin URL**: https://musical-space-fiesta-xrvpp7xrpv2v469-80.app.github.dev/wp-admin

### phpMyAdmin

- **URL**: https://musical-space-fiesta-xrvpp7xrpv2v469-81.app.github.dev/
- **Port**: 81 (running in separate Docker container)

## Access Instructions

### Option 1: Direct URL Access

Use the public URLs directly in browser:

- WordPress: https://musical-space-fiesta-xrvpp7xrpv2v469-80.app.github.dev/
- phpMyAdmin: https://musical-space-fiesta-xrvpp7xrpv2v469-81.app.github.dev/

### Option 2: VS Code Ports Tab

1. Open **Ports** tab in VS Code (bottom panel)
2. Click the **globe icon** next to port 80 or 81
3. Site opens with automatic authentication

## Credentials

### WordPress Admin

- **Username**: admin
- **Password**: admin

### Database

- **Database**: wordpress
- **Username**: wordpress
- **Password**: wordpress
- **Host**: db

## Services Running

- **Apache**: Port 80, 8080
- **MariaDB**: Port 3306 (internal, in Docker container)
- **phpMyAdmin**: Port 81 (in Docker container)

## Development Workflow

### Edit Files

- **Plugins**: `wordpress/wp-content/plugins/`
- **Themes**: `wordpress/wp-content/themes/`

### WP CLI Commands

```bash
cd /workspaces/wp-codespace/wordpress
wp plugin list
wp theme list
wp post list
```

### PHP Code

- PHP version: 7.4.33
- Server: Apache 2.4.54
- Database: MariaDB 10.4 (Docker)

## Troubleshooting

### If 401 Error Returns

1. Open VS Code **Ports** tab
2. Click **"Make Public"** for port 80
3. Refresh the URL

### Apache Issues

```bash
sudo service apache2 restart
# Check logs
cat /tmp/error.log
```

### Database Issues

```bash
# Check database connection
php -r "mysqli_connect('db', 'wordpress', 'wordpress') && echo 'Connected';"
```

## Notes

- Port 3306 is for database only (not accessible in browser)
- Apache is pre-configured to serve WordPress from `/workspaces/wp-codespace/wordpress`
- Changes are reflected immediately (no rebuild needed)
- VS Code extensions are configured for WordPress development (autocompletion, linting, debugging)
