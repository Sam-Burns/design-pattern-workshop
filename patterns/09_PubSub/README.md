Publisher/Subscriber Pattern
----------------------------

The Publisher/Subscriber Pattern, or Pub/Sub Pattern, allows for fire-and-forget messaging throughout your system.

Publishers can send messages to the Event Bus, but are blind to the recipients.

Subscribers can receive messages from the Event Bus, but are blind to the source.

Messages have topics; these are used by the Event Bus to identify which subscribers to pass a message on to.

The example provided has one Publisher and two Subscribers.  Wire the object graph together correctly by implementing
Publisher and Subscriber registration in the PHPUnit integration test provided.  When this has been done correctly, the
Publisher will dump messages on the Event Bus, and they will be received by the appropriate Subscribers.
