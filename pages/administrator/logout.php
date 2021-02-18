<?php
    setcookie ("user_id", "", time() - 3600);
    setcookie ("res_id", "", time() - 3600);
    setcookie ("log_id", "", time() - 3600);
    
?>
<script type="text/javascript">location.href = 'administrator';</script>