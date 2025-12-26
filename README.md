# Daily4U — Drupal Website (January Theme Demo, Customized)

Daily4U is a Drupal-based business website built on top of the **January** theme demo and customized to represent the Daily4U brand, services, case studies, and delivery approach. The site is designed as a clean, modern consulting/technology services presence with a strong homepage narrative and dedicated pages for services, team, case studies, and contact.

This repository contains the full Drupal project (codebase + configuration) and local development setup via **DDEV**.

---

## Contents

* [Website Overview](#website-overview)
* [Key Pages](#key-pages)
* [Homepage Sections](#homepage-sections)
* [Local Development (DDEV)](#local-development-ddev)
* [Database Import](#database-import)
* [Drupal Admin Access](#drupal-admin-access)
* [Working With Content](#working-with-content)
* [Media & Images](#media--images)
* [Screenshots](#screenshots)
* [Project Structure](#project-structure)
* [Notes](#notes)
* [License / Credits](#license--credits)
* [Important (so your README screenshots don’t break)](#important-so-your-readme-screenshots-dont-break)

---

## Website Overview

**Daily4U** provides digital services delivered with a structured process: discovery, UX, implementation, integrations, and measurable outcomes. The site highlights:

* A high-impact hero area
* Service categories and delivery offerings
* Team members (Our Professionals)
* Case studies (portfolio-style)
* Partner/value proposition section
* Testimonials
* Blog listing (optional for now)
* “How We Work” section (process summary + link to full page)

---

## Key Pages

The website includes the following main pages:

1. **Home**

   * Full homepage with hero and business sections.
2. **About Us**

   * Company story and positioning.
3. **Our Services**

   * Service offerings and details.
4. **Case Studies**

   * Portfolio-style case studies (cards + detail pages).
5. **Our Professionals (Team)**

   * Team listing with search/sort.
6. **How We Work**

   * Delivery model / process page with structured narrative.
7. **Contact**

   * Contact details and inquiry form.
8. **Our Blog**

   * Optional blog listing (currently not prioritized in README screenshots).

---

## Homepage Sections

The homepage is composed of multiple sections (from top to bottom). Each section is meant to be visually consistent with the January theme style, but customized for Daily4U content:

1. **Hero**

   * “We design, build, and scale digital services—clean architecture, fast delivery, measurable outcomes.”
2. **About / Intro**

   * “Daily4U — Digital services, delivered daily.” + short positioning statement.
3. **Our Professionals**

   * Team preview cards + “View More” link to full Team page.
4. **Our Services**

   * Service tabs/cards highlighting key offerings (e.g., dashboards/reporting, integrations, UX, delivery).
5. **Case Studies**

   * Case studies preview grid + link to full Case Studies page.
6. **Why partner with Daily4U**

   * Value proposition bullets + supporting image + link to deeper section/page.
7. **Testimonials**

   * Customer quotes / proof section.
8. **Our Blog**

   * Blog preview cards (can be replaced or redesigned later if needed).
9. **How We Work (Process Promo)**

   * Process teaser block + CTA to full “How We Work” page.
10. **Footer**

* Quick links, subscription, and contact information.

---

## Local Development (DDEV)

This project is intended to run locally using **DDEV**.

### Prerequisites

* Docker installed and running
* DDEV installed
* WSL (if you are running on Windows)

### Start the project

```bash
cd ~/projects/daily4u-january-demo
ddev start
```

### Install PHP dependencies

```bash
ddev composer install
```

If vendor dependencies were removed:

```bash
rm -rf vendor
ddev composer install
```

---

## Database Import

A database export is included under `database/`.

Example import command:

```bash
ddev import-db --file="database/januarydt_2023 (1).sql.gz"
```

After importing, run:

```bash
ddev drush updb -y
ddev drush cr
```

---

## Drupal Admin Access

Generate a one-time admin login link:

```bash
ddev drush uli
```

Open the generated URL in your browser to log in as admin.

---

## Working With Content

### Edit a page (Basic page)

1. Go to **Content**
2. Find the page (Home, About, Services, etc.)
3. Click **Edit**
4. Update **Title** and **Body**
5. Save

### Layout Builder (if enabled for specific content)

Some pages/sections may be built using blocks and layout builder settings. In those cases:

* Update the correct **Block content** item
* Then clear cache if changes do not appear:

```bash
ddev drush cr
```

---

## Media & Images

### Upload images

* Go to **Content → Media** (or **Content → Files** depending on configuration)
* Upload the image
* Use it in blocks/pages as Media Image or via HTML `<img src="...">`

### Get the URL of an uploaded image

Common ways:

* Open the image file from the Media library and copy its public URL
* Or locate it under:

```
/sites/default/files/...
```

Example:

```html
<img src="/sites/default/files/2025-12/sample3.png" alt="Daily4U image">
```

---

## Screenshots

Screenshots are stored in:

```
docs/screenshots/
```

This README includes **section-level screenshots** to document the homepage composition. Blog screenshots are intentionally skipped.

> Note: If you do not yet have a specific section screenshot, you can add it later and keep the same filename.

### Full Homepage

![Home Full](docs/screenshots/home_full.png)

### Homepage Sections

#### About / Intro Section

![Home About Section](docs/screenshots/home_about.png)

#### Our Professionals (Homepage Preview)

![Home Professionals Section](docs/screenshots/home_professionals.png)

#### Our Services (Homepage Preview)

![Home Services Section](docs/screenshots/home_services.png)

#### Case Studies (Homepage Preview)

![Home Case Studies Section](docs/screenshots/home_case_studies.png)

#### Why Partner With Daily4U (Homepage Section)

![Home Why Partner Section](docs/screenshots/home_why_partner.png)

#### Testimonials (Homepage Section)

![Home Testimonials Section](docs/screenshots/home_testimonials.png)

#### How We Work (Homepage Section)

![Home How We Work Section](docs/screenshots/home_how_we_work.png)

### Core Pages

#### About

![About](docs/screenshots/about.png)

#### Services

![Services](docs/screenshots/services.png)

#### Case Studies

![Case Studies](docs/screenshots/case-studies.png)

#### How We Work

![How We Work](docs/screenshots/how-we-work-page.png)

#### Our Team (Our Professionals)

![Team](docs/screenshots/team.png)

#### Contact

![Contact](docs/screenshots/contact.png)

---

## Project Structure

Key directories:

* `web/`
  Drupal web root (core, modules, themes, sites).

* `config/`
  Drupal configuration (if exported / managed via config sync).

* `database/`
  Database dump used to reproduce demo content locally.

* `vendor/`
  Composer dependencies (generated by `composer install`).

* `docs/screenshots/`
  Documentation images used in README.

---

## Notes

* This project started from the January theme demo and was customized for Daily4U branding and content.
* If you change theme CSS assets (e.g., banner background images), clear cache:

```bash
ddev drush cr
```

* If a change “doesn’t show”, it is almost always one of:

  * Cache not cleared
  * Editing the wrong block (multiple similar blocks exist)
  * A different page uses a different template/region configuration

---

## License / Credits

* Drupal and contributed modules are governed by their original licenses.
* Theme: January (customized for Daily4U).
* Daily4U content in this repository is for project/demo use.

---

## Important (so your README screenshots don’t break)

Right now, your folder `docs/screenshots/` contains:

* `about.png`
* `blogs.png` (skipped in README)
* `case-studies.png`
* `contact.png`
* `home_full.png`
* `how-we-work-page.png`
* `services.png`
* `team.png`

But the README above also references **section screenshots** like:

* `docs/screenshots/home_about.png`
* `docs/screenshots/home_professionals.png`
* `docs/screenshots/home_services.png`
* `docs/screenshots/home_case_studies.png`
* `docs/screenshots/home_why_partner.png`
* `docs/screenshots/home_testimonials.png`
* `docs/screenshots/home_how_we_work.png`

 
