<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Page;

class TestPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::create([
            'title' => 'Page Listing',
            'listable' => 0,
            'gjs_data' => \json_decode('{"components":"[{\"type\":\"text\",\"attributes\":{\"id\":\"igf4\"},\"components\":[{\"type\":\"textnode\",\"removable\":false,\"draggable\":false,\"highlightable\":0,\"copyable\":false,\"content\":\"[[Page-Listing]]\",\"_innertext\":false}]}]","styles":"[{\"selectors\":[\"#igf4\"],\"style\":{\"padding\":\"10px\"}}]","css":"* { box-sizing: border-box; } body {margin: 0;}#igf4{padding:10px;}","html":"<div id=\"igf4\">[[Page-Listing]]<\/div>"}')
        ]);

        Page::factory()->count(9)->create();
    }
}
