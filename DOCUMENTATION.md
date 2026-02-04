# TRNDX CONSOLIDATED - E-Commerce Electronics Store

## Project Overview

TRNDX CONSOLIDATED is a full-featured e-commerce website for selling electronics in Zambia. Built with Laravel Blade templating and Bootstrap 5, the platform includes a customer-facing shop, professional admin dashboard, and integrated services for device repairs and phone pre-ordering.

---

## 🌟 Key Features

### For Customers

#### 📱 Product Catalog
- **Smartphones**: iPhone 15/14/13 series
- **Audio Devices**: AirPods Pro, Samsung Galaxy Buds
- **Accessories**: Chargers, cables, screen protectors, car mounts
- **Computers**: MacBook Pro, Dell XPS, HP Pavilion
- **Search & Filter**: By category and product name
- **Product Details**: Pricing in Zambian Kwacha (ZK)

#### 🛠️ Professional Services
1. **Device Repair & Maintenance**
   - iPhone Screen Replacement (ZK 800-1,800)
   - iPhone Battery Replacement (ZK 350-650)
   - Additional repairs: Charging ports, speakers, cameras
   - Professional technicians using genuine parts

2. **Phone Pre-Ordering Service**
   - Reserve upcoming flagship models
   - 60% deposit required, pay balance on delivery
   - Guaranteed availability and lowest prices
   - Flexible payment options

#### 🚚 Delivery & Shipping
- **Free Delivery**: Within Livingstone
- **Countrywide Service**: Available across all Zambia provinces
- **Multiple Courier Options**:
  - Platinum Couriers - Fast & reliable
  - DailyMail Couriers - Quick urban delivery
  - FedEx Courier - International standards
  - EMS Post Office - Budget-friendly option
- **Real-time Tracking**: Monitor your shipments

#### 💳 Payment Methods
- Bank Transfers
- Mobile Money (Airtel, MTN, Zamtel)
- Installment Plans (Flexible terms)

#### 📞 Customer Support
- **24/7 WhatsApp Support**: +260 961 234567
- **Email**: info@trndx.co.zm
- **Phone**: Available during business hours
- Quick response times and professional assistance

### For Administrators

#### 📊 Dashboard
- Real-time business metrics
- Revenue tracking
- Order statistics
- Customer insights
- Top products performance

#### 🛒 Order Management
- View all orders with status tracking
- Filter by status (Pending, Processing, In Transit, Delivered)
- Update order information
- Generate invoices

#### 📦 Product Management
- Add new products
- Edit existing products
- Manage stock levels
- Monitor product performance
- Category organization

#### 👥 Customer Management
- View customer profiles
- Track purchase history
- Monitor spending patterns
- Manage customer information

#### 🚛 Delivery Management
- Track shipments in real-time
- Manage multiple couriers
- Coordinate delivery zones
- Handle delivery issues

#### 💰 Payment Processing
- Transaction management
- Payment method tracking
- Revenue analytics
- Failed payment handling

#### 🔧 Services Management
- Repair request tracking
- Pre-order management
- Service scheduling
- Performance metrics

#### 📈 Reports & Analytics
- Business reports
- Sales analytics
- Payment method distribution
- Customer satisfaction metrics

---

## 📂 File Structure

```
resources/views/
├── layouts/
│   └── app.blade.php              # Main layout template
├── home.blade.php                 # Homepage with hero section
├── products.blade.php             # Product catalog page
├── services.blade.php             # Services page (repairs & pre-orders)
├── delivery.blade.php             # Delivery information page
├── contact.blade.php              # Contact form page
└── admin/
    ├── dashboard.blade.php        # Admin dashboard
    ├── orders.blade.php           # Order management
    ├── products.blade.php         # Product management
    ├── customers.blade.php        # Customer management
    ├── delivery.blade.php         # Delivery tracking
    ├── payments.blade.php         # Payment management
    ├── services.blade.php         # Services management
    └── reports.blade.php          # Analytics & reports

routes/
└── web.php                        # All application routes
```

---

## 🎨 Color Scheme

- **Primary Color**: #ff6b35 (Orange)
- **Secondary Color**: #004e89 (Navy Blue)
- **Dark Color**: #1a1a1a (Almost Black)
- **Light Color**: #f5f5f5 (Light Gray)

---

## 📱 Responsive Design

- **Mobile First**: Works seamlessly on all devices
- **Bootstrap 5**: Professional responsive framework
- **Touch-Friendly**: Easy navigation on mobile
- **Fast Loading**: Optimized images and code

---

## 🛣️ Routes & Navigation

### Public Routes
| Route | Page | Purpose |
|-------|------|---------|
| `/` | Home | Landing page with featured products |
| `/products` | Products | Full product catalog with search |
| `/services` | Services | Repair and pre-order information |
| `/delivery` | Delivery | Shipping zones and courier info |
| `/contact` | Contact | Contact form and business info |

### Admin Routes (Protected)
| Route | Page | Purpose |
|-------|------|---------|
| `/admin/dashboard` | Dashboard | Overview & analytics |
| `/admin/orders` | Orders | Order management |
| `/admin/products` | Products | Product catalog management |
| `/admin/customers` | Customers | Customer information |
| `/admin/delivery` | Delivery | Shipment tracking |
| `/admin/payments` | Payments | Payment processing |
| `/admin/services` | Services | Service requests |
| `/admin/reports` | Reports | Business analytics |

---

