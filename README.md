# Threads-Website

### Setup
#### -Install LAMP Stack
https://howtoubuntu.org/how-to-install-lamp-on-ubuntu

## -Set up virtual directory and configure site in apache
```bash
sudo cp /etc/apache2/sites-available/000-default.conf /etc/apache2/sites-available/threads.conf

````
**open /etc/apache2/sites-available/threads.conf (in root previlage)**


iam setting up threads folder in home directory.


change **<username>** accordingly.
```html
<VirtualHost *:8000>
    ServerAdmin webmaster@localhost
    DocumentRoot /home/<username>/Threads-Website/
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>


```

atlast add configuration and restart apache2
```bash
sudo a2ensite threads.conf
systemctl reload apache2

```
https://www.digitalocean.com/community/tutorials/how-to-set-up-apache-virtual-hosts-on-ubuntu-14-04-lts

