## Portfolio Project — Daily4U Drupal Website (January Theme Demo, Customized)

Daily4U is a Drupal-based business website built on top of the **January** theme demo and customized to represent the Daily4U brand, services, case studies, and delivery approach. The site presents a clean, modern consulting/technology services presence with a strong homepage narrative and dedicated pages for services, team, case studies, and contact.

This repository contains the full Drupal project (codebase + configuration) and local development setup via **DDEV**.

---

### Achievement Summary (What I Made)
- Customized the **January** Drupal theme demo into a branded, portfolio-ready website for **Daily4U**.
- Designed and implemented a **conversion-oriented homepage flow** (hero → trust → offerings → proof → process CTA).
- Built a structured set of **core pages** (Services, Case Studies, Team, How We Work, Contact) with consistent layout and reusable blocks.
- Delivered a **reproducible local development workflow** using **DDEV** (Docker) with Composer + Drush commands for onboarding.
- Documented the project with a clear README and a screenshot structure suitable for demos, handover, and portfolio presentation.

---

## Website Overview

**Daily4U** provides digital services delivered with a structured process: discovery, UX, implementation, integrations, and measurable outcomes. The site highlights:

- A high-impact hero area
- Service categories and delivery offerings
- Team members (Our Professionals)
- Case studies (portfolio-style)
- Partner/value proposition section
- Testimonials
- Blog listing (optional)
- “How We Work” section (process summary + link to full page)

---

## Key Pages

1. **Home**
   - Full homepage with hero and business sections.
2. **About Us**
   - Company story and positioning.
3. **Our Services**
   - Service offerings and details.
4. **Case Studies**
   - Portfolio-style case studies (cards + detail pages).
5. **Our Professionals (Team)**
   - Team listing with search/sort.
6. **How We Work**
   - Delivery model / process page with structured narrative.
7. **Contact**
   - Contact details and inquiry form.
8. **Our Blog**
   - Optional blog listing (not prioritized in screenshots).

---

## Homepage Sections

Homepage sections (top to bottom), customized to match the January theme style while using Daily4U content:

1. **Hero**
   - “We design, build, and scale digital services—clean architecture, fast delivery, measurable outcomes.”
2. **About / Intro**
   - “Daily4U — Digital services, delivered daily.” + short positioning statement.
3. **Our Professionals**
   - Team preview cards + CTA to full Team page.
4. **Our Services**
   - Service tabs/cards highlighting key offerings (dashboards/reporting, integrations, UX, delivery).
5. **Case Studies**
   - Case studies preview grid + CTA to full Case Studies page.
6. **Why Partner With Daily4U**
   - Value proposition bullets + supporting image.
7. **Testimonials**
   - Social proof / quotes section.
8. **Our Blog**
   - Optional preview cards (can be redesigned later).
9. **How We Work (Process Promo)**
   - Process teaser block + CTA to full process page.
10. **Footer**
   - Quick links, subscription, and contact information.

---

## Local Development (DDEV)

### Prerequisites
- Docker installed and running
- DDEV installed
- WSL (if running on Windows)


## Screenshots

Screenshots are stored in:

```
docs/screenshots/
```

This README includes **page-level** screenshots and also supports **section-level** screenshots for the homepage.

### Full Homepage

![Home Full](docs/screenshots/home_full.png)

### Homepage Sections (Optional, Recommended)

> If you do not yet have these, you can add them later and keep the same filenames.

* About / Intro:
  ![Home About Section](docs/screenshots/home_about.png)

* Our Professionals:
  ![Home Professionals Section](docs/screenshots/home_professionals.png)

* Our Services:
  ![Home Services Section](docs/screenshots/home_services.png)

* Case Studies:
  ![Home Case Studies Section](docs/screenshots/home_case_studies.png)

* Why Partner:
  ![Home Why Partner Section](docs/screenshots/home_why_partner.png)

* Testimonials:
  ![Home Testimonials Section](docs/screenshots/home_testimonials.png)

* How We Work:
  ![Home How We Work Section](docs/screenshots/home_how_we_work.png)

### Core Pages

* About:
  ![About](docs/screenshots/about.png)

* Services:
  ![Services](docs/screenshots/services.png)

* Case Studies:
  ![Case Studies](docs/screenshots/case-studies.png)

* How We Work:
  ![How We Work](docs/screenshots/how-we-work-page.png)

* Team:
  ![Team](docs/screenshots/team.png)

* Contact:
  ![Contact](docs/screenshots/contact.png)

---

## Project Structure

Key directories:

* `web/` — Drupal web root (core, modules, themes, sites).
* `config/` — Drupal configuration (if exported / managed via config sync).
* `database/` — Database dump used to reproduce demo content locally.
* `vendor/` — Composer dependencies (generated by `composer install`).
* `docs/screenshots/` — Documentation images used in README.

---

## Notes

* This project started from the January theme demo and was customized for Daily4U branding and content.
* If you change theme CSS assets (e.g., banner background images), clear cache:

```bash
ddev drush cr
```

Common reasons changes “don’t show”:

* Cache not cleared
* Editing the wrong block (multiple similar blocks exist)
* A different page uses a different template/region configuration

---

## License / Credits

* Drupal and contributed modules are governed by their original licenses.
* Theme: January (customized for Daily4U).
* Daily4U content in this repository is for project/demo use.


