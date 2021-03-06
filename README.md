TheFacebook
==============


Description:
--------------------

This vulnerable application is a cheap imitation of Facebook written in PHP.  The idea, design and primary coding was done by Adam Weis & Pierre-Henry Soria (with revisions and corrections from Prof. H so it could be used as an exercise).  The code is not fully mature and there is a fair amount of functionality that doesn't work or is under construction, but it will serve our purposes to illustrate the two primary attacks we want to focus on: SQL injection and XSS attacks. (There are many vulnerabilities as the project currently stands, but in the interest of time we will limit our efforts to these two.)

NOTE: THIS PROJECT IS TO BE DONE BY STUDENTS INDIVIDUALLY.
DO NOT COLLABORATE WITH OTHER STUDENTS ON THIS ASSIGNMENT.
==========================================================


Part 1: SQL Injection
--------------------

I want you to use SQL injection in two different ways.  First, you need to attack the login functionality and discover the password for the profh@cmu.edu account; this will be similar to what you did in lab 3.  Second, you need to exploit the URL bar as we did in class to recover information selected from thefacebook database.  In this case, I do not want you to use an automated tool like sqlmap -- you will be required to paste into the online form the exploit you used to acquire this information and an automated tool command won't be accepted.

Because you would have complete access to the database if it were all run on localhost, I've created an online version for the SQL injections at http://pawn.hss.cmu.edu/~67327/thefacebook/.  The online accounts all have different passwords (they are not 'secret' and not easily broken via brute force).  Open up the online google form to record your results at http://bit.ly/67327-Project-2.  Answer the six questions on SQL injection in the form.  Note that for SQL injection we want you to study the code to figure out a way to secure it and then explain that, but we are not requiring you to write that PHP out. (If you want to, that is totally fine.)


Part 2: XSS Attacks
--------------------

In this section, I want you to first identify XSS vulnerabilities with thefacebook application.  To be honest, this app is so vulnerable that I expect you to come up with at least three distinct attacks.  Record that in the online form and answer both XSS questions.  After that, write the PHP code needed to correct these problems, zip up your code and submit it to the course site.  Be sure to name it <YOUR ANDREW ID GOES HERE>_p2.zip -- we had some people not follow instructions last time and if I have to go into the logs again to figure out who you are then it will cost you 15 points right off the top.  (I did identify the guilty parties last time so they only lost 15 points rather than get zeroes for a missing project.  Still, a 15 point penalty does hurt the grade quite a bit.)

THE ONLINE SITE DOES HAVE SOME XSS SAFEGUARDS IN PLACE AND AN AUDITING SYSTEM TO TRACK ACTIVITY.  STILL, DO NOT EXECUTE ANY XSS ATTACKS TO THE ONLINE SITE.  IF YOU DO, YOU WILL GET A ZERO FOR THE XSS ATTACK SECTION.  RUN ALL XSS ATTACKS AGAINST YOUR LOCAL COPY OF THE APPLICATION ONLY.
