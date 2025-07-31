# 🛒 WooCommerce Buy Now Button – Elementor Addon

A lightweight WordPress plugin that adds a **“Buy Now”** button widget to **Elementor**, designed to work seamlessly inside WooCommerce product loops.

This button is a **clone of the native Elementor Button Widget**, which means it inherits **all styling and customization options** you're used to — but with an added feature: direct redirection to the checkout page with a single product.

---

## 🚀 Why this plugin?

This plugin was created because there was **no simple “Buy Now” button available** in the WordPress plugin repository that works *exactly* like this:

- Most alternatives include extra features, popups, quantity selectors, or product modals.
- Many come in **freemium models**, bloated with upsells or admin dashboard ads.
- All we needed was a **clean, focused “Buy Now” button** — nothing more.

So this plugin provides exactly that:  
👉 A **minimal, fast, and no-frills “Buy Now” button** for Elementor.

---

## ✅ Features

- 🧩 **Clone of the Elementor Button Widget** – full styling controls.
- 🔁 **Automatically detects the product** inside the current product loop.
- 🛍️ **Clears the cart**, adds only the selected product, and redirects to checkout.
- 🛠️ **Optional custom redirect URL** – send users to another page if needed.
- ⚠️ Meant to be used **inside a WooCommerce loop** (e.g., Elementor Pro’s Products widget).

---

## ⚠️ Important Notes

- **Must be used inside a product loop**.  
  Outside of a loop (e.g., in a static page), the widget will not know which product to act on and may throw an error.
- If no custom URL is set, the plugin:
  - Empties the current cart.
  - Adds the product from the loop.
  - Sends the user to `/checkout`.

---

## 🔧 How It Works

1. Add the “Buy Now” widget to your Elementor product loop (like a product grid).
2. The widget **auto-detects the current product ID**.
3. On click:
   - The cart is cleared.
   - The detected product is added to the cart.
   - User is redirected to the checkout (or your custom URL, if defined).

---

## 📦 Installation

1. Download the plugin `.zip` from the [Releases](https://github.com/julioz07/woocommerce_buyNow_elementor-addon/releases) tab.
2. Go to **Plugins > Add New > Upload Plugin** in your WordPress dashboard.
3. Upload the `.zip`, install, and activate.
4. Use the “Buy Now” widget inside Elementor.

---

## 🧪 Use Cases

- Quick checkout from product lists
- Landing pages with one-tap purchases
- Replacing the default "Add to Cart" with something faster

---

## 👨‍💻 Developer Notes

- Uses WooCommerce’s internal loop detection functions.
- Redirect can be manually overridden with a custom URL.
- Intended for loop-based use only. No extra JS or bloat.

---

## 📜 License

Distributed under the [GPL v3.0 License](LICENSE).

---

## 🙌 Developed by
- Júlio Rodrigues ([LinkedIn](https://www.linkedin.com/in/juliocesarrodrigues07/))

## 📜 License

Distributed under the [GPL v3.0 License](LICENSE).
