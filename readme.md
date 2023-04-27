# Modifying your theme

This repository provides a [starter **child theme**](#using-a-child-theme) created mainly for [WebMan Design WordPress themes](https://www.webmandesign.eu/). Child themes provide ways to modify your (parent) theme without losing your modifications when the (parent) theme is updated.

Alternatively (maybe even preferably), you can [use a **Child Theme Plugin** instead](#using-a-child-theme-plugin), which provides you with more flexibility, is easier to use, and you don't need to switch themes.

**User only one of the solutions, not both!**


---


## Using a *child theme*


### Download

You can download the [installable child theme ZIP package](https://github.com/webmandesign/child-theme/raw/master/child-theme.zip) (the `child-theme.zip` file) directly from [this repository](https://github.com/webmandesign/child-theme/).

***Read the instructions below for proper setup before installing!***


### Setting up the *child theme*

1. Unzip the `child-theme.zip` file on your computer.
2. Rename the `child-theme` folder to your needs.  
  **Example:** rename the folder to `my-website-theme`
4. Open the [`style.css`](https://github.com/webmandesign/child-theme/blob/master/child-theme/style.css) file and change the following:  
    * `Theme Name: Child Theme` - change `Child Theme` to your desired child theme name.  
      **Example:** set this to `Theme Name: My Website Theme`
    * `Template: theme-slug` - change `theme-slug` to the desired parent theme folder name.  
      **Example:** if you are using [**Michelle** WordPress theme](https://www.webmandesign.eu/portfolio/michelle-wordpress-theme/) as parent, set this to `Template: michelle`
4. Optional: You can modify your child theme screenshot image too, a sample source SVG is also provided.
5. Add any custom CSS styles into `style.css` file and/or any custom PHP code into `functions.php` file.
6. Now upload your modified child theme via FTP to `YOUR_WORDPRESS_FOLDER/wp-content/themes/` folder. (Or ZIP your child theme and upload it via WordPress dashboard.)
7. In your WordPress dashboard navigate to **Appearance &rarr; Themes** and activate your child theme.


### Modifying parent theme functionality

With child themes you can override whole parent theme files. Just copy them into your child theme (keeping the sub-folders structure) and edit the files there.

However, **in most cases this is not required** and there is a better approach with [WebMan Design WordPress themes](https://www.webmandesign.eu/). They provide a lot of action and filter hooks so you don't have to override any file as whole. Simply use the hook to modify a specific section or behavior.

Overriding whole files makes it difficult to maintain your child theme as *you will need to keep up with the parent theme file updates* too.

For tips on the best approach for your advanced modifications ask at [WebMan Design support forum](http://support.webmandesign.eu/).


---


## Using a *child theme plugin*


### Download

You can download the [installable child theme plugin ZIP package](https://github.com/webmandesign/child-theme/raw/master/child-theme-plugin.zip) (the `child-theme-plugin.zip` file) directly from [this repository](https://github.com/webmandesign/child-theme/).

***Read the instructions below for proper setup before installing!***


### Setting up the *child theme plugin*

1. Install the `child-theme-plugin.zip` file via your WordPress dashboard (**Plugins &rarr; Add New &rarr; Upload Plugin &rarr; Choose File &rarr; Install Now**). 
2. Activate the plugin.
3. Now you can use the plugin's `functions.php` file to add your custom PHP code, and plugin's `style.css` file to add your custom CSS code. (You can do this on your server using FTP, for example. The plugin files are located in `YOUR_WORDPRESS_FOLDER/wp-content/plugins/child-theme-plugin` folder.)


### Modifying active theme functionality

[WebMan Design WordPress themes](https://www.webmandesign.eu/) provide a lot of action and filter hooks you can use to override any theme functionality. Ask at [WebMan Design support forum](http://support.webmandesign.eu/) for tips on what hooks you need to target, if needed.


---


## Additional information

- [WordPress info about child themes](https://developer.wordpress.org/themes/advanced-topics/child-themes/)
- [**Child Theme Check** plugin](https://wordpress.org/plugins/child-theme-check/) (and [how does it work?](https://wptavern.com/child-theme-check-plugin-helps-wordpress-users-navigate-parent-theme-updates))
- [Child themes in era of full site editing](https://fullsiteediting.com/lessons/child-themes/)
