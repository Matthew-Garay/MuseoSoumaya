# Guía de Instalación Local - Museo Soumaya

Esta guía te ayuda a configurar el sitio web del Museo Soumaya en tu entorno local.

## Requisitos previos

- XAMPP (Apache + PHP 8.2+)
- Navegador web moderno
- Git

## Instalación

1. Clona el repositorio dentro de `htdocs` de XAMPP:
   ```bash
   git clone https://github.com/Matthew-Garay/MuseoSoumaya.git
   cd MuseoSoumaya
   ```
2. Configura las variables de entorno (opcional):
   ```bash
   cp .env.example .env
   # Edita .env con tus valores reales si es necesario
   ```
3. Inicia Apache desde el panel de control de XAMPP.
4. Accede al proyecto: `http://localhost/MuseoSoumaya/Index.php`

## Verificación

Después de completar la instalación, deberías ver la página principal del museo con sus galerías, colecciones y secciones de contacto.

## Solución de problemas

Si encuentras problemas, abre un issue con la etiqueta `bug` y describe los pasos seguidos y el mensaje de error.
