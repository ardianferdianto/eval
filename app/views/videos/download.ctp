<?php
// We'll be outputting a PDF
//echo $this->webroot.'files/videos'.$filename;

// It will be called downloaded.pdf
header('Content-Disposition: attachment;filename="'.$this->webroot.'files/videos'.$filename.'"');


?>