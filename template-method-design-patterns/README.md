# Template Method Design Pattern
- Template method design pattern is used when 2 or more classes shares the same methods except couple of them. 
- Use this method when you are worried about data duplication.

#Explanation
- Here we have created `src/TurkeySub.php` & `src/VeggieSub.php` classes both shares same methods except `addTurkey()` & `addVeggies()` methods respectively.
- So to solve this problem we have created template
- Add all the same methods into the parent abstract class and extend it to the child class
- So we have created `src/Sub.php` as a template parent abstract class and extended it into the `src/TurkeySub.php` & `src/VeggieSub.php`
- There were still identical method named `make()` in both classes `src/TurkeySub.php` & `src/VeggieSub.php`. But we have 2 different methods in `make()` method which are `addTurkey()` & `addVeggies()`. To solve this we can give it generalize name like `addPrimaryToppings()` instead of `addTurkey()` & `addVeggies()` and then we move make() method to our abstract class Sub.
- That's it. 