# 🏥 Sistema de Gestión para Clínica Veterinaria

Panel de administración completo para gestionar pacientes, dueños y tratamientos en una clínica veterinaria, desarrollado con Laravel 12 y FilamentPHP 3.

## ✨ Características

- 📋 **Gestión de Pacientes**: Registro completo de mascotas con información detallada
- 👥 **Gestión de Dueños**: Control de datos de contacto y relación con mascotas
- 💊 **Gestión de Tratamientos**: Historial médico y seguimiento de tratamientos aplicados
- 🔍 **Búsqueda y Filtrado**: Encuentra rápidamente pacientes y dueños
- 📊 **Ordenamiento de Datos**: Organiza la información por diferentes criterios
- 🎨 **Interfaz Moderna**: Panel administrativo intuitivo con FilamentPHP

## 🛠️ Tecnologías

- **Laravel** 12
- **FilamentPHP** 3
- **PHP** 8.2+
- **MySQL** / PostgreSQL
- **Composer**

## 📋 Requisitos Previos

- PHP >= 8.2
- Composer
- MySQL >= 8.0 o PostgreSQL >= 13
- Node.js y NPM (para compilar assets)

## 🚀 Instalación

1. **Clonar el repositorio**
```bash
git clone https://github.com/tu-usuario/veterinary-clinic.git
cd veterinary-clinic
```

2. **Instalar dependencias**
```bash
composer install
npm install
```

3. **Configurar variables de entorno**
```bash
cp .env.example .env
php artisan key:generate
```

4. **Configurar base de datos**

Edita el archivo `.env` con tus credenciales:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=veterinary_clinic
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña
```

5. **Ejecutar migraciones**
```bash
php artisan migrate
```

6. **Crear usuario administrador**
```bash
php artisan make:filament-user
```

7. **Compilar assets**
```bash
npm run dev
```

8. **Iniciar servidor**
```bash
php artisan serve
```

Accede al panel en: `http://localhost:8000/admin`

## 📊 Estructura de la Base de Datos

### Entidades Principales

- **Owners** (Dueños): Información de contacto de los propietarios
- **Patients** (Pacientes): Datos de las mascotas
- **Treatments** (Tratamientos): Historial médico y procedimientos

### Relaciones

- Un `Owner` tiene muchos `Patients` (1:N)
- Un `Patient` pertenece a un `Owner`
- Un `Patient` puede tener muchos `Treatments` (1:N)
- Un `Treatment` pertenece a un `Patient`

## 🎯 Funcionalidades Principales

### Gestión de Pacientes
- Registro de nombre, tipo (gato, perro, conejo), fecha de nacimiento
- Asignación a dueños existentes o creación de nuevos
- Búsqueda por nombre y nombre del dueño
- Ordenamiento por fecha de nacimiento
- Filtrado por tipo de animal

### Gestión de Dueños
- Creación rápida desde el formulario del paciente
- Almacenamiento de nombre, email y teléfono
- Búsqueda integrada con precarga

### Gestión de Tratamientos
- Descripción detallada del tratamiento
- Notas adicionales
- Precio con formato de moneda (EUR)
- Fecha y hora de aplicación
- Gestión directa desde la página del paciente

## 🔒 Seguridad

El proyecto utiliza las siguientes medidas de seguridad:

- Validación de formularios en servidor
- Protección CSRF habilitada
- Autenticación requerida para acceder al panel
- Validación de tipos de datos y longitudes

## 🧪 Buenas Prácticas Implementadas

- Modelos en inglés, singular y PascalCase
- Relaciones Eloquent bien definidas
- Validaciones en formularios
- Uso de migraciones para versionado de BD
- Separación de responsabilidades

## 📝 Próximas Mejoras

- [ ] Widgets de estadísticas
- [ ] Personalización del panel (colores, iconos)
- [ ] Sistema de roles y permisos con Spatie
- [ ] Exportación de reportes
- [ ] Notificaciones por email
- [ ] Recordatorios de citas

## 🤝 Contribuir

Las contribuciones son bienvenidas. Por favor:

1. Fork el proyecto
2. Crea una rama para tu feature (`git checkout -b feature/AmazingFeature`)
3. Commit tus cambios (`git commit -m 'Add some AmazingFeature'`)
4. Push a la rama (`git push origin feature/AmazingFeature`)
5. Abre un Pull Request

## 📄 Licencia

Este proyecto está bajo la Licencia MIT. Ver el archivo `LICENSE` para más detalles.

## 👨‍💻 Autor

OrlandoMp - [@LOMP1991/)

## 🙏 Agradecimientos

- [Laravel](https://laravel.com)
- [FilamentPHP](https://filamentphp.com)
- Comunidad de desarrolladores Laravel

---

⭐ Si este proyecto te fue útil, considera darle una estrella en GitHub
