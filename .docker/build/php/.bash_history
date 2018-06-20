ls
exit
composer create-project symfony/website-skeleton my-project
cd ..
ll
mkdir test
cd ap
stty rows 50 && stty cols 300
composer create-project symfony/website-skeleton template
cd ..
ll
chmod 777 -R app/
composer create-project symfony/website-skeleton template
exit
composer install
exit
