<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface OrderImportedMessageCollection extends MessageCollection
{
    /**
     * @param $index
     * @return OrderImportedMessage
     */
    public function at($index);

    /**
     * @return OrderImportedMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderImportedMessage
     */
    public function map($data, $index);
}
