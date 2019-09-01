<?php

/**
 * Kirby 3 Climatestrike Plugin
 *
 * @version   1.0.0
 * @author    Sebastian Greger <msg@sebastiangreger.net>
 * @copyright Sebastian Greger <msg@sebastiangreger.net>
 * @link      https://github.com/sebastiangreger/kirby3-climatestrike
 * @license   MIT
 */

\Kirby::plugin('sgkirby/climatestrike', [

    'routes' => function ($kirby) {

		return [
			[

				// captures all requests routed through Kirby
				'pattern' => '(:all)',
				'action'  => function ( $uri ) {

					// date this route becomes active (string; format: YYYYMMDD)
					$strikedate = '20190920';
					
					// array of URLs to exclude from the override (e.g. for legally required information)
					$keepalive = [
						'impressum',
						'privacy-policy',
					];
					
					// on the date of the climate strike, override all but the excluded URLs with the strike page
					if ( strftime('%Y%m%d') == $strikedate && !in_array( $uri, $keepalive ) ) :
					
						// load the HTML from climatestrike.html
						$html = F::read( __DIR__ . '/placeholder.html' );
						
						// send the HTML to the browser, along with a 503 "Service not available" HTTP code
						return new Response( $html, 'text/html', 503 );
						
					// on other days, and for the excluded URLs, jump to the next applicable routing rule instead
					else :

						$this->next();
						
					endif;
					
				}
				
			],
		];

	},
	
]);
