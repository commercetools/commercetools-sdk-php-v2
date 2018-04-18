<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Base\Collection;

interface MessageConfigurationCollection extends Collection {
    /**
     * @param $index
     * @return MessageConfiguration
     */
    public function at($index);

    /**
     * @return MessageConfiguration
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return MessageConfiguration
     */
    public function map($data, $index);
}
