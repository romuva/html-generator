# html-generator
It's a simple editor that enables eBay sellers with no coding or design skills to create highly customizable listings.

The application helps eBay sellers create mobile responsive and fully compliant eBay listings easily and quickly.

After generating one you can easily import .html file into your ebay (you don't need to connect ebay).

This system could be used for a number of different applications and easily integrated into any projects you may be thinking of creating.

![Login or Register page](https://github.com/romuva/html-generator/master/assets/img/html-generator-pic-1.png)

![Login or Register page](https://github.com/romuva/html-generator/master/assets/img/html-generator-pic-2.png)

Developers used PHP PDO, JS, HTML, CSS to create this system. The basic functions are to:
<ul>
<li>Create a user (Register)</li>
<li>Login a user</li> 
<li>Reset a users password</li> 
<li>Show a basic profile of the logged in user.</li>  
<li>Enabled basic profile editing (username & email address).</li>
<li>Product list (insert/update/delete products from database when you are logged in).</li>
</ul>

If you want to integrate this system into any of your projects please feel free to do so. If you want to make any changes to the project files then please feel free to do so.

Requirements:
<ul>
<li>PHP</li>
<li>Database (MYSQL suggested)</li> 
</ul>

Installation instructions:
1. Just drop files into your hosting which supports PHP/MYSQL.
2. Import htmlgenerator.sql into your MYSQL database thru phpmyadmin or other system.
3. Edit *.php files in /config/ folder with your preferable settings.


CREDITS

Authentication script:
MattN1014

jQuery plugin to make HTML tables responsive:
fooplugins/FooTable (https://fooplugins.com/plugins/footable-jquery/)