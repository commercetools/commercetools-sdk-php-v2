<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Types\Common\ReferenceCollection;


interface ChannelReferenceCollection extends ReferenceCollection {
    /**
     * @param $index
     * @return ChannelReference
     */
    public function at($index);

    /**
     * @return ChannelReference
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ChannelReference
     */
    public function map($data, $index);
}
