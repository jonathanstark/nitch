        <div class="footer">
            <p>Thanks for stopping by! Please feel free to <a rel="external" href="mailto:hello@nitch.cc?subject=Nitch!">say hello</a> :)</p>
        </div>
        <script type="text/javascript" charset="utf-8">
            (function (d, c) {
                var activeClass = c || "active";
                function clearActive() {
                    var actives = d.querySelectorAll("." + activeClass);
                    for (var i = 0; i < actives.length; i++) {
                        actives[i].classList.remove(activeClass);
                    }
                }
                function setActive(e) {
                    clearActive();
                    if (e.target.tagName == "A") {
                        e.target.classList.add(activeClass);
                    }
                }
                d.body.addEventListener("touchstart", setActive, false);
                d.body.addEventListener("touchmove" , clearActive, false);
            })(document);
        </script>
    </body>
</html>
