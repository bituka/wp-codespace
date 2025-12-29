# How to Run and Access the WordPress Application

This document explains how to access the WordPress application running in your GitHub Codespace.

## Accessing the WordPress Site

The WordPress site is automatically started when you open your Codespace. To access it, you need to use the forwarded port.

**Important Note on Authentication:** By default, forwarded ports in GitHub Codespaces are **private**. This means you must be authenticated to access them. If you copy the URL and paste it into a new browser tab, you might get a `401 Unauthorized` error.

1.  **Open the "Ports" Tab:** In your Codespace, look for the "Ports" tab. It is usually located in the bottom panel of the VS Code editor, next to the Terminal.
2.  **Find the Port:** Look for the port that is forwarding your web server. This will likely be port 80, labeled "WordPress".
3.  **Click the URL to Open:** To ensure you are properly authenticated, **click the URL directly from the "Ports" tab**. This will open your WordPress site in a new browser tab with the correct authentication.

### Troubleshooting
*   **HTTP ERROR 401:** If you see a 401 error, it means you are not authenticated. Please close the browser tab and make sure you are opening the site by clicking the link directly from the "Ports" tab inside your Codespace.
*   **Site Not Loading:** If the site doesn't load at all, the web server might not be running. You can check its status by running `sudo service apache2 status` in the terminal. If it's not active, you can start it with `sudo service apache2 start`.

## Accessing the WordPress Admin Panel

To access the WordPress admin panel, you will need to append `/wp-admin` to the URL of your site.

1.  **Admin URL:** After opening the site using the method above, add `/wp-admin` to the end of the URL in your browser's address bar.
2.  **Login Credentials:**
    *   **Username:** `admin`
    *   **Password:** `admin`

Log in with these credentials to access the WordPress dashboard.
