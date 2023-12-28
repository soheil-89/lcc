# Lendo Test Challenge

This project utilizes four design patterns—Repository, Strategy, Factory, and Laravel's Facade—for designing a dynamic filter system. It is designed to be flexible and can be easily extended for use with other models. The implementation is tested with various test cases.

## Design Patterns Used
- **Repository Pattern:** Used for organizing data access logic and providing a clean separation between the data access code and the business logic.

- **Strategy Pattern:** Implemented for defining a family of algorithms, encapsulating each one, and making them interchangeable. It allows the client to choose the appropriate algorithm at runtime.

- **Factory Pattern:** Utilized for creating filter instances dynamically based on the specified filter name. This promotes flexibility and extensibility in adding new filters.

- **Facade Pattern (in Laravel):** Used to provide a simple and unified interface to interact with the complex subsystems, such as the Filter Manager.

## Dynamic and Reusable
The filter system is designed to be dynamic, allowing easy integration with different models. The implementation follows Laravel conventions, making it suitable for a wide range of use cases.

## Testing
The project includes various test cases to ensure the functionality and correctness of the implemented filter system. These tests cover different scenarios to guarantee robustness.

Feel free to explore the codebase and adapt it to your specific needs. If you have any questions or need further assistance, please don't hesitate to reach out.
