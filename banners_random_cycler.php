<?php

/**@Title:      BANNERS RANDOM CYCLER
 * @Version:    1.0
 * @Author:     Danilo C. (coder-ferox)
 * @Date:       19/12/2017
 * 
 * INSTRUCTIONS:
 * 
 * Add two associative banners:
 * 
 * [img url => href url]
 * 
 * [inline style key => inline style value]
 * 
 * ...then call this function
 */

    function banners_random_cycler($banners,$styles)
    {

        //MAKING STYLE STRING...

        $style_str = 'style="';
        $style_keys = array_keys($styles);

        for($c = 0; $c < sizeof($styles); $c++)
        {
            $style_str .= $style_keys[$c]." ".$styles[$style_keys[$c]].'; ';
        }
        $style_str_final = $style_str.'"';

        //CYCLING BANNERS...

        $keys = array_keys($banners);
        
        $idx = rand(0,sizeof($banners)-1);
        
        return '<a href="'.$banners[$keys[$idx]].'"><img src="'.$keys[$idx].'" '.$style_str_final.'/></a>';
        
    }

//TEST CODE

$banner = array (   "http://content.pouet.net/logos/pouet.logo.07_by_devian.png" => "http://www.pouet.net",
                    "http://content.pouet.net/logos/poyetti.jpg" => "http://www.google.it",
                    "http://content.pouet.net/logos/pouet_h2o_mechbug.png" => "http://www.github.com",
                    "http://content.pouet.net/logos/k_pouet.png" => "http://www.libero.it"
                );

$style = array  (   "text-align:" => "center",
                    "padding:" => "10px 0 10px 0",
                    "display:" => "initial"
                );

echo banners_random_cycler($banner,$style);