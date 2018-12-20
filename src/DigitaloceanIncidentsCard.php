<?php
/**
 * Created by PhpStorm.
 * User: macbookpro
 * Date: 2018-12-20
 * Time: 15:06
 */

namespace PhpJunior\NovaDigitaloceanCard;


use Laravel\Nova\Card;

class DigitaloceanIncidentsCard extends Card
{
    /**
     * The width of the card (1/3, 1/2, or full).
     *
     * @var string
     */
    public $width = '1/2';

    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component()
    {
        return 'digitalocean-incidents-card';
    }
}
