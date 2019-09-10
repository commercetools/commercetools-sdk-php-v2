<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Project;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CartValueType>
 * @method CartValueType current()
 * @method CartValueType at($offset)
 */
class CartValueTypeCollection extends MapperSequence
{
    /**
     * @psalm-assert CartValueType $value
     * @psalm-param CartValueType|stdClass $value
     * @return CartValueTypeCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CartValueType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartValueType
     */
    protected function mapper()
    {
        return function(int $index): ?CartValueType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartValueTypeModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}