## 💰 Pricing Reference

### Smartphones
- iPhone 15 Pro Max: ZK 10,500
- iPhone 15 Pro: ZK 8,500
- iPhone 15: ZK 6,800
- iPhone 14: ZK 5,500

### Audio
- AirPods Pro 2: ZK 1,800
- AirPods 3: ZK 1,200
- Galaxy Buds 3: ZK 1,500
- Galaxy Buds 2: ZK 1,100

### Laptops
- MacBook Pro 16" M3 Max: ZK 20,500
- MacBook Pro 14" M3 Max: ZK 18,000
- Dell XPS 15: ZK 16,500
- HP Pavilion 15: ZK 9,500

### Services
- iPhone Screen Replacement: ZK 800-1,800
- iPhone Battery Replacement: ZK 350-650
- Phone Pre-Order Deposit: 60% of phone price

---

## 🚀 Getting Started

### Prerequisites
- PHP 8.0 or higher
- Laravel 10.x
- Composer
- MySQL/MariaDB

### Installation

1. **Clone the Repository**
```bash
git clone <repository-url>
cd "TRNDX CONSOLIDATED"
```

2. **Install Dependencies**
```bash
composer install
npm install
```

3. **Configure Environment**
```bash
cp .env.example .env
php artisan key:generate
```

4. **Database Setup**
```bash
php artisan migrate
php artisan db:seed  # Optional: seed with sample data
```

5. **Run the Application**
```bash
php artisan serve
# Access at http://localhost:8000
```

---

## 🔐 Admin Access

To access the admin dashboard:
1. Navigate to `/admin/dashboard`
2. Authentication middleware protects all admin routes
3. Only users with `is_admin` flag can access

**Demo Admin Credentials** (Setup required):
- Email: admin@trndx.co.zm
- Role: Administrator

---

## 📞 WhatsApp Integration

All pages include WhatsApp buttons for easy customer contact:
- **WhatsApp Number**: +260 961 234567
- **Integration**: Pre-filled messages for products/services
- **24/7 Available**: Round-the-clock customer support

---

## 🎯 Localization for Zambia

- **Currency**: Zambian Kwacha (ZK)
- **Location**: Based in Livingstone
- **Delivery Zones**: All provinces covered
- **Payment Methods**: Local mobile money options
- **Language**: English

---

## 📊 Analytics & Reporting

The admin dashboard provides:
- Real-time revenue tracking
- Order statistics
- Customer behavior analysis
- Product performance metrics
- Payment method distribution
- Delivery performance
- Service request trends

---

## 🛡️ Security Features

- CSRF Protection (Laravel built-in)
- Middleware-based authentication
- Role-based access control
- Secure form handling
- Input validation
- Database protection

---

## 🎓 Development Notes

### Template System
- Uses Laravel Blade templating
- Consistent layout with `@extends('layouts.app')`
- Reusable components and sections

### Styling
- Bootstrap 5 CSS framework
- Custom CSS variables for theming
- Responsive design patterns
- Professional UI components

### Navigation
- Consistent navbar across all pages
- Footer with links and contact info
- Breadcrumb support ready
- Mobile-friendly menu toggle

---

## 📝 Future Enhancements

- [ ] Payment gateway integration (Stripe, Paypal)
- [ ] User registration & login system
- [ ] Shopping cart functionality
- [ ] Order history for customers
- [ ] Rating & review system
- [ ] Email notifications
- [ ] SMS alerts
- [ ] Advanced inventory management
- [ ] Multi-language support
- [ ] Blog/Knowledge base
- [ ] Customer testimonials
- [ ] Warranty management

---

## 🤝 Support & Contact

**Business Information**
- Name: TRNDX CONSOLIDATED
- Location: Livingstone, Zambia
- Phone: +260 961 234567
- Email: info@trndx.co.zm
- WhatsApp: +260 961 234567

**Business Hours**
- Monday - Friday: 08:00 AM - 06:00 PM
- Saturday: 09:00 AM - 05:00 PM
- Sunday: 10:00 AM - 04:00 PM
- Support: 24/7 via WhatsApp

---

## 📄 License

This project is developed for TRNDX CONSOLIDATED. All rights reserved.

---

## ✅ Deployment Checklist

Before going live:
- [ ] Configure production environment (.env)
- [ ] Set debug mode to false
- [ ] Configure database backups
- [ ] Set up SSL certificate
- [ ] Configure email notifications
- [ ] Test all payment methods
- [ ] Verify delivery courier integrations
- [ ] Test WhatsApp integration
- [ ] Performance optimization
- [ ] Security audit
- [ ] Analytics setup
- [ ] Backup strategy

---

## 🆘 Troubleshooting

### Routes not working
- Run `php artisan route:list` to verify routes
- Clear cache: `php artisan route:clear`

### Database errors
- Run migrations: `php artisan migrate`
- Check database credentials in .env

### Admin access issues
- Ensure user has `is_admin = 1` in database
- Check middleware configuration

### WhatsApp links not working
- Verify phone number format
- Ensure HTTPS on production
- Test on WhatsApp-enabled device

---

## 📈 Performance Tips

1. Use CDN for images
2. Minify CSS and JavaScript
3. Enable browser caching
4. Optimize database queries
5. Use lazy loading for images
6. Compress assets
7. Monitor performance regularly

---

**Version**: 1.0.0
**Last Updated**: January 23, 2026
**Status**: Ready for Development
