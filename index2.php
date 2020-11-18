<?php

include("class_strings_k.php");

var_dump(StringsBarboraKozena::substrBarboraKozena("Bagr", 2));
var_dump(StringsBarboraKozena::substr_replaceBarboraKozena("kočička", "pejsek", 2, 3 )); 
var_dump(StringsBarboraKozena::strtrBarboraKozena("Ahoj. Jak se 749", "749", "más"));
var_dump(StringsBarboraKozena::strtoupperBarboraKozena("bAf"));
var_dump(StringsBarboraKozena::strtolowerBarboraKozena("lEK"));
var_dump(StringsBarboraKozena::strrposBarboraKozena("Lorem ipsum","m", 5));
var_dump(StringsBarboraKozena::strriposBarboraKozena("úzkost", "KOST"));
var_dump(StringsBarboraKozena::strposBarboraKozena("úzkost", "kost")); 
var_dump(StringsBarboraKozena::strlenBarboraKozena("červánek"));
var_dump(StringsBarboraKozena::strchrBarboraKozena("bublipšuk@seznam.cz", "@", TRUE));
var_dump(StringsBarboraKozena::str_replaceBarboraKozena("máš", "vede", "Ahoj. Jak se máš?"));
var_dump(StringsBarboraKozena::md5BarboraKozena("duhoprd"));
var_dump(StringsBarboraKozena::implodeBarboraKozena(" | ", ["kočka", "pes", "morče"]));
var_dump(StringsBarboraKozena::explodeBarboraKozena(" | ", "kočka | pes | morče"));
var_dump(StringsBarboraKozena::addcslashesBarboraKozena("fnu[ ]","A..z"));
var_dump(StringsBarboraKozena::addslashesBarboraKozena("don't")); 
var_dump(StringsBarboraKozena::trimBarboraKozena("\t\tkakao\n")); 
var_dump(StringsBarboraKozena::ucfirstBarboraKozena("lampička svítí")); 
var_dump(StringsBarboraKozena::ucwordsBarboraKozena("manon černozobá")); 

?>