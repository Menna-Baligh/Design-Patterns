## ✨ Explanation of the Factory Method (Juicer & Juice Example)

- **`Juice` (Interface)** 👉 This is the contract that all juices must follow (they all must have a `drink()` method).  

- **`OrangeJuice`, `MangoJuice`, `GuavaJuice` (Concrete Products)** 👉 Each class implements the `Juice` interface and prints a different message when `drink()` is called.  

- **`Juicer` (Creator / Abstract Class)** 👉 This is the general juicer that defines the **Factory Method** `makeJuice()`.  
  It doesn’t know which exact juice will be created.  

- **`OrangeJuicer`, `MangoJuicer`, `GuavaJuicer` (Concrete Creators)** 👉 These classes override the factory method to return the correct juice type.  
  - `OrangeJuicer` → creates `OrangeJuice`  
  - `MangoJuicer` → creates `MangoJuice`  
  - `GuavaJuicer` → creates `GuavaJuice`  

- **`clientCode()` (Client)** 👉 The client code works only with the abstract type `Juicer`.  
  It doesn’t care about which juice comes out, it just asks the juicer to serve juice.  

### ✅ Key Idea
The **Factory Method Pattern** lets you add new juice types without changing the existing juicer code.  
Instead, you just create a new subclass (e.g., `PineappleJuicer`) that knows how to produce `PineappleJuice`.
