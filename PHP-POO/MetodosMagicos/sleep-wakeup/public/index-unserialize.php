<?php
namespace Magic;
use Log\Logger;

require "../vendor/autoload.php";
require "../src/Log/Logger.php";

$data = unserialize(Logger::get());

?>

<pre>
	
	<?php var_dump($data); ?>

</pre>