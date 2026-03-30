<div align="center">

<img src="https://capsule-render.vercel.app/api?type=waving&color=gradient&customColorList=12,20,24&height=180&section=header&text=Shell%20App%20%F0%9F%97%BA%EF%B8%8F&fontSize=48&fontColor=fff&animation=twinkling&fontAlignY=32&desc=GIS-Based%20Shell%20Gas%20Station%20Mapping%20%7C%20Surabaya&descAlignY=55&descSize=16" />

</div>

<div align="center">

[![Laravel](https://img.shields.io/badge/Laravel-11.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![React](https://img.shields.io/badge/React-18.x-61DAFB?style=for-the-badge&logo=react&logoColor=black)](https://react.dev)
[![OpenStreetMap](https://img.shields.io/badge/OpenStreetMap-7EBC6F?style=for-the-badge&logo=openstreetmap&logoColor=white)](https://openstreetmap.org)
[![ApexCharts](https://img.shields.io/badge/ApexCharts-3.x-00B4D8?style=for-the-badge&logo=chart.js&logoColor=white)](https://apexcharts.com)
[![License](https://img.shields.io/badge/License-MIT-green?style=for-the-badge)](LICENSE)

</div>

---

## 📖 About

**Shell App** is a GIS-based web application built to visualize and map Shell gas station locations across **Surabaya, East Java, Indonesia**. By leveraging interactive maps powered by **OpenStreetMap**, this application helps business analysts and entrepreneurs identify the spatial distribution of Shell stations — enabling smarter market analysis and business opportunity discovery.

---

## 🗺️ Features

- 📍 **Interactive Map** — View all Shell gas station locations on an OpenStreetMap-powered map
- 📊 **Data Analytics** — Visual charts using ApexCharts for station distribution analysis
- 🔍 **Location Search** — Quickly find and navigate to specific stations
- 📈 **Market Insights** — Spatial data to support business market analysis
- 🔔 **Alerts & Notifications** — User-friendly alerts with SweetAlert2
- 📱 **Responsive Design** — Accessible on desktop and mobile devices

---

## 🛠️ Tech Stack

| Layer | Teknologi | Fungsi |
|-------|-----------|--------|
| **Backend** | Laravel 11 | REST API, business logic, database |
| **Frontend** | React.js | Interactive UI (SPA) |
| **Map** | OpenStreetMap + Leaflet.js | GIS & interactive mapping |
| **Charts** | ApexCharts 3.x | Data visualization & analytics |
| **Alerts** | SweetAlert2 11.x | Beautiful popup notifications |
| **Database** | PostgreSQL / MySQL | Location & station data |

---

## 📁 Project Structure

```
shell-app/
├── 📂 app/                        # Laravel Application
│   ├── Http/
│   │   ├── Controllers/           # API Controllers
│   │   └── Requests/              # Form Requests
│   ├── Models/                    # Eloquent Models
│   └── Services/                  # Business Logic
│
├── 📂 database/
│   ├── migrations/                # Database Migrations
│   └── seeders/                   # Station Data Seeders
│
├── 📂 resources/
│   └── js/                        # React.js Application
│       ├── components/
│       │   ├── Map/               # OpenStreetMap Components
│       │   ├── Charts/            # ApexCharts Components
│       │   └── UI/                # Reusable UI Components
│       ├── pages/                 # Page Components
│       ├── services/              # API Calls
│       └── App.jsx
│
├── 📂 routes/
│   └── api.php                    # API Routes
├── package.json
└── composer.json
```

---

## 🚀 Installation & Setup

### Prerequisites

- **PHP** >= 8.2
- **Node.js** >= 20.x
- **Composer** >= 2.x
- **PostgreSQL** or **MySQL**

---

### 1️⃣ Clone Repository

```bash
git clone https://github.com/iostream-code/shell-app.git
cd shell-app
```

---

### 2️⃣ Install Dependencies

```bash
# Backend dependencies
composer install

# Frontend dependencies
npm install
```

---

### 3️⃣ Environment Setup

```bash
cp .env.example .env
php artisan key:generate
```

Configure your `.env` file:

```env
APP_NAME=ShellApp
APP_URL=http://localhost:8000

DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=shell_app
DB_USERNAME=postgres
DB_PASSWORD=

# Optional: Map tile configuration
MAP_TILE_URL=https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png
```

---

### 4️⃣ Database Setup

```bash
# Run migrations
php artisan migrate

# Seed station data
php artisan db:seed
```

---

### 5️⃣ Run the Application

```bash
# Start Laravel backend
php artisan serve

# In a new terminal, start React frontend
npm run dev
```

Access the app at `http://localhost:8000`

---

## 🔌 API Endpoints

```
GET    /api/stations              # Get all Shell stations
GET    /api/stations/{id}         # Get station detail
GET    /api/stations/nearby       # Get stations by proximity
GET    /api/analytics/summary     # Station distribution summary
GET    /api/analytics/by-district # Stations grouped by district
```

---

## 📊 Screenshots

<div align="center">

| Map View | Analytics Dashboard |
|:--------:|:-------------------:|
| ![Map](https://placehold.co/480x280/7EBC6F/ffffff?text=Interactive+Map) | ![Analytics](https://placehold.co/480x280/FF2D20/ffffff?text=Analytics+Dashboard) |
| Interactive OpenStreetMap with station markers | Charts & distribution data |

</div>

---

## 🤝 Contributing

1. Fork this repository
2. Create a feature branch: `git checkout -b feature/your-feature`
3. Commit your changes: `git commit -m 'feat: add your feature'`
4. Push to the branch: `git push origin feature/your-feature`
5. Open a **Pull Request**

---

## 📄 License

This project is licensed under the **MIT License** — see the [LICENSE](LICENSE) file for details.

---

<div align="center">

**Shell App** — Built with ❤️ in Surabaya, Indonesia 🇮🇩

[![GitHub](https://img.shields.io/badge/GitHub-iostream--code-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/iostream-code)

<img src="https://capsule-render.vercel.app/api?type=waving&color=gradient&customColorList=12,20,24&height=120&section=footer" />

</div>
