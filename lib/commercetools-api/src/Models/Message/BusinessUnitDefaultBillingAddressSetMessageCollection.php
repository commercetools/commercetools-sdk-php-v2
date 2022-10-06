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
 * @extends MessageCollection<BusinessUnitDefaultBillingAddressSetMessage>
 * @method BusinessUnitDefaultBillingAddressSetMessage current()
 * @method BusinessUnitDefaultBillingAddressSetMessage end()
 * @method BusinessUnitDefaultBillingAddressSetMessage at($offset)
 */
class BusinessUnitDefaultBillingAddressSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert BusinessUnitDefaultBillingAddressSetMessage $value
     * @psalm-param BusinessUnitDefaultBillingAddressSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitDefaultBillingAddressSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitDefaultBillingAddressSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitDefaultBillingAddressSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitDefaultBillingAddressSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitDefaultBillingAddressSetMessage $data */
                $data = BusinessUnitDefaultBillingAddressSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
