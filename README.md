# Enviador de Correo

## Descripción
El proyecto "Enviador de Correo" permite a los usuarios enviar correos electrónicos rellenando un formulario web. Este formulario incluye campos para el nombre del remitente, el asunto del correo, el mensaje y la opción de adjuntar un archivo. Es una herramienta útil para enviar información de manera rápida y eficiente sin necesidad de utilizar un cliente de correo electrónico directamente.

## Tecnología
Este proyecto ha sido desarrollado utilizando PHP y hace uso de la biblioteca PHPMailer para gestionar el envío de correos electrónicos. PHPMailer es una biblioteca de código abierto que facilita el envío de correos electrónicos desde PHP, soportando varias opciones como adjuntos, HTML en los cuerpos de los mensajes y más.

## Características
- **Formulario Web**: Interfaz sencilla para rellenar los datos del correo electrónico.
- **Adjuntar Archivos**: Opción para adjuntar archivos al correo electrónico.
- **Validación**: Validación de los campos del formulario para asegurar que la información necesaria esté presente antes de enviar.
- **Soporte de HTML**: Posibilidad de enviar correos electrónicos en formato HTML.
- **Seguridad**: Implementación de medidas de seguridad para prevenir el envío de correo no deseado (spam).

## Requisitos
Para ejecutar este proyecto necesitas:
- Servidor web con soporte PHP (versión 7.0 o superior recomendada).
- Acceso a un servidor de correo SMTP para el envío de los correos electrónicos.

## Instalación
1. Clona el repositorio en tu servidor web:

git clone https://ejemplo.com/enviador-de-correo.git

2. Configura el archivo `config.php` con los detalles de tu servidor SMTP y tus credenciales.
3. Asegúrate de que la carpeta para los adjuntos (si es utilizada) tenga permisos de escritura.

## Uso
Para usar el "Enviador de Correo", simplemente navega a la URL donde lo hayas alojado, rellena el formulario con los detalles del correo electrónico y haz clic en enviar. Si has optado por adjuntar un archivo, asegúrate de seleccionarlo antes de enviar el correo.

## Contribuir
Las contribuciones son bienvenidas. Si deseas contribuir, por favor, haz un fork del repositorio, realiza tus cambios y envía una pull request para su revisión.

## Licencia
Este proyecto está licenciado bajo la Licencia MIT. Consulta el archivo `LICENSE` para más detalles.
