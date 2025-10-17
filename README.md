# 💈 AppSalon

Aplicación web moderna para la **gestión completa de un salón de belleza**.  
Desarrollada con **PHP, MySQL, JavaScript y SASS**, implementa el patrón **MVC** para mantener una estructura clara, escalable y fácil de mantener.  

El proyecto integra herramientas como **Node.js**, **Composer** y **NPM** para optimizar el flujo de desarrollo y la organización del código.

---

## 🚀 Funcionalidades Principales

- 🔐 Registro e inicio de sesión de usuarios  
- 🧭 Panel de administración para gestión de servicios y horarios  
- 📅 Reserva de turnos online  
- ✅ Validaciones en frontend y backend  
- 🔔 Sistema de notificaciones y confirmaciones  
- 📱 Interfaz responsive adaptable a distintos dispositivos  

---

## 🧩 Stack de Tecnologías

| Tecnología | Descripción |
|-------------|-------------|
| **PHP** | Lógica del servidor y estructura del patrón MVC |
| **MySQL** | Base de datos relacional para usuarios, servicios y citas |
| **JavaScript** | Interactividad dinámica en el frontend |
| **SASS** | Preprocesador CSS para estilos modulares y reutilizables |
| **Node.js** | Compilación de recursos front-end y automatización de tareas |
| **Composer** | Gestión de dependencias de PHP |
| **NPM** | Gestión de paquetes y herramientas de desarrollo front-end |

---

## ⚙️ Arquitectura

El proyecto sigue el patrón **Modelo–Vista–Controlador (MVC)**, lo que permite una separación clara entre capas:

- **Modelo:** Lógica de datos y conexión con la base de datos.  
- **Vista:** Interfaz de usuario (HTML, SASS y JavaScript).  
- **Controlador:** Comunicación entre el modelo y la vista.  

Esta arquitectura mejora la escalabilidad, el mantenimiento y la reutilización del código.

---

## 🛠️ Instalación Rápida

### 🔧 Requisitos Previos

- PHP 8+  
- MySQL  
- Composer  
- Node.js y NPM  

---

### 📥 Pasos

```bash
# Clonar el repositorio
git clone https://github.com/tu-usuario/AppSalonPHP.git
cd AppSalonPHP

# Instalar dependencias de PHP y Node.js
composer install
npm install
npm run dev
```

### ⚙️ Base de Datos

1. Crear una base de datos llamada **appsalonBD.sql**.  
2. Importar el archivo `database.sql` incluido en el proyecto.  
3. Configurar las credenciales en el archivo de conexión (`includes/database.php` o `.env`).

---

### 🌐 Ejecutar el Proyecto

Podés usar cualquier servidor web compatible con PHP o el servidor interno para desarrollo:

```bash
php -S localhost:8000 -t public
```

Luego accedé a:  
👉 [http://localhost:8000](http://localhost:8000)

---

## 🧑‍💻 Autor

**Facundo Ledesma**  
📍 Proyecto desarrollado con fines educativos y de práctica profesional.  

---