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
 * @extends MessageCollection<BusinessUnitBillingAddressRemovedMessage>
 * @method BusinessUnitBillingAddressRemovedMessage current()
 * @method BusinessUnitBillingAddressRemovedMessage end()
 * @method BusinessUnitBillingAddressRemovedMessage at($offset)
 */
class BusinessUnitBillingAddressRemovedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert BusinessUnitBillingAddressRemovedMessage $value
     * @psalm-param BusinessUnitBillingAddressRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitBillingAddressRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitBillingAddressRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitBillingAddressRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitBillingAddressRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitBillingAddressRemovedMessage $data */
                $data = BusinessUnitBillingAddressRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
