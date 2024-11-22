پروژه CoffeeProject:

معرفی پروژه:

این پروژه یک وب‌سایت ساده برای معرفی و سفارش قهوه است. این وب‌سایت با استفاده از تکنولوژی‌های زیر پیاده‌سازی شده است:


HTML

CSS

PHP

MySQL


هدف این پروژه ارائه یک سیستم ساده برای سفارش آنلاین قهوه و نمایش اطلاعات محصولات است.

ویژگی‌های پروژه:

طراحی رابط کاربری زیبا و واکنش‌گرا (Responsive Design).

امکان افزودن و مدیریت محصولات.

فرم تماس و سفارش‌دهی.

ذخیره اطلاعات سفارش‌ها در دیتابیس.

نحوه استفاده از پروژه:

پیش‌نیازها:

برای اجرای این پروژه، نیاز به نرم‌افزارهای زیر دارید:


XAMPP یا WAMP برای شبیه‌سازی سرور محلی.

مرورگر وب (مثل Chrome یا Firefox).

ویرایشگر کد (مثل VS Code).

مراحل راه‌اندازی:

دانلود پروژه

ابتدا پروژه را کلون یا دانلود کنید:


git clone https://github.com/seyedhamidhosseini/CoffeeProject.git

کپی فایل‌ها به سرور محلی

پوشه پروژه را در مسیر htdocs (برای XAMPP) یا مسیر مشابه برای سایر سرورها کپی کنید.

ایجاد دیتابیس:


نرم‌افزار XAMPP را اجرا کرده و Apache و MySQL را فعال کنید.

وارد phpMyAdmin شوید.

یک دیتابیس جدید به نام coffee_project ایجاد کنید.

فایل coffee_project.sql موجود در پروژه را ایمپورت کنید.

تنظیمات اتصال به دیتابیس:

فایل config.php را باز کنید و اطلاعات اتصال به دیتابیس را بررسی کنید:



$servername = "localhost";

$username = "root";

$password = ""; 

$dbname = "coffee_project";

اجرای پروژه:

مرورگر خود را باز کنید و آدرس زیر را وارد کنید:

http://localhost/CoffeeProject
