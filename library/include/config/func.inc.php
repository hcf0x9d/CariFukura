<?php

    // Global PHP Functions

    function samples() {
        //$sampleList = '<div class="ui360"><a href="http://freshly-ground.com/data/audio/mpc/20090119%20-%20Untitled%20Groove.mp3">20090119 - Untitled Groove</a></div>';
        $xml = simplexml_load_file('library/portfolio.xml');
        $sampleList = '';
        
        foreach ($xml->item as $item) {
            $title = $item->title;
            $description = $item->description;
            $embed = $item->embed;
            
            $sampleList .= '
                        <figure class="sample_item grid_4">
                            '.$embed.'
                            <figcaption class="sample_item_caption">'.$title.'</figcaption>
                        </figure>';
        }
        echo $sampleList;
    }
?>