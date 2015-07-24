Dependency Injection Pattern
----------------------------

Dependency Injection, with or without a container, produces nicely decoupled and testable code.

The example provided shows constructor injection and setter injection, as well as more old-fashioned approaches to
dependency management.  Try getting the four objects under test by modifying the unit tests provided.  The chances are,
you will succeed in using/testing two of the classes provided, but not the other two.  Which approach(es) to dependency
management produced the production code that is easiest to work with?

Dependency Injection also allows for the use of a DI container - invaluable for larger projects.
