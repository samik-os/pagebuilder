<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(6, 9),
            'body' => $this->faker->paragraph(10),
            'gjs_data' => \json_decode('{"components":"[{\"type\":\"text\",\"attributes\":{\"id\":\"ilnr\"},\"components\":[{\"type\":\"textnode\",\"removable\":false,\"draggable\":false,\"highlightable\":0,\"copyable\":false,\"content\":\"[[Title]]\",\"_innertext\":false}]},{\"type\":\"text\",\"attributes\":{\"id\":\"inmc\"},\"components\":[{\"type\":\"textnode\",\"removable\":false,\"draggable\":false,\"highlightable\":0,\"copyable\":false,\"content\":\"[[Body]]\",\"_innertext\":false}]},{\"type\":\"text\",\"attributes\":{\"id\":\"itwh\"},\"components\":[{\"type\":\"textnode\",\"removable\":false,\"draggable\":false,\"highlightable\":0,\"copyable\":false,\"content\":\"[[Page-Return]]\",\"_innertext\":false}]}]","styles":"[{\"selectors\":[\"#ilnr\"],\"style\":{\"padding\":\"10px\",\"font-size\":\"32px\"}},{\"selectors\":[\"#inmc\"],\"style\":{\"padding\":\"10px\"}},{\"selectors\":[\"#itwh\"],\"style\":{\"padding\":\"10px\"}}]","css":"* { box-sizing: border-box; } body {margin: 0;}#ilnr{padding:10px;font-size:32px;}#inmc{padding:10px;}#itwh{padding:10px;}","html":"<div id=\"ilnr\">[[Title]]<\/div><div id=\"inmc\">[[Body]]<\/div><div id=\"itwh\">[[Page-Return]]<\/div>"}')
        ];
    }
}
