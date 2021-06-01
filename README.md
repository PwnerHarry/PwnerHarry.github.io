# Setting up the development enrionment of this website on Windows:

1. Download WampServer from https://sourceforge.net/projects/wampserver/

2. Create folder link with PowerShell by: mklink /J LINK TARGET -> mklink /J "C:\wamp64\www\homepage" "C:\Git\PwnerHarry.github.io\SOURCE\WordPress"

3. Run WampServer

4. Go to http://localhost/phpmyadmin/ and login with username: root and no password. Choose MySQL

5. Create a new database named homepage with utf8-unicode-ci and import homepage.sql from the SOURCE folder

6. Go to http://localhost/homepage/wp-login

7. Update WordPress if needed, enjoy!

# Saving the changes to the Git repo and publish it as github.io:

1. Export the static webpage with the WP2Static: select ZIP archive, enter the destination url, e.g. http://mingde.world. After finished, go to homepage\wp-content\uploads

2. Delete everything in the Git folder except .git, SOURCE, CNAME and README.MD. Paste the files with the files of the static export from foler wp-static-html-output-XXXXXXXXX

3. Clean up the temp files in homepage\wp-content\uploads. Note that they are tagged with string "static"

4. Backup the SQL using http://localhost/phpmyadmin/db_export.php?db=homepage, into the homepage.sql from the SOURCE folder

5. Commit and Push!

# Clearing the commit history of the repo

git checkout --orphan temp_branch

git add -A

git commit -am "reinitialize"

git branch -D master

git branch -m master

git push -f origin master