# Impact Databank Sale Site

Shanken's [Impact Databank](https://www.impactdatabank.com/) Review and Forecast.

## How it works

All you need to run this project is NodeJS.

To start, just run ```npm install``` after you've cloned this repo in you local machine inside its root folder.

```npm run serve``` runs [HarpJS](https://github.com/sintaxi/harp) in parallel with browsersync, so just head to [http://localhost:9000](http://localhost:9000/) to preview this project in your browser.

Start working on your changes or updates. Any changes you made here can be instanly sync in the browser. Once you are done just compile and check the static version found in the www folder.

```npm run compile``` compiles into static HTML in a folder "www" (you can skip the compilation though)

Once ready to deploy just head to the ```gh-pages``` branch, merge your updates or changes here.

```npm run gh-pages```  what this command does is compiled (if not compiled) then drops compiled files into root folder.<br>
**Note:** this comand should be used in ***gh-pages*** branch only.

Once this is fine in your browser just commit and push to github.

Read more in [here](https://github.com/mshanken/harp-boilerplate/#readme)

## What if I don't have NodeJS

If you don't want to work with NodeJS, just checkout into gh-pages after cloning this repo locally. Then just update the HTML files found in the root folder only. After that just commit and push your changes to github in the same gh-pages branch.

