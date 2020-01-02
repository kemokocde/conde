<!DOCTYPE html>
<html>
    <head>
        <title>Input In Container Fixed To Top Of Viewport | datetimepicker Tests</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="jquery.datetimepicker.css"/>

        <style>
           


            #search form {
                width: 960px;
                margin: 0 auto;
                padding: 0.5em;
            }

            #search form > div,
            #filters form > div {
                display: inline;
            }
        </style>
    </head>

    <body>
             <div id="filters">
                <form method="post" action="?">
                    <div>
                        <label for="filter-date">Date</label>
                        <input type="text" name="filter-date" id="filter-date"/>
                    </div>

                    <div>
                        <input type="submit" value="Filter"/>
                    </div>
                </form>
            </div>
        <script src="jquery.js"></script>
        <script src="jquery.datetimepicker.full.js"></script>

        <script>
            /*jslint browser:true*/
            /*global jQuery, document*/

            jQuery(document).ready(function () {
                'use strict';

                jQuery('#filter-date, #search-from-date, #search-to-date').datetimepicker();
            });
        </script>
    </body>
</html>
