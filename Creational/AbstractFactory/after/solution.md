# 📌 How Abstract Factory Fixes This

- Defines an **abstract factory interface (`GUIFactory`)** with methods for creating families of products:  
  - `createButton()`  
  - `createCheckbox()`  

- Each **concrete factory** (`WinFactory`, `MacFactory`) implements the interface and guarantees consistent families of objects.  
  - `WinFactory` → `WinButton` + `WinCheckbox`  
  - `MacFactory` → `MacButton` + `MacCheckbox`  

- The **client (`Application`) depends only on the abstract factory**, not on concrete classes.  
  It just asks the factory to create the right objects.  

---

# ✅ Key Idea
The **Abstract Factory Pattern** ensures that the application creates **families of related objects** without depending on their concrete classes.  

This gives us:
- **Loose coupling** → Client depends only on abstractions.  
- **Consistency** → Always matched UI elements from the same family.  
- **Extensibility** → Add a new OS family (e.g., Linux) by creating a new factory, without changing the client.  

---

# ✨ Example Flow

1. Client asks `ApplicationConfigurator` to configure for "Windows".  
   → It creates a `WinFactory`.  
   → Factory produces `WinButton` + `WinCheckbox`.  

2. If client configures "Mac":  
   → It uses `MacFactory`.  
   → Factory produces `MacButton` + `MacCheckbox`.  

3. Adding Linux later:  
   → Just implement `LinuxFactory`, `LinuxButton`, and `LinuxCheckbox`.  
   → No changes needed in `Application`.  