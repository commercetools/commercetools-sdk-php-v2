<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface ReviewRatingSetMessageCollection extends MessageCollection
{
    /**
     * @param $index
     * @return ReviewRatingSetMessage
     */
    public function at($index);

    /**
     * @return ReviewRatingSetMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ReviewRatingSetMessage
     */
    public function map($data, $index);
}
