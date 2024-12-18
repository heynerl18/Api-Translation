# LangSys Back-End Laravel  

## Lógica de Respaldo  
Este proyecto implementa la lógica de respaldo para la gestión de traducciones dinámicas en diferentes idiomas y regiones.  

### Migraciones y Sembradores  
Recibirás archivos de migración y sembradores (seeders) para las tablas:
- **locales**: Un "locale" representa una combinación de idioma y región utilizada para las traducciones. Ejemplo: es-es representa el español hablado en España y es-cr representa el español hablado en Costa Rica.
- **projects**: Tabla que almacena información sobre los proyectos.  
- **tokens**: Tabla que define los tokens que necesitan ser traducidos.  
- **translations**: Tabla que contiene las traducciones en diferentes locales.  

### Flujo de Traducciones  
Cuando se realiza una solicitud de traducción para un locale específico dentro de un proyecto:  
1. **Traducción disponible para el locale solicitado:**  
   - Si la traducción existe, devolverla.  
2. **Traducción no disponible para el locale solicitado:**  
   - Si el locale solicitado no está disponible, devolver la traducción del locale predeterminado (`es-es`).  
3. **Sin traducciones disponibles:**  
   - Si ni el locale solicitado ni el predeterminado existen, devolver una respuesta de error con el mensaje:  
     ```
     Translation not available.
     ```  

## Endpoint de la API  
Implementar un endpoint de API que permita gestionar las traducciones.  

### Parámetros del Endpoint  
El endpoint debe recibir los siguientes parámetros:  
- `project_id`: ID del proyecto.  
- `token_id`: ID del token.  
- `locale`: Código del locale.  

### Comportamiento del Endpoint  
1. **Devolver traducción para el locale solicitado:**  
   - Si la traducción existe para el token y locale especificados dentro del proyecto, devolverla.  
2. **Devolver traducción del locale predeterminado (`es-es`):**  
   - Si la traducción para el locale solicitado no existe, devolver la traducción del locale predeterminado.  
3. **Devolver mensaje de error:**  
   - Si no existe ninguna traducción (ni para el locale solicitado ni para el predeterminado), devolver el mensaje:  
     ```
     Translation not available.
     ```  
