# Kirby 3 Climatestrike plugin

A barebone Kirby 3 plugin to temporarily disable a website for the [Global Climate Strike](https://globalclimatestrike.net/) on 20 September 2019. 

The plugin disables the entire website and returns a placeholder page along with HTTP code 503 ("Service not available") to [avoid negative impact](https://yoast.com/http-503-site-maintenance-seo/) on SEO. It further provides a means to keep alive legally required URLs, such as the Impressum (for German sites) or privacy policy.

Inspired by [digital.globalclimatestrike.net](https://digital.globalclimatestrike.net/), but free from external dependencies, JavaScript, and tracking. [More background info on my blog](https://sebastiangreger.net/2019/09/global-climate-strike-kirby-plugin/).

## Installation and setup

Download and copy this repository to `/site/plugins/kirby3-climatestrike`.

To set up what pages should remain reachable, edit the array `$keepalive` in `index.php` (e.g. all legally required pages) and adjust the footer links in `placeholder.html` accordingly.

Optional: For designing your own landing page, adjust the HTML/CSS of `placeholder.html`; you may consider taking inspiration and using visuals from [globalclimatestrike.net](https://globalclimatestrike.net/spread-the-word-climate-strike/#style).

Testing: Change the variable `$strikedate` to today's date; depending on your server setup, the dated used might be your local time or UTC.

Set a reminder on your calendar to remove the plugin on or after 21 Sep (keep your site setup clean).

## License

Kirby 3 Climatestrike is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT). It is provided "as is" with no guarantee. Use it at your own risk and always test it yourself before using it in a production environment.

Copyright © 2019 [Sebastian Greger](https://sebastiangreger.net)

It is discouraged to use this plugin in any project that promotes racism, sexism, homophobia, animal abuse, violence or any other form of hate speech.
