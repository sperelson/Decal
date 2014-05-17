# ![Decal](https://raw.githubusercontent.com/sperelson/Decal/master/_media/decallogo.svg)

Using Jekyll to generate a dynamic site is... well, dumb.

This is a proof of concept project that uses Jekyll to assemble a PHP powered blog. The primary advantage, if you can even consider it an advantage, is the incredible routing system. A routing system so advanced that it is already integrated it into every web server!

The idea is that Jekyll is used to generate the folder structure and place the index.php files where they belong. Decal also has an "intelligent" model inclusion system and an MVC style approach to its structure. Making it a pleasure to work with, if it wasn't a horrendous pile of PHP files and snippets causing a maintenance nightmare.

* models are placed into the /models folder
* views are placed into the /views folder (views are powered by Smarty*)
* controllers are defined in the /controllers folder and use Jekyll's head directives to build into the defined locations

(*) Smarty was chosen as it does not conflict with Liquid. Meaning, templates can be pre-assembled during the Jekyll build.

Decal is set up to place the root of the site into a /root subfolder. This enables the models, vendor, and views folders to be generally inaccessible from direct web access.

### Get Started
* install [Jekyll](http://jekyllrb.com/) 
* clone the [Decal project](https://github.com/sperelson/Decal)
* run ./getcomposer.sh or install [composer](https://getcomposer.org/) yourself
* use composer to install the PHP dependencies
* copy /config/dbsample.config to /config/db.config and configure with your own MySQL credentials
* jekyll build

### Why, seriously, why?
A static site is great, but can be limiting. If you're using Jekyll then you are probably fully capable of making use of server-side scripting. This project may go a little overboard, but it does show that Jekyll needn't be solely used for generating static sites.
