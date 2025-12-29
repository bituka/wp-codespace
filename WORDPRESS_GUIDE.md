# How to Run and Access the WordPress Application

This document explains how to access the WordPress application running in your GitHub Codespace.

## Accessing the WordPress Site

The WordPress site is automatically started when you open your Codespace. To access it, you need to use the forwarded port.

1.  **Open the "Ports" Tab:** In your Codespace, look for the "Ports" tab, usually located in the bottom panel of the editor.
2.  **Find the Port:** Look for the port that is forwarding your web server. This will likely be port 80.
3.  **Open the URL:** You will see a URL next to the port number. Click this URL to open your WordPress site in a new browser tab.

## Accessing the WordPress Admin Panel

To access the WordPress admin panel, you will need to append `/wp-admin` to the URL of your site.

1.  **Admin URL:** The URL for the admin panel will be the URL from the "Ports" tab, with `/wp-admin` added to the end.
2.  **Login Credentials:**
    *   **Username:** `admin`
    *   **Password:** `admin`

Log in with these credentials to access the WordPress dashboard.
