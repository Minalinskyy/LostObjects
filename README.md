# LostObjects
This is a web development project by ESIGELEC about a system of lost objects.

In the system, there are three types of users: students, administrators and developers(managers).

The role of users:

Students: who must need to sign up for the first use, and can declare a lost object and can only see the found objects by administrator.

The objects declared by other students can't be seen in order to avoid the mis-collection.

Administrator: who can add the found objects into system and can change state of them when an object is given back to the owners(students).

Developer: who can see the statistic of the whole system and can abandon a declaration by student if it's overtimed.


In the exemple, I have already created 4 users (2 students, 1 administrator and 1 developer). Here is their username and password( the passwords are all same as the username): student, student2, administrator and developer.

The way of installation:

Just put this folder into the root folder of a server with PHP and SQL.(like /www for the Wampserver)
Don't forget to change the parameters in /includes/param.inc.php into your database setting.

And open your sql manage page, import the sql file, the database and pre-inserted data will be done automatically.

That's all. Just have a try if this is interesting for you.

PS： Here is a link which you can try the system:  http://lostobjects.minalinsky.info/  The username and password are same as exemple.
