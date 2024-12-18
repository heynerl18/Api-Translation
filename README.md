# LangSys Back-End Laravel  

## Lógica  
Este proyecto implementa la lógica de respaldo para la gestión de traducciones dinámicas en diferentes idiomas y regiones.  

### Migraciones y Sembradores  
- **locales**: Un "locale" representa una combinación de idioma y región utilizada para las traducciones. Ejemplo: es-es representa el español hablado en España y es-cr representa el español hablado en Costa Rica.
- **projects**: Tabla que almacena información sobre los proyectos.  
- **tokens**: Tabla que define los tokens que necesitan ser traducidos.  
- **translations**: Tabla que contiene las traducciones en diferentes locales.  

### Flujo de Traducciones  
Cuando se realiza una solicitud de traducción para un locale específico dentro de un proyecto:  
1. **Traducción disponible para el locale solicitado:**  
   - Si la traducción existe, se devuelve.  
2. **Traducción no disponible para el locale solicitado:**  
   - Si el locale solicitado no está disponible, se devuelve la traducción del locale predeterminado (`es-es`).  
3. **Sin traducciones disponibles:**  
   - Si ni el locale solicitado ni el predeterminado existen, se devuelve una respuesta de error con el mensaje:  
     ```
     Translation not available.
     ```  


   - Si no existe ninguna traducción (ni para el locale solicitado ni para el predeterminado), devolver el mensaje:  
     ```
     Translation not available.
     ```  
