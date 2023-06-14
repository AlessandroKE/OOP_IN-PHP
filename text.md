# Object-Oriented Programming (OOP) is a programming paradigm that focuses on organizing code into reusable and modular objects. In PHP, OOP allows you to create classes, which are blueprint templates for creating objects

key concepts and features of OOP in PHP:
    Classes: A class is a user-defined data type that encapsulates data (properties) and behavior (methods) into a single unit. It serves as a blueprint for creating objects. For example, you can define a "Car" class with properties like "color" and "brand" and methods like "startEngine()" and "drive()".

    Objects: An object is an instance of a class. It represents a specific entity based on the class's blueprint. You can create multiple objects from a single class, each with its own set of data and behavior.

    Encapsulation: Encapsulation is the principle of bundling data and methods together within a class, hiding the internal details and exposing only the necessary interfaces. This helps in achieving data protection and code reusability.

    Inheritance: Inheritance allows you to create a new class (child class) based on an existing class (parent class). The child class inherits properties and methods from the parent class, and it can also have its own additional properties and methods. Inheritance facilitates code reuse and promotes the hierarchical organization of classes.

    Polymorphism: Polymorphism allows objects of different classes to be treated as objects of a common parent class. It enables you to use a single interface to represent multiple types of objects. Polymorphism is often achieved through method overriding and method overloading.

    Abstraction: Abstraction focuses on creating abstract classes and interfaces that define a common set of methods without specifying their implementation details. Abstract classes cannot be instantiated, but they can be used as base classes for concrete classes. Interfaces, on the other hand, define method signatures that must be implemented by classes that implement the interface.

    Modifiers: PHP provides access modifiers to control the visibility and accessibility of properties and methods. The three main modifiers are:
        Public: The property or method can be accessed from anywhere.
        Private: The property or method can only be accessed from within the class that defines it.
        Protected: The property or method can be accessed from within the class and its subclasses.

 These are some fundamental concepts of OOP in PHP. Using OOP principles can help you write more organized, maintainable, and reusable code by promoting modularization and encapsulation.

 Constructors in OOP
 Constructors in object-oriented programming (OOP) in PHP are special methods that are automatically called when an object is created from a class. Constructors are used to initialize the object's properties or perform any necessary setup operations.
