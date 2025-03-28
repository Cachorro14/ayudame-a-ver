<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

![Image](https://github.com/user-attachments/assets/91478e3b-1729-4869-acf6-4d34aecd7d80)

## Proyecto de Edición de Imágenes y Traducción a Braille con IA

Este proyecto permite la edición de imágenes utilizando inteligencia artificial, transformando el texto contenido en las imágenes a texto plano utilizando **Tesseract** y luego traduciéndolo a **Braille** mediante un traductor implementado en un trait. Es ideal para proporcionar accesibilidad a personas con discapacidades visuales.

### Características

- **Reconocimiento de texto en imágenes**: Usando **Tesseract**, el sistema extrae el texto de imágenes.
- **Traducción a Braille**: El texto extraído se traduce a Braille usando un trait específico implementado en el proyecto.
- **Interfaz fácil de usar**: Puedes cargar imágenes, procesarlas y obtener el texto en formato Braille.

## Requisitos

Para ejecutar este proyecto, necesitas tener instalados los siguientes componentes:

- **PHP >= 7.4**
- **Laravel 8.x o superior**
- **Tesseract OCR**: Para realizar el reconocimiento de texto en las imágenes.
- **Composer**: Para manejar las dependencias de PHP.

## Instalación

1. Clona el repositorio:
    ```bash
    git clone https://github.com/tuusuario/imagen-a-braille.git
    ```

2. Instala las dependencias del proyecto:
    ```bash
    cd imagen-a-braille
    composer install
    ```

3. Configura tu archivo `.env` para la base de datos y otros parámetros necesarios. Puedes copiar el archivo de ejemplo:
    ```bash
    cp .env.example .env
    ```

4. Genera la clave de la aplicación:
    ```bash
    php artisan key:generate
    ```

5. Instala **Tesseract OCR**:
    - Si estás en Linux, puedes instalarlo con:
      ```bash
      sudo apt-get install tesseract-ocr
      ```
    - Si estás en macOS, usa Homebrew:
      ```bash
      brew install tesseract
      ```

6. Ejecuta las migraciones de la base de datos (si es necesario):
    ```bash
    php artisan migrate
    ```

7. Inicia el servidor local:
    ```bash
    php artisan serve
    ```

Ahora puedes acceder a la aplicación en `http://localhost:8000`.

## Uso

1. **Subir una imagen**: En la interfaz de la aplicación, carga la imagen que deseas procesar.
2. **Proceso de OCR**: El sistema utilizará **Tesseract** para extraer el texto de la imagen.
3. **Traducción a Braille**: Después de extraer el texto, se traducirá automáticamente a Braille, mostrando el resultado en pantalla.

## Implementación del Traductor de Braille

El traductor de Braille está implementado como un trait en el proyecto, lo que permite usarlo fácilmente en cualquier clase. Puedes encontrar la implementación del trait en `app/Traits/BrailleTranslator.php`. Este trait proporciona un método para convertir texto normal en Braille.

## Contribución

¡Gracias por considerar contribuir a este proyecto! Si deseas contribuir, sigue estos pasos:

1. Haz un fork del proyecto.
2. Crea una rama para tu característica (`git checkout -b feature/nueva-caracteristica`).
3. Realiza los cambios y haz commit (`git commit -am 'Agregada nueva característica'`).
4. Haz push a la rama (`git push origin feature/nueva-caracteristica`).
5. Crea un pull request en GitHub.

## Licencia

Este proyecto está bajo la licencia [MIT](https://opensource.org/licenses/MIT).

## Autor

- **Carlos Dueñas** - [Cachorro14](https://github.com/cachorro14)

