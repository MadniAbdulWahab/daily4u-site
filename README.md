# Daily4U — Drupal Website (January Theme)

Daily4U is a clean, professional multi-page website built with **Drupal** using the **January Theme**.  
The site is designed for a modern services/tech-consulting brand identity, with structured content pages, reusable sections, and fast content editing through the Drupal admin UI.

This repository contains the full Drupal codebase and the local development configuration used to build and customize the Daily4U website.

---

## Tech Stack

- **Drupal** (CMS)
- **January Theme** (front-end theme)
- **DDEV** (local dev environment)
- **PHP + Composer** (dependency management)
- **MySQL/MariaDB** (database via DDEV)

---

## Project Goals

- Build a modern, credible services website suitable for portfolio/CV use
- Keep the site easy to edit using Drupal (pages, sections, media)
- Maintain a consistent visual style across all pages (hero, typography, spacing)
- Support growth: case studies, services, team profiles, and insights/blogs

---

## Key Features

- Responsive theme-based layout (January Theme)
- Multi-page structure with consistent branding
- Reusable sections/blocks for fast page building
- CTA-driven design (contact and conversion focused)
- Media management (images uploaded and reused)
- Professional “trust” content: case studies, testimonials, and process description

---

## Site Pages

### Home
The landing page provides a professional overview of Daily4U:
- Hero section + primary call-to-action
- “Why partner with Daily4U?” value propositions
- “How We Work” teaser linking to full process page
- Services highlights and trust sections

### Services
A structured services overview, tailored for a consulting/digital delivery style offering:
- Website & CMS delivery (Drupal)
- UX/UI and content structure
- Integrations & APIs
- Automation and workflow improvement
- Analytics and reporting
- Ongoing support and sustainment

### How We Work
A process page that explains delivery from discovery to release:
- Discovery and scope definition
- UX and prototype validation
- Build cycles with checkpoints and QA
- Launch and continuous improvement

### Case Studies
Showcases sample engagements and outcomes:
- Situation → approach → delivery → measurable results
- Suitable for demonstrating credibility and portfolio impact

### About
Brand and team credibility page:
- Company overview
- Mission / Vision / History sections
- “What makes us different” narrative
- Team introduction

### Contact
Contact and engagement page:
- Primary CTA for discovery call / inquiry
- Contact details and next-step guidance

### Blogs / Insights (optional)
A place for thought leadership, updates, and content marketing.  
Can also be replaced later with a more domain-fitting page (e.g., “Resources”, “Industries”, “FAQs”).

---

## Screenshots

The following screenshots are included in the repository under `docs/screenshots/`.

### Main Pages

- Home  
  ![Home](docs/screenshots/home_full.png)

- Services  
  ![Services](docs/screenshots/services.png)

- How We Work  
  ![How We Work](docs/screenshots/how-we-work-page.png)

- Case Studies  
  ![Case Studies](docs/screenshots/case-studies.png)

### Additional Pages

- About  
  ![About](docs/screenshots/about.png)

- Contact  
  ![Contact](docs/screenshots/contact.png)

- Blogs / Insights  
  ![Blogs](docs/screenshots/blogs.png)

---

## Local Development (DDEV)

### Prerequisites
- Docker Desktop / Docker Engine
- DDEV installed
- Git
- (Optional) mkcert for local HTTPS trust

### Start the project
From the project root:
```bash
ddev start
