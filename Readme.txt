***BEGIN README***

Welcome to Student Explained!

**NAVIGATION**
Non logged in users will need to register before having access to tutorials
within the website.
Registration is validated using Jquery/ Html.

Once registered and logged in Users will be taken to the main landing page
which includes a google maps api call in the form of a convient iframe!

Users may comment in the chatroom, which requires page reload, and like
and dislike messages.
Users may navigate within the site further utilizing the side navigation presented
to them upon logging in.

Users may update or delete their account from the Account page.
Users may view extremely basic tutorials by navigating the Hardware
or Software navigation from the left side navigation.


**HOSTING**
All hosting is done locally on my desk at home! I wanted the challenge
and knowledge of how to self host sites utilizing Port Forwarding.
I am hosting this site on a Raspberry Pi Model 3B+ in theme with the website.

**Server Response issues**
Because its a microcomputer its response time is slower than cloud hosting.
However, Once you have visited the site pages more than once your browser cache
should make the loading times reasonable. I tested this and mobile formatting
from a Android device and I-phone and verified improved response times and
"almost" ideal formatting.

**ACCESS OF DATABASE**
Because I am hosting this myself you "should" not be able to immediately ACCESS
phpmyadmin/ my database for examination. However, here are the "credentials".

Server: localhost (Hosted locally!!!)
username: testuser
password: mypassword
Database name: student_main

I configured my apache 2 server to have an index.php file ABOVE
student_explained directory folder so that when the Port 80 request is sent
to my device it will navigate down into the folder. This should "probably"
prevent access to anywhere else within the apache server. For additional
personal security I am running a script to watch for any changes outside of the
student_main folder.

**DATABASE PICS IMPORTANT**
I have included screenshots of the structure of Mysql database under
img/databasePics so that you can view screenshots of what the database looks
like. I guess I could have exported it but this seemed more convienent.
Cheers!
