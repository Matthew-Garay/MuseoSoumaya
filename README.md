# Museo Soumaya Sitio Web

## A. Titulo del Proyecto y Resumen Ejecutivo

Museo Soumaya Sitio Web es un sitio web informativo desarrollado con PHP 8.2 que incluye secciones de galerias, colecciones, exposiciones, quienes somos, contacto y arte para todos. El problema que resuelve es la presentacion de contenido institucional del museo de forma estatica y navegable, sin requerimiento de base de datos. Su alcance tecnologico se limita a un sitio web de contenido estatico ejecutado en un servidor local Apache mediante XAMPP, utilizando PHP puro para la renderizacion de secciones.

## B. Arquitectura del Sistema

El programa sigue una arquitectura Cliente-Servidor sencilla con PHP en el backend y HTML/CSS/JavaScript en el frontend. El flujo de datos comienza con la solicitud del visitante a traves del navegador, que llega al servidor Apache donde PHP procesa las secciones estaticas del sitio y devuelve el HTML renderizado al cliente. No existe base de datos ni capa de persistencia; todo el contenido se define directamente en los archivos PHP de cada seccion. No hay comunicacion entre modulos logicos complejos ni patrones de diseno arquitectonico mas alla de la separacion basica entre presentacion y logica de servidor.

## C. Caracteristicas Tecnicas Clave

- Navegación entre secciones: galerias, colecciones, exposiciones, quienes somos, contacto y arte para todos.
- Backend desarrollado con PHP 8.2 puro.
- Frontend construido con HTML5, CSS3 y JavaScript.
- Estilos mediante Bootstrap 5 y Tailwind CSS a traves de CDN.
- Servidor local Apache ejecutado con XAMPP.
- No utiliza base de datos ni persistencia de datos.
- No emplea mecanismos de concurrencia, procesamiento en tiempo real o protocolos de red propios.
- Seguridad limitada al ambito de ejecucion local del servidor web; no maneja autenticacion ni datos sensibles.

## D. Especificacion del Stack Tecnologico

| Categoria | Tecnologia / Librería |
|-----------|----------------------|
| Backend | PHP 8.2 |
| Frontend | HTML5, CSS3, JavaScript |
| Estilos | Bootstrap 5 (CDN), Tailwind CSS (CDN) |
| Servidor local | Apache (XAMPP) |

## E. Guia de Instalacion, Configuracion y Despliegue

### Requisitos previos del sistema

- XAMPP instalado (incluye Apache y PHP).
- Navegador web moderno.
- Sistema operativo Windows, Linux o macOS.

### Secuencia de comandos para clonacion e instalacion

```bash
git clone https://github.com/Matthew-Garay/MuseoSoumaya.git
```

Copiar el contenido del repositorio al directorio raiz del servidor web (por ejemplo, htdocs de XAMPP).

### Configuracion de variables de entorno

Este proyecto no requiere archivo .env ni variables de entorno.

### Comandos para ejecucion en entorno de Desarrollo

Iniciar Apache y PHP mediante el panel de control de XAMPP y acceder a http://localhost/MuseoSoumaya desde el navegador.

### Comandos para ejecucion en entorno de Produccion

No aplica entorno de produccion separado; el sitio se despliega en un servidor web local con Apache y PHP.

## F. Creditos de Autoría

Desarrollado por: Matthew Ilveneff Garay Pérez
Correo Electronico: 1911.garay.perez@gmail.com
