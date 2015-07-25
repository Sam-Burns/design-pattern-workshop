Memento Pattern
---------------

The Memento Pattern is a way of getting an object to save its state to another object, and reload from it again later.
You might do this if you want your code to be able to revert an object's state to a previous one on error conditions.
Other possible uses include where the state of the object is derived from lengthy database queries, and it is desirable
to save state to a Memento to be persisted or cached.

Implement the `Counter` class so that the Memento Pattern passes the PHPUnit integration tests provided.  Note the role
of the `Caretaker` object in managing the `Counter`: it requests a memento, holds on to it, and uses it to revert the
object to a previous state when an error occurs.
