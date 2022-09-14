<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
            crossorigin="anonymous">
    </script>
    <style>
        div.container {
            padding: 0.5rem; margin: 1rem auto;
            
            max-width: 621px;
            
            background-color: #15151544;

            border-radius: 1rem;
        }

        div.container > * {
            margin: 0 0 0.5rem 0;
        }

        div.container > br {
            margin: 0;
        }
    </style>
</head>

<div id="refresh"></div>
<script>
    function refresh() {
        $('#refresh').load('yiff.php', function() {
            $(this).html();
        });
    }
    refresh(); // This will run on page load
    setInterval(function() {
        refresh() // this will run after every 5 seconds
    }, 1000);
</script>