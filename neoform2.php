<!DOCTYPE html>
<html>
<head>
    <title>LookAhead</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- Bootstrap and FontAwesome -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Scripts -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
</head>
    <body>
    
        <form id="form-beer_v1" name="form-beer_v1">
            <div class="typeahead__container">
                <div class="typeahead__field">
         
                    <span class="typeahead__query">
                        <input class="js-typeahead-beer_v1" name="beer_v1[query]" type="search" placeholder="Search" autocomplete="off">
                    </span>
                    <span class="typeahead__button">
                        <button type="submit">
                            <i class="typeahead__search-icon"></i>
                        </button>
                    </span>
         
                </div>
            </div>
        </form>


    </body>
    <script src="assets/js/neoform.js" type="text/javascript"></script>
</html>