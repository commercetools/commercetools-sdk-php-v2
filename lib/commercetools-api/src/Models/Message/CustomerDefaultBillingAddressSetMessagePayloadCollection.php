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
 * @extends MessagePayloadCollection<CustomerDefaultBillingAddressSetMessagePayload>
 * @method CustomerDefaultBillingAddressSetMessagePayload current()
 * @method CustomerDefaultBillingAddressSetMessagePayload end()
 * @method CustomerDefaultBillingAddressSetMessagePayload at($offset)
 */
class CustomerDefaultBillingAddressSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CustomerDefaultBillingAddressSetMessagePayload $value
     * @psalm-param CustomerDefaultBillingAddressSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerDefaultBillingAddressSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerDefaultBillingAddressSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerDefaultBillingAddressSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerDefaultBillingAddressSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerDefaultBillingAddressSetMessagePayload $data */
                $data = CustomerDefaultBillingAddressSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
