<?php
add_filter('document_title_separator', 'my_document_title_separator');
function my_document_title_separator($separator){
  $separator = '|';
  return $separator;
}
//タグの仕切り文字の修正
