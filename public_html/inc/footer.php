        <div class="footer">
            <p>Thanks for stopping by! Please feel free to <a rel="external" href="mailto:hello@nitch.cc?subject=Nitch!">say hello</a> :)</p>
        </div>
        <script>
        (function(a,c,d,f){if("ontouchstart"in c||c.a&&a instanceof DocumentTouch){var b=null,e=function(){b&&(b.classList.remove(d),b=null)};a.documentElement.classList.add("touch");a.documentElement.classList.remove("no-touch");a.body.addEventListener("touchstart",function(a){e();-1<f.indexOf(a.target.tagName)&&(b=a.target,b.classList.add(d))},!1);a.body.addEventListener("touchmove",e,!1)}else a.documentElement.className+=" no-touch"})(document,window,"active",["A","INPUT"]);
        </script>
	    <script type="text/javascript">
	      var _gaq = _gaq || [];
	      _gaq.push(['_setAccount', 'UA-985459-20']);
	      _gaq.push(['_trackPageview']);
	      (function() {
	        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	      })();
	    </script>
    </body>
</html>
<?php
shell_exec(sprintf(
    '%s -d label="%s" -d sound="%s" -d text="%s" > /dev/null 2>&1 &'
    , 'curl http://api.choir.io/5f34bc2d08def819'
    , 'Nitch Pageview'
    , 'submarine/sons'
    , $_SERVER['REMOTE_ADDR'] . ' -> ' . $_SERVER['HTTP_REFERER'] . ' -> ' . $_SERVER['REQUEST_URI']
));
?>
