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
 * @extends ChangeCollection<UpdateItemShippingAddressChange>
 * @method UpdateItemShippingAddressChange current()
 * @method UpdateItemShippingAddressChange end()
 * @method UpdateItemShippingAddressChange at($offset)
 */
class UpdateItemShippingAddressChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert UpdateItemShippingAddressChange $value
     * @psalm-param UpdateItemShippingAddressChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return UpdateItemShippingAddressChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof UpdateItemShippingAddressChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?UpdateItemShippingAddressChange
     */
    protected function mapper()
    {
        return function (?int $index): ?UpdateItemShippingAddressChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var UpdateItemShippingAddressChange $data */
                $data = UpdateItemShippingAddressChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
