<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>

    <!-- The main CSS file -->
    <link href="{{ url('assets/css/stylee.css') }}" rel="stylesheet" />
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>



<div id="clock" class="light">
    <div class="display">
        <div class="weekdays"></div>
        <div class="ampm"></div>
        <div class="alarm"></div>
        <div class="digits"></div>
    </div>
</div>

<div class="button-holder">
    <a class="button">Switch Theme</a>
</div>



<!-- JavaScript Includes -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.0.0/moment.min.js"></script>
<script src="{{ url('assets/js/scriptt.js') }}"></script>

<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>
</body>
</html>
