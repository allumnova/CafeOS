<?php
// includes/security_headers.php
header("X-Frame-Options: DENY");
header("X-Content-Type-Options: nosniff");
header_remove("X-Powered-By");
