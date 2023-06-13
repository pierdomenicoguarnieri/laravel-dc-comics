# **Laravel Dc Comics**

## **Consegna:**

Oggi creiamo un nuovo progetto Laravel 9 per gestire un archivio di fumetti.

### **Milestone 1**

Tramite gli appositi comandi artisan create un model con relativa migration e un resource controller.

### **Milestone 2**

### **Giorno 1:**

Iniziamo a definire le prime operazioni CRUD con le relative view:

- index()

- show()

#### **BONUS** 

Creare il seeder per la tabella comics utilizzando il file in allegato.

### **Giorno 2:**

Comics.store e comics.update  devono validare i dati. Se non sono validi reindirizza comics.create passando in sessione gli errori e in old() tutti i campi compilati

Per la validazione la soluzione migliore è creare una request custom:

- php artisan make:request ComicRequest

- settare authorize -> true

- mettere i rules

- aggiungere la funzione messages con i messaggi errore
