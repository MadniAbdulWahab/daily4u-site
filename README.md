# Daily4U — Drupal Website (January Theme Demo, Customized)

Daily4U is a Drupal-based business website built on top of the **January** theme demo and customized to represent the Daily4U brand, services, case studies, and delivery approach. The site is designed as a clean, modern consulting/technology services presence with a strong homepage narrative and dedicated pages for services, team, case studies, and contact.

This repository contains the full Drupal project (codebase + configuration) and local development setup via **DDEV**.

---

## Contents

- [Website Overview](#website-overview)
- [Key Pages](#key-pages)
- [Homepage Sections](#homepage-sections)
- [Local Development (DDEV)](#local-development-ddev)
- [Database Import](#database-import)
- [Drupal Admin Access](#drupal-admin-access)
- [Working With Content](#working-with-content)
- [Media & Images](#media--images)
- [Screenshots](#screenshots)
- [Project Structure](#project-structure)
- [Notes](#notes)

---

## Website Overview

**Daily4U** provides digital services delivered with a structured process: discovery, UX, implementation, integrations, and measurable outcomes. The site highlights:

- A high-impact hero area
- Service categories and delivery offerings
- Team members (Our Professionals)
- Case studies (portfolio-style)
- Partner/value proposition section
- Testimonials
- Blog listing (kept optional for now)
- “How We Work” section (process summary + link to full page)

---

## Key Pages

The website includes the following main pages:

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
   - Optional blog listing (currently not prioritized in README screenshots).

---

## Homepage Sections

The homepage is composed of multiple sections (from top to bottom). Each section is meant to be visually consistent with the January theme style, but customized for Daily4U content:

1. **Hero**
   - “We design, build, and scale digital services—clean architecture, fast delivery, measurable outcomes.”
2. **About / Intro**
   - “Daily4U — Digital services, delivered daily.” + short positioning statement.
3. **Our Professionals**
   - Team preview cards + “View More” link to full Team page.
4. **Our Services**
   - Service tabs/cards highlighting key offerings (e.g., dashboards/reporting, integrations, UX, delivery).
5. **Case Studies**
   - Case studies preview grid + link to full Case Studies page.
6. **Why partner with Daily4U**
   - Value proposition bullets + supporting image + link to deeper section/page.
7. **Testimonials**
   - Customer quotes / proof section.
8. **Our Blog**
   - Blog preview cards (can be replaced or redesigned later if needed).
9. **How We Work (Process Promo)**
   - Process teaser block + CTA to full “How We Work” page.
10. **Footer**
   - Quick links, subscription, and contact information.

---

## Local Development (DDEV)

This project is intended to run locally using **DDEV**.

### Prerequisites
- Docker installed and running
- DDEV installed
- WSL (if you are running on Windows)

### Start the project

```bash
cd ~/projects/daily4u-january-demo
ddev start
