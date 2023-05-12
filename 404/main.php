<body>
    <div class="background">
        <script src="script.js"></script>
        <link rel="stylesheet" href="style.css">

        <div class="error404" id="error404">
            <h1>
                <pre>4 4</pre>
            </h1>
        </div>
        <div class="error404ahlogo">
            <h5>
                <img src="/acornhub/resources/img/logo(ua).png" alt="AH logo">
            </h5>
        </div>
        <div id="text404"></div>
        <script>
            var params = new URLSearchParams(window.location.search);
            var myParam = params.get("cause");
            if (!myParam) {
                const phrases = [
                    "Are you trying to find the project creator's girlfriend?",
                    "Lost in the cyber world, or just lost?",
                    "Don't panic, it's just a small black hole on the information superhighway",
                    "Uh-oh, looks like you took a wrong turn somewhere",
                    "We couldn't find the page you were looking for, but we found this black hole",
                    "The page you're searching for is MIA, but don't worry, the puns are abundant",
                    "Whoops! It seems like the page you're looking for has gone on vacation",
                    "Page not found, sucked into a black hole maybe?",
                    "Looks like you've stumbled upon a black hole in the interwebs",
                    "The page you're searching for has vanished into the depths of a black hole",
                    "Page lost in the vastness of a black hole",
                    "You may have fallen into a black hole in cyberspace",
                    "A black hole has swallowed up the page you're searching for, but keep exploring the universe of the internet",
                    "The page you're looking for has disappeared into a black hole",
                    "Don't let the black hole defeat you, keep searching the endless possibilities of the internet",
                    "We're sorry, the page you're searching for has gone missing into a black hole",
                    "The page you're seeking has been consumed by a black hole, but don't worry, there's still plenty to discover"
                ];
                random = Math.floor(Math.random() * phrases.length);
                document.getElementById("text404").innerHTML = phrases[random];
            }
            else if (myParam=="nouser"){
                const phrases = [
                    "User not found, sucked into a black hole perhaps?",
                    "Oh no, it seems the user you're looking for has vanished into the depths of a black hole.",
                    "User not located, lost in the vastness of a black hole.",
                    "User swallowed up by a black hole.",
                    "Don't let the black hole get the best of you, keep searching for the user you're looking for.",
                    "The user you're searching for has disappeared into a black hole",
                    "A black hole has claimed the user you're seeking, but don't stop exploring the universe of users.",
                    "We're sorry, the user you're looking for has gone missing into a black hole.",
                    "The user you're trying to find has been consumed by a black hole, but don't worry, there's still plenty of others to discover.",
                    "User not found, but keep searching the endless possibilities of the interwebs."
                ];
                random = Math.floor(Math.random() * phrases.length);
                document.getElementById("text404").innerHTML = phrases[random];
            }
        </script>

        <canvas id=C></canvas>
    </div>
</body>

</html>