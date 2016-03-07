# itovi

Step 1. add 127.0.0.1 itovi.com to your "hosts" file by default it is in the /etc/ folder.

Step 2. add the following code block into your vhosts file found in your server programs(MAMPP, XAMMP, etc.) /etc/ folder.

```
<VirtualHost itovi.com:80>
   ServerName localhost
   DocumentRoot "/Volumes/Data/www/itovi"
   <Directory "/Volumes/Data/www/itovi">
       Options Indexes FollowSymLinks Includes execCGI
       AllowOverride All
       Require all granted
   </Directory>
</VirtualHost>
```

Change the document root and directory to where you are storing the github repo.