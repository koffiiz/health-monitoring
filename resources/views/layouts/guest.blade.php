<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
        <link rel="stylesheet" href="https://dl.dropbox.com/s/59cf440zw9s9e9c/app.css"/>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>

        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

        <script>
            jQuery(document).ready(function(){  
                total_forms = jQuery("fieldset").length;  
                jQuery(".next").click(function(){
                    let previous = jQuery(this).closest("fieldset").attr('id');
                    let next = jQuery('#'+this.id).closest('fieldset').next('fieldset').attr('id');
                    jQuery('#'+next).show();
                    jQuery('#'+previous).hide();
                }); 
                
                jQuery(".previous").click(function(){
                    let current = jQuery(this).closest("fieldset").attr('id');
                    let previous = jQuery('#'+this.id).closest('fieldset').prev('fieldset').attr('id');
                    jQuery('#'+previous).show();
                    jQuery('#'+current).hide();
                }); 
            });
        </script>
    </body>
</html>
