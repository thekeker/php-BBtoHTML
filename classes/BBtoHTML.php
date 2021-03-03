<?php

class BBtoHTML {

    public $bbCodes = array(
        '[b]{text}[/b]', //bold
        '[i]{text}[/i]', //italic
        '[u]{text}[/u]', //underline
        '[s]{text}[/s]', //strike
        '[size={number}]{text}[/size]', //font size
        '[style size={number}]{text}[/style]', //same as above
        '[color={color}]{text}[/color]', //font color
        '[style color={color or hex}]{text}[/style]', //same as above
        '[center]{text}[/center]', //center text
        '[left]{text}[/left]', //left align
        '[right]{text}[/right]', //right align
        '[quote]{text}[/quote]', //quotation box
        '[quote={name}]{text}[/quote]', //quotation box with name
        '[spoiler]{text}[/spoiler]', //spoiler
        '[url]{url}[/url]', //link
        '[url={url}]{text}[/url]', //link with name
        '[img]{url}[/img]', //image
        '[img width={width} height={height} ...]{url}[/img]', //image resized
        '[img={width}x{height}]{url}[/img]', //image resized shorthand
        '[ul]{items}[/ul]', //unordered list
        '[ol]{items}[/ol]', //ordered list
        '[list]{items}[/list]', //list variant
        '[li]{text}[/li]', //list item
        '[*]{text}', //li shorthand
        '*{text}', //li shorthand
        '[code]{text}[/code]', //code
        '[pre]{text}[/pre]', //preformatted
        '[table]{rows}[/table]', //tables
        '[tr]{cells}[/tr]', //table row
        '[th]{content}[/th]', //table heading cell
        '[td]{content}[/td]', //content cell
        '[youtube]{id}[/youtube]' //youtube
    );

    public function parseString($string) {

    }
}

?>