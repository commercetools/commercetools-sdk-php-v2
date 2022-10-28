<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessagePayloadCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessagePayloadCollection<BusinessUnitBillingAddressRemovedMessagePayload>
 * @method BusinessUnitBillingAddressRemovedMessagePayload current()
 * @method BusinessUnitBillingAddressRemovedMessagePayload end()
 * @method BusinessUnitBillingAddressRemovedMessagePayload at($offset)
 */
class BusinessUnitBillingAddressRemovedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert BusinessUnitBillingAddressRemovedMessagePayload $value
     * @psalm-param BusinessUnitBillingAddressRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitBillingAddressRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitBillingAddressRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitBillingAddressRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitBillingAddressRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitBillingAddressRemovedMessagePayload $data */
                $data = BusinessUnitBillingAddressRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
