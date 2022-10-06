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
 * @extends MessagePayloadCollection<BusinessUnitBillingAddressAddedMessagePayload>
 * @method BusinessUnitBillingAddressAddedMessagePayload current()
 * @method BusinessUnitBillingAddressAddedMessagePayload end()
 * @method BusinessUnitBillingAddressAddedMessagePayload at($offset)
 */
class BusinessUnitBillingAddressAddedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert BusinessUnitBillingAddressAddedMessagePayload $value
     * @psalm-param BusinessUnitBillingAddressAddedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitBillingAddressAddedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitBillingAddressAddedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitBillingAddressAddedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitBillingAddressAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitBillingAddressAddedMessagePayload $data */
                $data = BusinessUnitBillingAddressAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
