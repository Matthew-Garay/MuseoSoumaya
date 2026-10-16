# Arquitectura y Decisiones de Diseño - Museo Soumaya

## Visión general

Sitio web informativo del Museo Soumaya desarrollado con PHP 8.2. Incluye secciones de galerías, colecciones, exposiciones, quiénes somos, contacto y arte para todos.

## Decisiones de arquitectura (ADR)

### ADR-001: Sitio informativo sin base de datos

**Estado:** Aceptado  
**Contexto:** Proyecto académico que requiere presentar información estática del museo con navegación entre secciones.  
**Decisión:** Usar PHP puro sin base de datos; el contenido se renderiza directamente en las vistas PHP.  
**Consecuencias:** Simplicidad de despliegue (solo necesita PHP + Apache), pero limitado para contenido dinámico futuro.

### ADR-002: Estilos mediante CDN

**Estado:** Aceptado  
**Contexto:** Los archivos CSS y JS propios están vacíos o faltan.  
**Decisión:** Cargar Bootstrap 5 y Tailwind CSS mediante CDN para estilos y componentes.  
**Consecuencias:** El sitio depende de conexión a internet para cargar los estilos, pero no requiere proceso de compilación de assets.

### ADR-003: Estructura plana de PHP

**Estado:** Aceptado  
**Contexto:** Cada sección del museo tiene su propio archivo PHP (Index.php, Galerias.php, Contacto.php, etc.).  
**Decisión:** Mantener estructura plana sin framework ni router personalizado.  
**Consecuencias:** Fácil de entender y modificar, pero menos escalable para proyectos grandes.

## Tecnologías utilizadas

- PHP 8.2 (backend)
- HTML5, CSS3, JavaScript (frontend)
- Bootstrap 5 (CDN)
- Tailwind CSS (CDN)
- XAMPP (entorno de desarrollo local)
