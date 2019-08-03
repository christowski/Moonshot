# Moonshot
Landing page for the innovation game Moonshot

## What this is
This is a simple landing page for the innovation game MOONSHOT – a game to explore ideas in a fun, experimental way.

## Structure
* The website consists of an index.php file and a seperate impressum.php file to display contents
* There is no CMS
* Styles are loaded via CSS (edited through Sass)
* All images live in the /media folder
* The font is loaded via Typekit

## Installation
1. To preview the website locally, you’ll need to run a local server like Mamp (oldschool, I know …).
2. I wrote the styles for this website in scss, so to continue working with scss, you’ll need to have a compiler (the project uses Compass).
3. [Install Ruby and compass](http://compass-style.org/install/)
4. ```$ git clone https://github.com/christowski/Moonshot.git```
5. ```$ cd [The folder’s location]```
6. ```compass watch``` (Style edits in the Sass folder will be compiled to CSS)

Note: Never edit the files in ```stylesheets```; always use scss and compile with Compass.
