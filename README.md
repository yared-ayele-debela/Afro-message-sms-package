# Afromessage SMS Package for Laravel

Afromessage is a Laravel package that provides a simple, clean interface for sending SMS messages, verifying OTPs, and handling bulk SMS using the Afromessage gateway.

---

## 🚀 Features

- ✅ Send OTP SMS
- 🔐 Verify OTP
- 📩 Send single or bulk SMS
- 🧩 Easy Laravel integration
- 📝 Configurable and extendable

---

## 📦 Installation

Require the package via Composer:

```bash
composer require your-vendor/afromessage

⚙️ Configuration
Publish the configuration file:

bash
Copy
Edit
php artisan vendor:publish --tag=afromessage-config
This will create:

arduino
Copy
Edit
config/afromessage.php
config/afromessage.php
php
Copy
Edit
return [
    'api_key' => env('AFROMESSAGE_API_KEY'),
    'base_url' => env('AFROMESSAGE_BASE_URL', 'https://api.afromessage.com/v1'),
];

Add to .env
env
Copy
Edit
AFROMESSAGE_API_KEY=your_api_key
AFROMESSAGE_BASE_URL=https://api.afromessage.com/v1

✅ Usage
Send SMS
php
Copy
Edit
use Afromessage\Sms;

Sms::send('0912345678', 'Hello from Afromessage!');
Send OTP
php
Copy
Edit
Sms::sendOtp('0912345678');
Verify OTP
php
Copy
Edit
$isValid = Sms::verifyOtp('0912345678', '123456');

if ($isValid) {
    // OTP is correct
}
Send Bulk SMS
php
Copy
Edit
Sms::sendBulk(['0912345678', '0987654321'], 'Hello group!');

