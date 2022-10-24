# Factory desing patter

## How to implement

In AbstractFactory class we have getters for concrete products and core business logic which we need to implement on those products.

In Factory methods we override an empty getter from Abstract with `new` operator of product, those classes have their own constructors with data which need to be inserted for creation of the concrete products.

Concrete products have an interface which has main methods to be implemented as well as this interface is typehinted in Abstract class method where we implement basic logic for all factories.

Concrete products have implemented product interface and have methods from interface.

## Kata for implementation:

Command for fetching data from different sources. User can insert source name and credentials and then command returns data.