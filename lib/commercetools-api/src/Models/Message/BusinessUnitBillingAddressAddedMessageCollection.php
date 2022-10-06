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
 * @extends MessageCollection<BusinessUnitBillingAddressAddedMessage>
 * @method BusinessUnitBillingAddressAddedMessage current()
 * @method BusinessUnitBillingAddressAddedMessage end()
 * @method BusinessUnitBillingAddressAddedMessage at($offset)
 */
class BusinessUnitBillingAddressAddedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert BusinessUnitBillingAddressAddedMessage $value
     * @psalm-param BusinessUnitBillingAddressAddedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitBillingAddressAddedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitBillingAddressAddedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitBillingAddressAddedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitBillingAddressAddedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitBillingAddressAddedMessage $data */
                $data = BusinessUnitBillingAddressAddedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
