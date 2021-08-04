<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\History\Models\Change\ChangeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ChangeCollection<SetDeliveryAddressChange>
 * @method SetDeliveryAddressChange current()
 * @method SetDeliveryAddressChange end()
 * @method SetDeliveryAddressChange at($offset)
 */
class SetDeliveryAddressChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetDeliveryAddressChange $value
     * @psalm-param SetDeliveryAddressChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetDeliveryAddressChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetDeliveryAddressChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetDeliveryAddressChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetDeliveryAddressChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetDeliveryAddressChange $data */
                $data = SetDeliveryAddressChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
