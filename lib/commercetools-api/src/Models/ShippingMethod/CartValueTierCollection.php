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
 * @extends MapperSequence<CartValueTier>
 * @method CartValueTier current()
 * @method CartValueTier at($offset)
 */
class CartValueTierCollection extends MapperSequence
{
    /**
     * @psalm-assert CartValueTier $value
     * @psalm-param CartValueTier|stdClass $value
     * @return CartValueTierCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CartValueTier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartValueTier
     */
    protected function mapper()
    {
        return function(int $index): ?CartValueTier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartValueTierModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}