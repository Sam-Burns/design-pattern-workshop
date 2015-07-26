Adapter Pattern
---------------

The Adapter Pattern is a common pattern in which a subject is exposed through a wrapping class.

In the example provided, our application requires an implementation of the `Product` interface.
`ThirdPartyLibraryProduct` is the chosen library class to provide the functionality, but it doesn't adhere to the
required interface.  `ProductAdapter` will expose only the necessary parts of the third-party class, and will implement
the interface.

Implement the methods in the `ProductAdapter` class.  Bare in mind that there may be methods in
`ThirdPartyLibraryProduct` which are irrelevant, and functionality that should not be exposed by the Adapter.  There
may also be methods in the third-party class which have inappropriate or unhelpful names.

The PHPUnit integration test provided should pass if your adapter is implemented correctly.
