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
 * @extends MessageCollection<CustomerDefaultBillingAddressSetMessage>
 * @method CustomerDefaultBillingAddressSetMessage current()
 * @method CustomerDefaultBillingAddressSetMessage end()
 * @method CustomerDefaultBillingAddressSetMessage at($offset)
 */
class CustomerDefaultBillingAddressSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CustomerDefaultBillingAddressSetMessage $value
     * @psalm-param CustomerDefaultBillingAddressSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerDefaultBillingAddressSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerDefaultBillingAddressSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerDefaultBillingAddressSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerDefaultBillingAddressSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerDefaultBillingAddressSetMessage $data */
                $data = CustomerDefaultBillingAddressSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
