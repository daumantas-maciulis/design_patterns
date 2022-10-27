#Abstract Factory design pattern

## How to implement:
1. Create abstract product interfaces. 
2. Create factory interface which describes which methods concrete factory have to implement. Return types of those methods have to be interfaces of products.
3. Create concrete factories. Those factories have to implement abstract factory interface.
4. Create concrete products, those products have to implement abstract product interface and have to be built by concrete factory with new operator.

## Kata for implementation
Create abstract factory for creating cities. Those cities have to have population, size and density.

## Idea for next:
Improve factories to fetch data from API's