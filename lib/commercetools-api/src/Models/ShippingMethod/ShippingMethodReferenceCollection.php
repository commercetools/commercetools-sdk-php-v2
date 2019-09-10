<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ShippingMethodReference>
 * @method ShippingMethodReference current()
 * @method ShippingMethodReference at($offset)
 */
class ShippingMethodReferenceCollection extends MapperSequence
{
    /**
     * @psalm-assert ShippingMethodReference $value
     * @psalm-param ShippingMethodReference|stdClass $value
     * @return ShippingMethodReferenceCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethodReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethodReference
     */
    protected function mapper()
    {
        return function(int $index): ?ShippingMethodReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ShippingMethodReferenceModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}