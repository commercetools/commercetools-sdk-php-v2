<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Base\Collection;

interface MessageCollection extends Collection {
    /**
     * @param $index
     * @return Message
     */
    public function at($index);

    /**
     * @return Message
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return Message
     */
    public function map($data, $index);
}
