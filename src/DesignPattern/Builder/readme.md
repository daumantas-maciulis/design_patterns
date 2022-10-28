# Builder
Is a creational design pattern that lets you construct compelex objects step by step. The pattern allows you to produce different types and representations of an object using the same construction code. 


## Implementation:

1. Create a `BuilderInterface` in which describe concrete methods each builder have to have. This interface will not have method for fetching built object because of concrete builders can return different type of products which does not follow same interface.
2. Create concrete builders, they need to implement `BuilderInterface` and have methods for concrete product building.
3. If there is some common routines, you can implement `Director` class which will have concrete routines for building products.

## Kata for implementation:

Build objects of workout programs one is to gain mass and one is for weight loose.