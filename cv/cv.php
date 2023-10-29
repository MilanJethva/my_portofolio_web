<?php


header("content-disposition:attachment;filename=mj.pdf");

fopen("mj.pdf","r" );

readfile("mj.pdf");



?>