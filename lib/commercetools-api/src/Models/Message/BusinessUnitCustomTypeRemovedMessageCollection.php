<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessageCollection<BusinessUnitCustomTypeRemovedMessage>
 * @method BusinessUnitCustomTypeRemovedMessage current()
 * @method BusinessUnitCustomTypeRemovedMessage end()
 * @method BusinessUnitCustomTypeRemovedMessage at($offset)
 */
class BusinessUnitCustomTypeRemovedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert BusinessUnitCustomTypeRemovedMessage $value
     * @psalm-param BusinessUnitCustomTypeRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitCustomTypeRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitCustomTypeRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitCustomTypeRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitCustomTypeRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitCustomTypeRemovedMessage $data */
                $data = BusinessUnitCustomTypeRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
