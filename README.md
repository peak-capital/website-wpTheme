# Peak Website - WordPress Theme (peak2021)

This is the repository for the WordPress theme currently used on the website https://peak.capital.

---

## Overview

- [Intro](#introduction)
- [Setup & Dependencies](#setup-dependencies)
- [Deployment](#deployment)
- [Making changes](#making-changes)
  - [Tools](#tools)
  - [Pages, Founders, Team Members](#pages-founders-team-members)
  - [Blogposts](#blogposts)
  - [Homepage](#homepage)
  - [Design (CSS)](#design-css-)
  - [Interactivity (Javascript)](#interactivity-javascript-)

## Introduction

Peak is the early-stage VC fully backed by entrepreneurs. We dare Europe's founders to realise their visions quicker.

Our website is https://peak.capital, generated using WordPress with a 100% custom theme. That theme's code is the content of this repository. For more info on themes and Wordpress please read more [here](https://wordpress.org/support/article/using-themes/) about the concept and [there](https://developer.wordpress.org/themes/getting-started/what-is-a-theme/) about the technical implementation part. If you are new to git and github, you can read more [over here](https://guides.github.com/activities/hello-world/).

## Setup & Dependencies

Peak2021 is using PHP templates to create the markup of the pages.

The CSS and Javascript are build using [Sass](https://sass-lang.com/) and [Webpack](https://webpack.js.org/). To get started developing the CSS or JS of the theme, you need to have [Node.js](https://nodejs.org/en/) and [npm](https://www.npmjs.com/) installed. After cloning the theme, run `'npm install'` to install all dependencies. To watch for changes and rebuild the theme automatically, run `'npm start'`. To build the theme for production, run `'npm run prod'`.

***Do Not*** edit the `style.css` file directly. It is generated from the `style.scss` file. If you need to add CSS, do it in the `style.scss` file or in one of the partials located in the folder /sass.

***Do also not*** edit the Javascript file `/js/main.js` directly. It is generated from the files located in the folder `/js/src`. Edit those instead and run `npm start` or `npm run prod` to rebuild the main.js file.

## Deployment

The theme is deployed to the WordPress instance using WP Pusher. 

After changes to the theme's code have been pushed to the main branch of this repository, the theme can be deployed by logging in to the WordPress admin interface and navigation to the WP Pusher plugin in the sidebar. 

In the submenu underneath the WP Pusher menu item, click on *"Themes"*.

In the list of themes, click on the *"Update theme"* button next to the theme *"Peak 2021"*. 

This will update the theme on the WordPress instance. Here you can also enable automatic Push-to-Deploy, which will automatically update the theme when changes are pushed to the main branch of this repository. *If you enable Push-to-deploy all people working on the theme need to be aware that any push will affect the website **immediately**.*

## Making changes

### Tools

Most of the content of the website is managed in the WordPress admin interface. To make changes, log in to the WordPress admin interface and navigate to the page you want to change.

To edit the code of the theme you can use any text editor. 

Github has a built in text editor, just click on the file you want to edit and click on the pencil icon in the top right corner. When you are done with the changes you can commit them by clicking on the "Commit changes" button at the bottom of the page. As mentioned [above in the deployment](#deployment) section, any changes pushed to the main branch will only go live on the website once the code is pulled with WP Pusher. *_You need to be a team member of the peak-capital github organization to do this_*

*_Note that to edit the CSS and Javascript code, you'll also need to run the build process with npm. For that you will have to have a clone of the repo running on your local dev environment_*

### Pages, Founders, Team Members
 The pages that are referenced in the top navigation can be found under *"Pages"*, the individual Founders can be edited under *"Founders"* and the individual Team members can be edited under *"Team members"*. You will find these content collections in the sidebar of the WordPress admin interface.

### Blog posts
At the time of writing (September 2022), the blog posts are being written in a third-party tool called [StoryChief](https://storychief.io/). The blog posts are then imported into WordPress using the StoryChief plugin.
You *can* edit blog posts after they have been imported, just navigate to "Posts" and click on the post you want to edit. 

### Homepage
At the time of writing (September 2022) the homepage is a static page. This means the content can't be accessed from within the WordPress editor. To edit the content of the homepage, you will need to change the source code of the theme template file `front-page.php`. _You will need to have basic knowledge of HTML and PHP to make changes to this file. Make sure you make the changes and commit them to this repository, then use WP Pusher to pull the changes as [described above](#deployment)_

### Design (CSS)
To make changes to the design of the website, knowledge of PHP, HTML, CSS and build processes is required. 

The CSS file `style.min.css` contains the styles for the frontend. It is generated by concatinating a collection of smaller SCSS files. The SCSS files are located in the folder /sass. The main file is style.scss, which imports all the other files. The files are concatinated and minified by Webpack.

The CSS file `style-editor.min.css` contains the styles to give a nicer representation of the frontend in the content editor. It is also generated by concatinating a collection of smaller SCSS files. The main file is style-editor.scss, which imports all the other files.

### Interactivity (Javascript)
Most of the interactivity of the website is handled by Javascript. The main Javascript file is `/js/main.js`, which is generated by concatinating a collection of smaller Javascript files. The main file is `/js/src/index.js`, which imports all the other files in `/js/src`. If you need to make changes or add new interactivity, you can create a new file in `/js/src` and import it in `/js/src/index.js`. The files are concatinated and minified by Webpack when you run a build command like `npm start` or `npm run prod`.