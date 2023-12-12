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
 * @extends MessageCollection<BusinessUnitAddressCustomFieldRemovedMessage>
 * @method BusinessUnitAddressCustomFieldRemovedMessage current()
 * @method BusinessUnitAddressCustomFieldRemovedMessage end()
 * @method BusinessUnitAddressCustomFieldRemovedMessage at($offset)
 */
class BusinessUnitAddressCustomFieldRemovedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert BusinessUnitAddressCustomFieldRemovedMessage $value
     * @psalm-param BusinessUnitAddressCustomFieldRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitAddressCustomFieldRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitAddressCustomFieldRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitAddressCustomFieldRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitAddressCustomFieldRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitAddressCustomFieldRemovedMessage $data */
                $data = BusinessUnitAddressCustomFieldRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
