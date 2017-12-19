<?php 

/**@Title:      INLINE STYLE MAKER
 * @Version:    1.0
 * @Author:     Danilo C. (coder-ferox)
 * @Date:       19/12/2017
 * 
 * INSTRUCTIONS:
 * 
 * Add an associative banners:
 * 
 * [inline style key => inline style value]
 * 
 * ...then call this function
 */

function inline_style_maker($style)
{

        $style_str = 'style="';
        $style_keys = array_keys($style);

        for($c = 0; $c < sizeof($style); $c++)
        {
            $style_str .= $style_keys[$c]." ".$style[$style_keys[$c]].'; ';
        }
        $style_str_final = $style_str.'"';

        return $style_str_final;
}

//TEST CODE:

$style = array  (   "text-align:" => "center",
                    "padding:" => "10px 0 10px 0",
                    "display:" => "initial"
                );

echo inline_style_maker($style); //style="text-align: center; padding: 10px 0 10px 0; display: initial; "


