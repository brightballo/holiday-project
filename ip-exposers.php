<?php

// Get the hostname
$hostname = gethostname();

// Get the IP address
$ip_address = $_SERVER['SERVER_ADDR'];

// Get the timezone
$timezone = date_default_timezone_get();


?>
<head>
  <title>Server Information</title>
  <style>
    .server-info {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  font-family: Arial, sans-serif;
  font-size: 18px;
  color: goldenrod;
  margin: 20px;
  padding: 20px;
  border: 1px solid #ddd;
  border-radius: 10px;
}

.server-info p {
  margin: 10px 0;
}

.server-info p.label {
  font-weight: bold;
  color: #666;
}


#pageTitle {
    font-size: 4em;
    text-align: center;
    margin: 0 auto;
}

#copyright {
    font-size: 1.5em;
    text-align: center;
    margin: 2rem 1rem;
    padding: 0.7rem 1rem;
    background-color: rgba(67, 20, 20, 0.514);
}

  </style>
</head>

<!-- HTML to display the information -->
<div class="server-info" style="background-color: black; position: absolute; bottom: 25%; right: 25%; align-items: center;">
<h1 id="pageTitle">AWS IP Exposers</h1>


  <p>Hostname: <?php echo $hostname; ?></p>
  <p>IP Address: <?php echo $ip_address; ?></p>
  <p>Timezone: <?php echo $timezone; ?></p>
  <p>Location: <?php echo " US East " ; ?></p>

  <p id="copyright">&copy; <?php echo date("Y"); ?> &bull; ODEY BRIGHT</p>

</div>