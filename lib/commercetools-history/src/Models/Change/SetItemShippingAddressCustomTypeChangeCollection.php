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
 * @extends ChangeCollection<SetItemShippingAddressCustomTypeChange>
 * @method SetItemShippingAddressCustomTypeChange current()
 * @method SetItemShippingAddressCustomTypeChange end()
 * @method SetItemShippingAddressCustomTypeChange at($offset)
 */
class SetItemShippingAddressCustomTypeChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetItemShippingAddressCustomTypeChange $value
     * @psalm-param SetItemShippingAddressCustomTypeChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetItemShippingAddressCustomTypeChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetItemShippingAddressCustomTypeChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetItemShippingAddressCustomTypeChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetItemShippingAddressCustomTypeChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetItemShippingAddressCustomTypeChange $data */
                $data = SetItemShippingAddressCustomTypeChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
