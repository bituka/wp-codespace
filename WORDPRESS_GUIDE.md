# How to Run and Access the WordPress Application

This document explains how to access the WordPress application running in your GitHub Codespace.

## Accessing the WordPress Site

The WordPress site is automatically started when you open your Codespace. To access it, you need to find the correct URL. The URL is dynamically generated based on your Codespace name.

1.  **Find your Codespace name:** Look for an environment variable called `CODESPACE_NAME`. You can usually find this in the terminal or in the Codespace settings.
2.  **Construct the URL:** The URL for your WordPress site will be `https://<CODESPACE_NAME>.github.dev`.
3.  **Open the site:** Open the URL in your browser to view your WordPress site.

## Accessing the WordPress Admin Panel

To access the WordPress admin panel, you will need to append `/wp-admin` to the URL of your site.

1.  **Admin URL:** The URL for the admin panel will be `https://<CODESPACE_NAME>.github.dev/wp-admin`.
2.  **Login Credentials:**
    *   **Username:** `admin`
    *   **Password:** `admin`

Log in with these credentials to access the WordPress dashboard.
