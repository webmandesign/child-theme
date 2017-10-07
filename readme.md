# Child theme

This is a sample child theme created mainly for [WebMan Design WordPress themes](https://www.webmandesign.eu/).

If your theme contains an automatic **child theme generator**, you can use that one instead ;) Just [check your WordPress theme documentation](https://www.webmandesign.eu/reference/#links-docs).


## Download

You can download the [installable theme ZIP package](https://github.com/webmandesign/child-theme/raw/master/child-theme.zip), the `child-theme.zip` file directly from [this repository](https://github.com/webmandesign/child-theme/).
***Read instructions below for how to set the theme up before installing!***


## How to use this child theme?

1. Open the `style.css` file and change the following:
  * `CHILD_THEME_NAME` - change this to your desired child theme name,
  * `PARENT_THEME_SLUG` - change this to the desired parent theme folder name (for example, if you are using **Reykjavik** WordPress theme, set this to `reykjavik`),
2. Open the `functions.php` file and change the following:
  * `CHILD_THEME_SLUG` - change this to your child theme folder name, [replacing all `-` with `_`](http://php.net/manual/en/functions.user-defined.php) (for example, the default child theme folder name is `child-theme`, so you should use `child_theme` instead), 
3. Upload the theme via FTP to `YOUR_WORDPRESS_INSTALLATION_FOLDER/wp-content/themes/` folder, or ZIP your new child theme and upload it via WordPress dashboard,
4. In your WordPress dashboard navigate to **Appearance &raquo; Themes** and activate your child theme.

You can then put any custom CSS into the `style.css` file and any custom PHP code into the `functions.php` file.

If you need to override the whole parent theme file, just copy it into your child theme, keeping the sub-folders structure, and edit the file there. However, in most cases this is not needed as [WebMan Design WordPress themes](https://www.webmandesign.eu/) provides lot of hooks so you don't have to change the whole files. For tips on these, please ask at [WebMan Design support forums](http://support.webmandesign.eu/).


## Resources

* [WordPress Codex about child themes](http://codex.wordpress.org/Child_Themes)
* [Why child themes are so important](http://www.woothemes.com/2015/07/why-child-themes-matter/)
* [**Child Theme Check** plugin](https://wordpress.org/plugins/child-theme-check/) (and [how does it work?](https://wptavern.com/child-theme-check-plugin-helps-wordpress-users-navigate-parent-theme-updates))