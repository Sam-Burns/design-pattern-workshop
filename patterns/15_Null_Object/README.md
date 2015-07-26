Null Object Pattern
-------------------

The Null Object Pattern allows classes expecting a 'real' dependency to be given a Null Object that doesn't do anything.
This is useful for disabling undesired behaviour.

In the example provided, the `ClassThatDoesLogging` needs an implementation of the `Logger` interface.  The
implementation provided, `FileLogger`, is exhibiting behaviour that isn't desirable here, and we don't actually need the
logs.

Alter the `NullLogger` class to implement the `Logger` interface, and change the way the object graph is build in the
PHPUnit integration test provided.  The test should then pass.  Notice that we have changed the behaviour of the
application through changing the object graph, but have not needed to alter the `FileLogger` class.
