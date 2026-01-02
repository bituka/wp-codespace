# How to Use WooCommerce in WordPress Codespace

This document explains how to access and configure WooCommerce plugin in your WordPress application.

## WooCommerce Installation

WooCommerce is already installed and activated in this Codespace environment.

**Plugin Status:** Active (version 10.4.3)

To verify installation, run:

```bash
cd /workspaces/wp-codespace/wordpress
wp plugin list --allow-root | grep woocommerce
```

## Accessing WooCommerce Setup

1.  **Log in to WordPress Admin Panel:** Follow instructions in `WORDPRESS_GUIDE.md` to access your WordPress dashboard.
2.  **WooCommerce Setup Wizard:** Navigate to **WooCommerce → Setup Wizard** in the left-hand menu, or go directly to:

    - **Setup URL:** `https://[your-codespace-name]-80.app.github.dev/wp-admin/admin.php?page=wc-admin`

3.  **Complete Setup:** Follow the on-screen wizard to configure:
    - Store details (business type, industry)
    - Products and payment methods
    - Shipping options
    - Tax settings
    - Recommended plugins

## Accessing WooCommerce Settings

After setup, you can access WooCommerce settings from WordPress admin panel.

1.  **WooCommerce Menu:** You will see a "WooCommerce" menu item in the left-hand menu.
2.  **Settings:** Click on "WooCommerce" → "Settings" to configure your store.

### Key Settings Sections

- **General:** Store address, selling locations, currency
- **Products:** Product display, measurements, inventory
- **Shipping:** Shipping zones, methods
- **Payments:** Payment gateways (Stripe, PayPal, etc.)
- **Accounts:** Guest checkout, account creation
- **Email:** Email notifications
- **Advanced:** Page setup, API keys, webhooks

## Managing Products

### Adding Products

1.  Navigate to **WooCommerce → Products**
2.  Click **Add New** to create a new product
3.  Fill in product details:
    - Product name and description
    - Price and sale price
    - Product image(s)
    - Product type (Simple, Variable, Grouped, etc.)
    - Inventory and shipping details
4.  Click **Publish** to make product available

### Product Types

- **Simple Product:** Standard product with no variations
- **Variable Product:** Product with variations (size, color, etc.)
- **Grouped Product:** Group of related products sold together
- **External/Affiliate Product:** Product sold on external site
- **Downloadable Product:** Digital files

## Viewing the Shop

WooCommerce automatically creates a "Shop" page on your site.

**Shop URL:** https://[your-codespace-name]-80.app.github.dev/shop/

You can also view:

- **Cart:** `/cart/`
- **Checkout:** `/checkout/`
- **My Account:** `/my-account/`

## WooCommerce Shortcodes

WooCommerce provides shortcodes to add content to any page:

- `[products]` - Display products
- `[add_to_cart id="99"]` - Add specific product to cart
- `[product_page id="99"]` - Show single product
- `[product_categories]` - Display product categories
- `[sale_products]` - Show products on sale

## WP CLI for WooCommerce

Manage WooCommerce via command line:

```bash
cd /workspaces/wp-codespace/wordpress

# List WooCommerce products
wp wc product list --allow-root

# Create a product
wp wc product create --name="Test Product" --regular_price="19.99" --allow-root

# Get orders
wp wc shop_order list --allow-root

# Get statistics
wp wc tool run regenerate_images --allow-root
```

## Troubleshooting

### WooCommerce Not Working

1.  **Check Plugin Status:** Ensure WooCommerce is active

    ```bash
    wp plugin status woocommerce --allow-root
    ```

2.  **Clear Caches:** Clear browser cache and WordPress cache if any caching plugin is active

3.  **Check Database:** Ensure WordPress can connect to database
    ```bash
    php -r "mysqli_connect('db', 'wordpress', 'wordpress') && echo 'Connected';"
    ```

### Product Images Not Uploading

Check file permissions in WordPress uploads directory:

```bash
ls -la wordpress/wp-content/uploads/
```

### Payment Gateways Not Working

Most payment gateways require HTTPS. In Codespace:

- Test with sandbox/test mode provided by payment providers
- Or use manual bank transfer for testing

## Additional Resources

- **WooCommerce Documentation:** https://woocommerce.com/documentation/
- **WooCommerce Support:** https://woocommerce.com/support/
- **WP CLI WooCommerce Commands:** https://github.com/woocommerce/woocommerce/wiki/WP-CLI

## For More Information

- See `WORDPRESS_GUIDE.md` for WordPress access and configuration
- See `FIXES_APPLIED.md` for technical details about Codespace setup
