<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home Page</title>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="jquery_cookie.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var cookieBar = document.getElementById("cookie-bar");
            var acceptButton = document.getElementById("cookie-accept");
            var rejectButton = document.getElementById("cookie-reject");

            acceptButton.addEventListener("click", function() {
                document.cookie = "cookieAccepted=true; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/";
                cookieBar.style.display = "none";
            });

            rejectButton.addEventListener("click", function() {
                document.cookie = "cookieRejected=true; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/";
                cookieBar.style.display = "none";
                window.location.href = "#";
            });

            var accepted = getCookie("cookieAccepted");
            var rejected = getCookie("cookieRejected");
            if (!accepted && !rejected) {
                cookieBar.style.display = "block";
            }
        });

        function getCookie(name) {
            var cookies = document.cookie.split("; ");
            for (var i = 0; i < cookies.length; i++) {
                var cookie = cookies[i].split("=");
                if (cookie[0] === name) {
                    return cookie[1];
                }
            }
            return null;
        }
    </script>
</head>
<body>
    <div id="cookie-bar" class="popup">
        <div class="popup-content">
            <span>We use cookies on this site to enhance your experience.</span>
            <abbr>By clicking any link on this website, you are giving us consent for us to set cookies</abbr>
            <div class="btnWrap">
                <a href="#" id="cookie-accept" class="btn3 yesiagree">Yes, I agree</a>
                <a href="#" id="cookie-reject" class="btn3 noiagre">No, I don't agree</a>
            </div>
        </div>
    </div>
</body>
</html>