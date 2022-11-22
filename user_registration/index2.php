
<div id = "Scrape Internships" class = "tab-pane fade">
</div>
<?php
include 'html.php'
$html =file_get_html('http://google.com');
$img=$html-> find('img',0)->src;
echo $img;