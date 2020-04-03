<?php
/**
 * Transforme un tableau associatif d'attributs en une chaîne de caractère
 */
function getAttributesString(array $attributesList){
    $attributesString = "";

    foreach($attributesList as $key => $val){
        $attributesString .= " $key = \"$val\"";
    }

    return $attributesString;
}

/**
 * @author : 
 * @param string $tagName : Le nom de la balise
 * @param string $content : Le contenu enfant de la balise
 * @param array $attributesList : Un tableau associatif des attributs de la balise
 * @param bool $autoClosed : La balise est elle auto fermée ?
 * 
 * Retourne une chaîne de caractère qui représente une balise html et son contenu
 */
function htmlTag($tagName, $content, array $attributesList = [], $autoClosed = false){

    $attributesString = getAttributesString($attributesList);

    if($autoClosed){
        return "<$tagName $attributesString >";
    } else {
        return "<$tagName $attributesString >$content</$tagName>";
    }   
}

echo htmlTag("div", "Hello", ["style" => "color:red"]);
echo htmlTag(
    "a","",
    [
        "href" =>"formulaire.php",
        "alt"  =>"Lien vers le formaulaire"
    ]
    );
echo htmlTag(
    "img", "", 
    [
        "src" => "img/nature.jpg", 
        "alt" => "texte alternatif"
    ], 
    true
);








