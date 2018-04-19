<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class DestinationCollectionModel extends JsonCollection implements DestinationCollection
{

    /**
     * @param Destination $value
     * @return DestinationCollection
     */
    public function add($value) {
        if (!$value instanceof Destination) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return Destination
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof Destination) {
            $resolvedClass = $this->resolveDiscriminator(Destination::class, $data);
            $data = $this->mapData($resolvedClass, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
