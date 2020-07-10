<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Common;

use Shared\Base\MapperSequence;
use Shared\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ShippingMethodKeyReference>
 * @method ShippingMethodKeyReference current()
 * @method ShippingMethodKeyReference at($offset)
 */
class ShippingMethodKeyReferenceCollection extends MapperSequence
{
    /**
     * @psalm-assert ShippingMethodKeyReference $value
     * @psalm-param ShippingMethodKeyReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingMethodKeyReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethodKeyReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethodKeyReference
     */
    protected function mapper()
    {
        return function (int $index): ?ShippingMethodKeyReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ShippingMethodKeyReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
