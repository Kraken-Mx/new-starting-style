# new-starting-style
Using new @starting-style CSS

### Screenshot 
![BLUE](assets/img/BLUE.jpeg)

## Principales directorios

### Codigo fuente(contoladores,modelos y acceso de base de datos)

### src/Connection (Opción recomendable para conectar a base de datos)
### src/Controllers
### src/Controllers
### src/DTOS
### src/Models
### src/Repositories
### src/Services

## Configuración Base de Datos
Crear una copia del archivo .env.example llamarlo .env y configurar los accesos a su base de datos local.

``DB_CONNECTION=SQLServer``

``DB_HOST=``

``DB_PORT=``

``DB_DATABASE=``

``DB_USERNAME=``

``DB_PASSWORD=``

## Configuración de Envío de emails.

``MAIL_MAILER=``

``MAIL_HOST=``

``MAIL_PORT=``

``MAIL_USERNAME=``

``MAIL_PASSWORD=``

``MAIL_ENCRYPTION=null``

``MAIL_FROM_ADDRESS=null``

``MAIL_SMTP_DEBUG=SMTP::DEBUG_SERVER``

``MAIL_SMTP_SECURE=PHPMailer::ENCRYPTION_SMTPS``

``MAIL_SMTP_AUTH=true``

``MAIL_FROM_NAME="Tickets"``

---
## Manejo de Sessiones

Descripción: Uso de sessiones de manera global durante todo el proyecto en donde se necesite verificar session activa de usuarios; implementa tiempo de session de 60 minutos transcurrido ese lapso de tiempo caduca la sessión y es necesario nuevamente ingresar. Tiene la capacidad de guardar sessiones de cualquier tipo incluyedo al usuario autenticado.

---
## Partials:

**Finalidad**: Si alguna de estas secciones cambia no afecte en ninguna pantalla(vista y/o página).

Ruta: partials/header-menu.php

### Implementación Header:

``<?php include 'partials/header-menu.php' ?>``

### Implementación Footer:

``<?php include 'partials/footer-fixed.php' ?>``

#
#
# Frontend Mentor - Mortgage repayment calculator solution

This is a ...

## Table of contents

- [Frontend Mentor - Mortgage repayment calculator solution](#frontend-mentor---mortgage-repayment-calculator-solution)
  - [Table of contents](#table-of-contents)
  - [Overview](#overview)
    - [The challenge](#the-challenge)
    - [Screenshot 🔳](#screenshot-)
    - [Links 🔗](#links-)
  - [My process 🛠](#my-process-)
    - [Built with](#built-with)
  - [Author 🤵](#author-)
  - [Reminder 📝](#reminder-)

## Overview

### The challenge

Users should be able to:

- Input mortgage information and see monthly repayment and total repayment amounts after submitting the form
- See form validation messages if any field is incomplete
- Complete the form only using their keyboard
- View the optimal layout for the interface depending on their device's screen size
- See hover and focus states for all interactive elements on the page

## My process 🛠

- hi
- hi
- hi
- hi

## Author 🤵

- hi
- hi
- hi
- hi
