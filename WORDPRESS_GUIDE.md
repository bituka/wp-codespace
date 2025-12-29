# How to Run and Access WordPress Application

This document explains how to access WordPress application running in your GitHub Codespace.

## Accessing WordPress Site

The WordPress site is automatically started when you open your Codespace. To access it, you can use either method below.

### Option 1: Direct URL Access

You can access the site directly using the public URL:

**WordPress Site URL:** https://musical-space-fiesta-xrvpp7xrpv2v469-80.app.github.dev/

### Option 2: VS Code Ports Tab

1.  **Open "Ports" Tab:** In your Codespace, look for the "Ports" tab. It is usually located in the bottom panel of VS Code editor, next to the Terminal.
2.  **Find the Port:** Look for port 80, labeled "WordPress".
3.  **Click URL to Open:** Click the URL directly from the "Ports" tab. This will open your WordPress site in a new browser tab.

### Troubleshooting

- **HTTP ERROR 401:** If you see a 401 error, open the "Ports" tab and click "Make Public" for port 80, or click the URL directly from the Ports tab for authenticated access.
- **Site Not Loading:** If the site doesn't load at all, the web server might not be running. You can check its status by running `sudo service apache2 status` in the terminal. If it's not active, you can start it with `sudo service apache2 start`.
- **301 Redirect Issues:** If you experience redirect loops, WordPress configuration has been fixed to handle Codespace URLs dynamically. See `FIXES_APPLIED.md` for details.

## Accessing WordPress Admin Panel

To access the WordPress admin panel, you will need to append `/wp-admin` to the URL of your site.

1.  **Admin URL:** After opening the site using one of the methods above, add `/wp-admin` to the end of the URL in your browser's address bar.
2.  **Login Credentials:**
    - **Username:** `admin`
    - **Password:** `admin`

Log in with these credentials to access the WordPress dashboard.

## Development Workflow

### WP CLI Commands

You can use WP CLI to manage WordPress from the terminal:

```bash
cd /workspaces/wp-codespace/wordpress

# List plugins
wp plugin list

# List themes
wp theme list

# List posts
wp post list
```

### Edit Files

- **Plugins:** Edit in `wordpress/wp-content/plugins/`
- **Themes:** Edit in `wordpress/wp-content/themes/`

Changes are reflected immediately (no rebuild needed).

## Additional Services

### phpMyAdmin

Access phpMyAdmin for database management:

**URL:** https://musical-space-fiesta-xrvpp7xrpv2v469-81.app.github.dev/

### Database Access

- **Database:** wordpress
- **Username:** wordpress
- **Password:** wordpress
- **Host:** db

## For More Information

See `FIXES_APPLIED.md` for details about fixes applied to make WordPress work in the Codespace environment.
