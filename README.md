# WHMCS Gravatar Dynamic Hook (VO Gravatar)

[English](#english) | [فارسی](#فارسی)

---

## English

A lightweight, performance-optimized WHMCS hook that allows you to dynamically fetch and display global user avatars from **Gravatar** based on the client's email address using a custom Smarty tag.

### ✨ Key Features
* **Smarty Integration:** Registers a custom `{vogravatar}` tag for use anywhere in your `.tpl` template files.
* **Customizable Rating:** Restrict avatars based on Gravatar ratings (e.g., G, PG, R, X).
* **Dynamic Sizing:** Control image dimensions directly through template attributes.
* **Zero Database Load:** Fetches gravatar hashes dynamically without overhead.

### 🚀 Installation & Usage

1. Upload the hook file (`.php`) to your WHMCS directory under:
<pre><code>includes/hooks/</code></pre>

2. Open any `.tpl` file in your active template directory and use the custom tag like this:
<pre><code>{vogravatar email=$clientsdetails.email rating="PG" size="60"}</code></pre>

3. **Example (HTML Image Tag):**
<pre><code>&lt;img src="{vogravatar email=$clientsdetails.email rating="PG" size="60"}" alt="user image"&gt;</code></pre>

---

## فارسی

هوک سبک، بهینه و کاربردی WHMCS برای فراخوانی و نمایش خودکار تصاویر پروفایل کاربران از سرویس جهانی **گراوتار (Gravatar)** بر اساس ایمیل آن‌ها با استفاده از یک تگ اختصاصی Smarty.

### ✨ ویژگی‌های کلیدی
* **یکپارچه‌سازی با Smarty:** ساخت تگ اختصاصی `{vogravatar}` جهت استفاده در تمامی فایل‌های قالب (`.tpl`).
* **تنظیم سطح دسترسی (Rating):** امکان فیلتر و محدود کردن تصاویر بر اساس رتبه‌بندی اخلاقی گراوتار (مانند PG، G و...).
* **سایزبندی داینامیک:** قابلیت تغییر و کنترل ابعاد تصویر مستقیم از داخل کد قالب.
* **کدنویسی بهینه:** بدون ایجاد هرگونه کوئری یا بار اضافی روی دیتابیس سرور.

### 🚀 نحوه نصب و استفاده

۱. فایل هوک را در مسیر زیر در فایل‌های WHMCS خود آپلود کنید:
<pre><code>includes/hooks/</code></pre>

۲. پس از آپلود، می‌توانید از تگ اختصاصی زیر در هر کجای قالب (فایل‌های با پسوند `.tpl`) استفاده کنید:
<pre><code>{vogravatar email=$clientsdetails.email rating="PG" size="60"}</code></pre>

۳. **مثال کاربردی (فراخوانی در تگ تصویر HTML):**
<pre><code>&lt;img src="{vogravatar email=$clientsdetails.email rating="PG" size="60"}" alt="user image"&gt;</code></pre>

---
## 📄 License / لایسنس
This project is licensed under the **MIT License**. Developed by **VahabOnline Team**.<br>
این پروژه تحت لایسنس **MIT** منتشر شده است. توسعه داده شده توسط **تیم وهاب آنلاین**.
