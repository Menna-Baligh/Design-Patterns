# 🟥 What’s the Problem Here?

### 1. **Coupling (Tight Dependency)**
The `Juicer` class is tightly coupled to all juice types (`OrangeJuice`, `MangoJuice`, `GuavaJuice`).  
If we add a new juice (e.g., `PineappleJuice`), we must modify the `Juicer` class directly.  

---

### 2. **Repetitive Code (if/else or switch hell)**
Every time we want to handle a new juice type, we need to add another `if/else` or `switch` statement, making the code harder to maintain.  

---

### 3. **Difficult to Extend (Open/Closed Principle Broken)**
The base class (`Juicer`) needs to be changed whenever we add a new juice type.  
This violates the **Open/Closed Principle (OCP)**, which states that a class should be *open for extension but closed for modification*.  

---

# 📌 How Factory Method Solves This

- The base class (`Juicer`) doesn’t know anything about the specific juice types.  
- Each juice type is handled by its own subclass (e.g., `OrangeJuicer`, `MangoJuicer`).  
- To add a new juice, we just **create a new subclass** — no need to touch the existing code.  

---

✅ This makes the system **more flexible, extensible, and easier to maintain**.  
