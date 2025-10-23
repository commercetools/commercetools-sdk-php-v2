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
 * @extends ChangeCollection<SetDeliveryAddressCustomTypeChange>
 * @method SetDeliveryAddressCustomTypeChange current()
 * @method SetDeliveryAddressCustomTypeChange end()
 * @method SetDeliveryAddressCustomTypeChange at($offset)
 */
class SetDeliveryAddressCustomTypeChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetDeliveryAddressCustomTypeChange $value
     * @psalm-param SetDeliveryAddressCustomTypeChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetDeliveryAddressCustomTypeChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetDeliveryAddressCustomTypeChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetDeliveryAddressCustomTypeChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetDeliveryAddressCustomTypeChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetDeliveryAddressCustomTypeChange $data */
                $data = SetDeliveryAddressCustomTypeChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
