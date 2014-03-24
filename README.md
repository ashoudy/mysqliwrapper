mysqliwrapper
=============

A Simple Mysqli DB wrapper.

Usage:
Update the variables inside the Database.php file.
include in your file.

Initiate like so

$db = new Database(false);

$db->Query("querys go here"); - Querys

$db->SelectNextResult(); - return result as associative array.

$db->GetResult("column name here"); - select result out of array

$db->Escape($_GET['escapeme']); - escape sql injection!

$db->Close(): - Close the active connection to the db.

Many other functions can be added to the Database Class if needed.



