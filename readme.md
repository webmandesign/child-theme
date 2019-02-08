# Child theme

This is a sample child theme created mainly for [WebMan Design WordPress themes](https://www.webmandesign.eu/).


## Download

You can download the [installable theme ZIP package](https://github.com/webmandesign/child-theme/raw/master/child-theme.zip), the `child-theme.zip` file directly from [this repository](https://github.com/webmandesign/child-theme/).  
***Read the instructions below for how to set the theme up before installing!***


## How to set and use your child theme?

1. Unzip the `child-theme.zip` file on your computer.
2. Rename the `child-theme` folder to your needs.  
  **Example:** rename the folder to `my-website-theme`
4. Open the [`style.css`](https://github.com/webmandesign/child-theme/blob/master/child-theme/style.css) file and change the following:  
    * `CHILD_THEME_NAME` - change this to your desired child theme name.  
      **Example:** rename to `My Website Theme`
    * `PARENT_THEME_SLUG` - change this to the desired parent theme folder name.  
      **Example:** if you are using **Reykjavik** WordPress theme as parent, set this to `reykjavik`
4. Open the [`functions.php`](https://github.com/webmandesign/child-theme/blob/master/child-theme/functions.php) file and change the following:  
    * `CHILD_THEME_SLUG` - change this to your child theme's folder name, [replacing all `-` with `_`](http://php.net/manual/en/functions.user-defined.php).  
      **Example:** if you've set your child theme folder name to `my-website-theme`, use `my_website_theme` here.
5. Optional: You can modify your child theme screenshot image too, a sample source SVG is also provided.
6. Now upload your modified child theme via FTP to `YOUR_WORDPRESS_INSTALLATION_FOLDER/wp-content/themes/` folder. (Or ZIP your child theme and upload it via WordPress dashboard).
7. In your WordPress dashboard navigate to **Appearance &raquo; Themes** and activate your child theme.

You can then put any custom CSS into the `style.css` file and any custom PHP code into the end of `functions.php` file.

If you need to override the whole parent theme file, just copy it into your child theme, keeping the sub-folders structure, and edit the file there. However, **in most cases this is not required** as [WebMan Design WordPress themes](https://www.webmandesign.eu/) provide a lot of action and filter hooks so you don't have to override any file as whole. For tips on these, please ask at [WebMan Design support forums](http://support.webmandesign.eu/).


## Resources

* [WordPress Codex about child themes](http://codex.wordpress.org/Child_Themes)
* [Why child themes are so important](http://www.woothemes.com/2015/07/why-child-themes-matter/)
* [**Child Theme Check** plugin](https://wordpress.org/plugins/child-theme-check/) (and [how does it work?](https://wptavern.com/child-theme-check-plugin-helps-wordpress-users-navigate-parent-theme-updates))