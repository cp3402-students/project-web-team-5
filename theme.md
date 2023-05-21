# Theme Documentation

Welcome to the documentation for our WordPress theme! This guide is intended to help new developers continue to develop our theme with ease. Here you will find all the relevant information regarding the features of our theme, design decisions, colors, and files that need editing.

## Table of Contents
1. [Features](#features)
2. [Design Decisions](#design-decisions)
3. [Colors](#colors)
4. [Files that Need Editing](#files-that-need-editing)

## Features

Our theme has the following features:

- Fully responsive design.
- Customizable header and footer.
- Customizable navigation menus.
- Support for custom post types and taxonomies.
- Custom page templates for different types of content.
- Page templates for different types of content.
- Custom widgets and shortcodes.

## Design Decisions

Our theme is designed with a focus on simplicity, flexibility, and ease of use. We have chosen a minimalistic design to create a clean and modern look. Our theme is also built on the Bootstrap 4 framework, which provides a robust set of tools for creating responsive and mobile-first designs. We have also used Sass for CSS preprocessing, which makes it easier to manage and organize stylesheets.

The team made several key design decisions when developing the starter theme for the WordPress site:

1. Layout: we designed the layout of the theme to be flexible, allowing users to easily customize the placement of content on the page.
2. Typography: Typography was a crucial consideration, and we included a carefully selected set of fonts that work well together and complement the overall design.
3. Color scheme: we designed the color scheme of the theme to be easily customizable, allowing users to select colors that match their brand or personal preferences.
4. Navigation: Navigation was considered a critical element, and we designed the starter theme to include the all the pages so that they can be utilized and easily accessed.
5. Mobile responsiveness: we ensured that the starter theme was mobile-responsive, optimizing the layout and design for smaller screens and ensuring compatibility with various mobile devices.

We prioritized flexibility, customization, and user-friendliness when making design decisions for the starter theme. By providing developers with a solid foundation for their website design, the team streamlined the development process and ensured a consistent, high-quality user experience for both a developer and a user.

## Colors

Our theme uses a color scheme that is easy on the eyes and complements the overall design. The main color palette consists of shades of orange and gray. 
We have also included accent colors that can be customized to fit the client specifications.

## Files that Need Editing

If you need to make changes to our theme, you will need to edit the following files:

- `style.scss`: This file contains the Sass code for our theme. You can change the colors, fonts, and other design elements here.
- `functions.php`: This file contains the functions for our theme. You can add new features, modify existing ones, and include custom code here.
- `header.php` and `footer.php`: These files contain the HTML markup for the header and footer sections of our theme. You can modify these files to add or remove content.
- `index.php`: This file contains the main loop that displays the content of your website. You can modify this file to customize the layout of your website.


The `npm run dist` command is used to compile and minify the theme's CSS and JavaScript files for production use. This command is typically used to compile and prepare a production-ready version of the Understrap starter theme.
Using the `npm run dist` command helps to ensure that the theme's files are optimized for production use, resulting in faster load times and improved performance. Additionally, it ensures that any changes made to the theme's CSS or JavaScript files are properly compiled and minified, reducing the likelihood of errors or issues on the live server.

To run the `npm run dist` command, you need to have Node.js and npm installed on your computer. Here are the steps to run the command:
1. Open a terminal or command prompt window.
2. Navigate to the root directory of your Understrap starter theme project.
3. Run the command `npm run dist`.
4. Wait for the command to complete its tasks. This may take a few moments, depending on the size of your project.
5. Once the command has completed, check the `css` and `js` folders to ensure that the compiled and minified CSS and JavaScript files have been generated.

It's important to note that the `npm run dist` command should be run before deploying your website to a live server to ensure that the files are optimized for production use.
When executed, it performs a series of tasks, including:
1. Compiling Sass files: The command compiles the Sass files in the theme's `sass` directory into CSS files that are saved in the `css` directory.
2. Autoprefixing: The command automatically adds vendor prefixes to the CSS code in the generated `style.css` and `style.min.css` files to ensure cross-browser compatibility.
3. Minification: The command minifies the CSS code in the `style.min.css` file to reduce its file size.
4. Creating source maps: The command creates source maps for the compiled CSS code, which makes it easier to debug issues during development.
5. Updating package.json: The command updates the version number of any dependencies used in the theme.


When you run the `npm run dist` command in the terminal of the `theme.scss` file after adding CSS to it, several files in the Understrap starter theme will be edited:
1. `style.css`: This file will be generated from the `theme.scss` file and will contain the compiled CSS code.
2. `style.min.css`: This file will also be generated from the `theme.scss` file and will contain a minified version of the compiled CSS code.
3. `style.css.map` and `style.min.css.map`: These files will be generated alongside `style.css` and `style.min.css`, respectively, and will contain source maps that link the compiled CSS code back to the original Sass files.
4. `style.css` and `style.min.css` in the `css` folder: These files will be generated in the `css` folder, replacing any existing versions of these files, and will be the files that are actually loaded by the website.

In addition to these files, the `npm run dist` command will also edit the `package.json` and `package-lock.json` files to update the version numbers of any dependencies that were used in the build process.


The npm run dist command is a useful tool that can help improve the development process of an Understrap starter theme. There are several reasons why you would use this command. Firstly, it can result in improved performance, as the compiled and minified files are optimized for performance and can result in faster load times and a better user experience. 
Additionally, the minification process reduces the size of the CSS and JavaScript files, which can result in faster load times and reduced bandwidth usage. 
The autoprefixing feature ensures that vendor prefixes are added to the CSS code, which ensures cross-browser compatibility. This feature can be particularly useful for ensuring that the theme works well across a range of devices and browsers. 
The source maps generated by the command make it easier to debug issues during development. This can help to identify and fix issues quickly, reducing the time and effort required for testing and development. 
Finally, the command updates the version numbers of any dependencies used in the theme, ensuring that the latest versions are used and that any security vulnerabilities or bugs are fixed. This helps to ensure that the theme is up-to-date and secure, and can reduce the risk of security breaches or other issues. Overall, the npm run dist command can be a powerful tool for improving the performance, compatibility, and security of an Understrap starter theme.