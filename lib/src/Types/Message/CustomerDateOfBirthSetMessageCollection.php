<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface CustomerDateOfBirthSetMessageCollection extends MessageCollection
{
    /**
     * @param $index
     * @return CustomerDateOfBirthSetMessage
     */
    public function at($index);

    /**
     * @return CustomerDateOfBirthSetMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerDateOfBirthSetMessage
     */
    public function map($data, $index);
}
