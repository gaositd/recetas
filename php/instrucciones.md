#### Objetivo del Proyecto:
- Desarrollar un sistema de pedidos de comida basado en microservicios para una jornada de donación de platos gratis en un restaurante.

#### Funcionalidades Requeridas:
1. *Pedido de Platos*:
   - El gerente del restaurante puede solicitar a la cocina la preparación de un plato.
   - La cocina selecciona aleatoriamente un plato de una lista de recetas disponibles.

2. *Gestión de Ingredientes*:
   - Verificar disponibilidad de ingredientes en la bodega de alimentos.
   - Comprar ingredientes faltantes en la plaza de mercado si no están disponibles en la bodega.
   - Actualizar cantidades de ingredientes al preparar un plato.

3. *Interfaz de Usuario*:
   - Botón para pedir platos.
   - Visualización de órdenes en preparación, ingredientes disponibles en la bodega y historial de compras en la plaza.
   - Historial de pedidos realizados y recetas con ingredientes en pantalla.

4. *Arquitectura y Tecnologías*:
   - Desarrollo en Laravel.
   - Implementación de microservicios que corren con Docker.

#### Estructura del Proyecto (Paso 3):
- Crear directorios para microservicios, base de datos y frontend.
- Incluir una carpeta para la base de datos para gestionar scripts y datos relacionados.

#### Dockerfiles (Paso 4):
- Crear un Dockerfile para cada microservicio y el frontend.
- Configurar las instrucciones necesarias para establecer el entorno de desarrollo de cada servicio.

#### Consideraciones Finales:
- Desplegar la prueba en un servidor gratuito y proporcionar una URL accesible.
- Alojar el código en un repositorio privado en GitHub.
- Mantener la calidad del código, funcionalidad sin errores y centrarse en la experiencia del usuario.
- Seguir las pautas de facilidad, practicidad y creatividad en el desarrollo.

### Funcionamiento del Sistema:
1. El gerente solicita un plato, la cocina elige una receta y pide ingredientes a la bodega.
2. La bodega verifica disponibilidad y compra en la plaza si es necesario.
3. Una vez con los ingredientes, la cocina prepara el plato y lo entrega.
4. La interfaz muestra información relevante para usuarios y gestiona pedidos e ingredientes.

### Garantías de Trabajo Adecuado:
- Implementación de todas las funcionalidades requeridas.
- Correcta estructuración del proyecto y Dockerfiles.
- Despliegue en un servidor con URL accesible.
- Código alojado en repositorio privado en GitHub.
- Cumplimiento de estándares de calidad y experiencia de usuario.

