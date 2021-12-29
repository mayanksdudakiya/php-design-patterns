# Template Method Design Pattern
- Template method design pattern is used when 2 or more classes shares the same methods except couple of them. 
- Use this method when you are worried about data duplication.

#Explanation
- Here we have created `src/TurkeySub.php` & `src/VeggieSub.php` classes both shares same methods except `addTurkey()` & `addVeggies()` methods respectively.
- So to solve this problem we have created template
- Add all the same methods into the parent abstract class and extend it to the child class
- So we have created `src/Sub.php` as a template parent abstract class and extended it into the `src/TurkeySub.php` & `src/VeggieSub.php`