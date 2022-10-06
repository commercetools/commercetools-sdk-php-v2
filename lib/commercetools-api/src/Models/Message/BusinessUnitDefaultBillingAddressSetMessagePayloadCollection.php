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
 * @extends MessagePayloadCollection<BusinessUnitDefaultBillingAddressSetMessagePayload>
 * @method BusinessUnitDefaultBillingAddressSetMessagePayload current()
 * @method BusinessUnitDefaultBillingAddressSetMessagePayload end()
 * @method BusinessUnitDefaultBillingAddressSetMessagePayload at($offset)
 */
class BusinessUnitDefaultBillingAddressSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert BusinessUnitDefaultBillingAddressSetMessagePayload $value
     * @psalm-param BusinessUnitDefaultBillingAddressSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitDefaultBillingAddressSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitDefaultBillingAddressSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitDefaultBillingAddressSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitDefaultBillingAddressSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitDefaultBillingAddressSetMessagePayload $data */
                $data = BusinessUnitDefaultBillingAddressSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
