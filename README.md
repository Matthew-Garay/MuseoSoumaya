# Museo Soumaya — Sitio Web

<p align="center">
  <a href="https://github.com/Matthew-Garay/MuseoSoumaya/actions/workflows/ci.yml"><img src="https://github.com/Matthew-Garay/MuseoSoumaya/actions/workflows/ci.yml/badge.svg" alt="CI Status"/></a>
  <a href="https://github.com/Matthew-Garay/MuseoSoumaya/security/dependabot"><img src="https://img.shields.io/badge/Dependabot-enabled-blue?style=flat-square&logo=github&labelColor=555555" alt="Dependabot"/></a>
  <a href="https://github.com/Matthew-Garay/MuseoSoumaya/releases"><img src="https://img.shields.io/github/v/release/Matthew-Garay/MuseoSoumaya?style=flat-square&label=Release&labelColor=555555" alt="Release"/></a>
</p>

Sitio web informativo del Museo Soumaya desarrollado con PHP 8.2. Incluye secciones de galerías, colecciones, exposiciones, quiénes somos, contacto y arte para todos.

---

## Descripción

Sitio web informativo del Museo Soumaya con navegación entre secciones: galerías, colecciones, exposiciones, quiénes somos, contacto y arte para todos. Proyecto académico desarrollado con PHP puro sin base de datos, ideal para presentación de contenido estático.

## Stack tecnológico

- **Backend:** PHP 8.2
- **Frontend:** HTML5, CSS3, JavaScript
- **Estilos:** Bootstrap 5 (CDN), Tailwind CSS (CDN)
- **Servidor local:** Apache (XAMPP)

## Arquitectura del sistema

```mermaid
graph TD
    A[Visitante] --> B[Frontend: HTML / CSS / JS]
    B --> C[Backend: PHP 8.2]
    C --> D[Contenido estático: secciones PHP]
    F[GitHub Actions CI/CD] --> C
    G[Dependabot Security] --> C
    
    style A fill:#e1f5fe,stroke:#01579b
    style B fill:#fff3e0,stroke:#e65100
    style C fill:#e8f5e9,stroke:#1b5e20
    style D fill:#f3e5f5,stroke:#4a148c
    style F fill:#ffe0b2,stroke:#ef6c00
    style G fill:#ffebee,stroke:#b71c1c
```

---
