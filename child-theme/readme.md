# Child theme

This is a sample child theme created for [WebMan WordPress themes](http://www.webmandesign.eu).

## How to use it?

1. Open the `style.css` file and change the following:
  * `CHILD_THEME_NAME` - change to your desired child theme name
  * `PARENT_THEME_SLUG` - change to the parent theme folder name (for example, if you are using **Auberge** WordPress theme, set this to `auberge`)
  * `PARENT_THEME_NAME` - change to the parent theme name (`Auberge`, for example)
2. Open the `functions.php` file and change the following:
  * `CHILD_THEME_NAME` - change to your desired child theme name
  * `CHILD_THEME_SLUG` - change to your child theme folder name (by default use `child-theme`, but if you change the folder name, use the name you've set)
3. Upload the theme via FTP to `YOUR_WORDPRESS_INSTALLATION_FOLDER/wp-content/themes/` folder
4. In your WordPress dashboard navigate to **Appearance &raquo; Themes** and activate your child theme

You can then put any CSS into the `style.css` file and any PHP code into the `functions.php` file. If you need to override the whole parent theme file, just copy it into your child theme's folder (keeping the sub-folders structure) and edit the file there.

## Resources

* [WordPress Codex on child themes](http://codex.wordpress.org/Child_Themes)
* [Why child themes are so important](http://www.woothemes.com/2015/07/why-child-themes-matter/)
