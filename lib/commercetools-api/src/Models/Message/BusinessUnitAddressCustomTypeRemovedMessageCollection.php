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
 * @extends MessageCollection<BusinessUnitAddressCustomTypeRemovedMessage>
 * @method BusinessUnitAddressCustomTypeRemovedMessage current()
 * @method BusinessUnitAddressCustomTypeRemovedMessage end()
 * @method BusinessUnitAddressCustomTypeRemovedMessage at($offset)
 */
class BusinessUnitAddressCustomTypeRemovedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert BusinessUnitAddressCustomTypeRemovedMessage $value
     * @psalm-param BusinessUnitAddressCustomTypeRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitAddressCustomTypeRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitAddressCustomTypeRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitAddressCustomTypeRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitAddressCustomTypeRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitAddressCustomTypeRemovedMessage $data */
                $data = BusinessUnitAddressCustomTypeRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
