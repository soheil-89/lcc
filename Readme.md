# Lando Test Challenge

This project leverages four design patterns—Repository, Strategy, Factory, and Laravel's Facade—for the design of a dynamic filter system. It fully adheres to SOLID principles and is versatile enough to be employed with other models. A suite of various tests has also been implemented to ensure robust functionality.

## Design Patterns Utilized
- **Repository Pattern:** Organizes data access logic, ensuring a clean separation between data access code and business logic.

- **Strategy Pattern:** Defines a family of algorithms, encapsulating each one, and makes them interchangeable. It allows clients to choose the appropriate algorithm at runtime.

- **Factory Pattern:** Creates filter instances dynamically based on the specified filter name, promoting flexibility and extensibility in adding new filters.

- **Facade Pattern (in Laravel):** Provides a simple and unified interface to interact with complex subsystems, such as the Filter Manager.

## Dynamic and Reusable
The filter system is designed to be fully dynamic, allowing seamless integration with various models. It adheres to Laravel conventions, making it suitable for a wide range of use cases.

## Solid Principles
This project follows all SOLID principles, ensuring a robust and maintainable codebase.

## Testing
The project includes a suite of various test cases, covering different scenarios to guarantee the functionality and correctness of the implemented filter system.

Feel free to explore the codebase and adapt it to your specific needs. If you have any questions or need further assistance, please don't hesitate to reach out.
