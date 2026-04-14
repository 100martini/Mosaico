# Mosáico 🎨

> pick a tile. colour it. design your own custom mosaic.

Mosáico is a web-based mosaic personalization and ordering system built for a real tile company. Users can browse authentic tile patterns, customize colours, and design fully personalized mosaic layouts — previewed in real time and ready to be saved or ordered.

---

## Features

- Multi-language support — English, Español, Français, Deutsch
- Authentication system — sliding login/register panel
- Tile editor — choose centre and border patterns from a real tile catalogue
- Advanced colour customization — multiple editable colour zones per tile
- Live mosaic preview — 12-column grid with correct border and corner rotations
- Order-ready designs — save mosaics and submit them for production

---

## Tech Stack

| Layer | Technology |
|------|------------|
| Backend | Laravel 8 |
| Templating | Blade |
| Frontend UI | Bootstrap 5 |
| DOM Logic | jQuery |
| Rendering | Vanilla JavaScript (canvas + transforms) |
| Runtime | PHP 8.3 |

---

## Installation

```bash
git clone https://github.com/wel-kass/mosaico
cd mosaico

composer install
cp .env.example .env
php artisan key:generate
php artisan storage:link

php artisan serve --port=8001
```

then go to `http://localhost:8001` and start designing tiles like it's a Tuesday in Bologna.

---

## Project Structure

```
resources/views/
├── langSelect.blade.php
├── login.blade.php
├── home.blade.php
├── repeatText*.blade.php
└── repeatTextCorner*.blade.php

public/
├── Images/
│   ├── center/
│   └── border/
├── css/
│   ├── home_style.css
│   └── mosaico_style.css
└── js/
    └── events.js
```

---

## How the tile engine works

Each tile pattern has multiple colour layers (up to 6). When you pick a colour swatch, the JS swaps the image source to `{tileId}_{layer}{colorCode}.png`. Border tiles are the same but also get CSS `rotate()` transforms — 90°, 180°, 270° — so they wrap the canvas correctly at every side and corner.

```
Images/border/401_1.png                  → border side, layer 1, no colour
Images/border/401_1corner.png            → corner version, same tile
Images/border/401_1letter7ca6ca.png      → corner + blue colour applied
```

It's image-based, it's clever, and it works.

---

## Admin Access

The admin dashboard lives at `/admin`. To get there:

1. Log in at `/login` with an admin account
2. Go to `/admin`

To make any existing user an admin, run:

```bash
php artisan tinker
```
```php
\App\Models\User::where('email', 'you@example.com')->update(['is_admin' => 1]);
```

The admin can view all orders, filter by status, and update order statuses (pending → confirmed → shipped). Customers get an email on each status change.

---
 
## notes

- built as a client project — company name intentionally omitted
 
---

*made with Laravel, jQuery, and a genuine appreciation for italian floor tiles.*
