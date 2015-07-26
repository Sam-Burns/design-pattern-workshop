Prototype Pattern
-----------------

The Prototype Pattern involves an object being given a single copy of a dependency, and cloning it as needed.  This is
particularly useful when the dependency is particularly slow to instantiate.

In the example provided, the `Thing` class takes 1/10th of a second to instantiate.  1,000 Things are needed by
`ThingUser`.  The PHPUnit integration test provided checks that `ThingUser` works, but also tests that the creation and
use of 1,000 Things took less than a second.

Implement the `getOneThousandThings()` method in the `ThingUser` class in a way that involves cloning the Prototype.
The test should then pass.
