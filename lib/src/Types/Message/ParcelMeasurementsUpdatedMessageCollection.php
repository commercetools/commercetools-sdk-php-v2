<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface ParcelMeasurementsUpdatedMessageCollection extends MessageCollection
{
    /**
     * @param $index
     * @return ParcelMeasurementsUpdatedMessage
     */
    public function at($index);

    /**
     * @return ParcelMeasurementsUpdatedMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ParcelMeasurementsUpdatedMessage
     */
    public function map($data, $index);
}
