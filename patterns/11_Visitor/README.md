Visitor Pattern
---------------

The Visitor Pattern allows for a set of visitors to alter the state of an object or object graph one at a time.  This
allows for decoupling of the various operations that need to be performed on the state of an object.

In this example, the subject is `ListOfNumbers`.  There are two visitors, `PrimeNumberDeleter` and
`SquareNumberDeleter`.  In the integration test provided, they both 'visit' the list in turn, deleting numbers as
appropriate.  Afterwards, the list is inspected to ensure that only the correct numbers remain.

Implement the `visit()` methods of the two visitor classes, and ensure the integration test provided starts passing.
