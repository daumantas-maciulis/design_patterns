# Strategy design pattern

## How to implement:
1. Declare the strategy interface for all strategy classes
2. Create context class, in that class create property in which we will store current strategy. That field can be initialized with constructor as we with setter method to change strategies at runtime. Context will execute method in strategy and do some business logic.
3. Create concrete strategies implementing strategy interface
4. In the client code pass needed strategy to context class

## Kata for implementation
