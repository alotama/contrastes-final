<?
/*
!Create URL-friendly strings
!v1.1 @ 2018-05-02

@param $str -> String -> The string to be converted in URL-friendly
@param OPTIONAL $remove -> Array -> Removes each element from the URL
@param OPTIONAL $delimiter -> String -> Set the delimiter character
*/
setlocale(LC_ALL, 'es_ES.UTF8');
function create_URL($str, $remove=array(), $delimiter='-') {
 if(!empty($remove) ) {
  $str = str_replace((array)$remove, ' ', $str);
 }
 $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
 $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
 $clean = strtolower(trim($clean, '-'));
 $clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);
 return $clean;
};

/*
Destroy URL-friendly strings

@param $str -> String -> The string to be converted in non-URL-friendly
@param OPTIONAL $remove -> Array -> Removes each element from the URL
@param OPTIONAL $delimiter -> String -> Set the delimiter character
*/
function destroy_URL($str, $remove=array(), $delimiter=' ') {
 if(!empty($remove) ) {
  $str = str_replace((array)$remove, ' ', $str);
 }
 $clean = strtolower(trim($str, ' '));
 $clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);
 return $clean;
};
?>
