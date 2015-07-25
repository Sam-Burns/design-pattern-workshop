Decorator Pattern
-----------------

The Decorator Pattern is an excellent implementation of the Open Closed Principle and the Single Responsibility
Principle.  It allows the extension of functionality without the use of inheritance, or having to make extensive
changes to existing code.

A decorator implements the same interface as the class it is decorating.  It has the decorated class as one of its own
properties.  It has a public method, accessible to client code, and behaviour in which it calls the same method on its
property, adding its own functionality as well.

The desired behaviour in this example is that a 'DataGetter' implementation can tell you the name of a design pattern.
A cache decorator, also implementing the same interface, has been written.  The cache decorator should be used if the
data is available; if not, it will come from a JSON file on disk.

Use a Builder Pattern to assemble the object graph in the correct way.  You can do this by editing one function in the
DataGetterBuilder class.  Once you have wired up the object graph correctly, the PHPUnit integration test provided
should pass.

You will also need to build a different object graph, with the service implementing the same interface, but with caching
disabled.  Notice that you are changing the behaviour of the service through dependency configuration alone, with no
code changes to anything other than the builder.
