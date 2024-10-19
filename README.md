
# File-Upload-Lab

Currently there are only 3 labs, 2 of which include protections. In this lab you will have to find a way to upload a payload, passing different types of restrictions and finally obtain an interactive shell.


## Deployment

If you want to deploy the lab locally but you don't want to use docker, you can deploy the lab installing Apache and PHP as described below:

**To deploy this lab**

```bash
~$ cd /var/www
~$ sudo apt install apache2 php git
~$ sudo git clone https://github.com/Tizic277/File-Upload-Lab.git
~$ sudo mv ./File-Upload-Lab/* ./html/ && sudo rm -dr ./File-Upload-Lab
~$ sudo chmod 766 ./html/Level_*/uploads && sudo chown -R www-data:www-data ./html/
~$ sudo systemctl start apache2.service
```

