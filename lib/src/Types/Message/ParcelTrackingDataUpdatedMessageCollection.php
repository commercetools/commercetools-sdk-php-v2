<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface ParcelTrackingDataUpdatedMessageCollection extends MessageCollection {
    /**
     * @param $index
     * @return ParcelTrackingDataUpdatedMessage
     */
    public function at($index);

    /**
     * @return ParcelTrackingDataUpdatedMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ParcelTrackingDataUpdatedMessage
     */
    public function map($data, $index);
}
