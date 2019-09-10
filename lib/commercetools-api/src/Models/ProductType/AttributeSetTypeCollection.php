<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<AttributeSetType>
 * @method AttributeSetType current()
 * @method AttributeSetType at($offset)
 */
class AttributeSetTypeCollection extends MapperSequence
{
    /**
     * @psalm-assert AttributeSetType $value
     * @psalm-param AttributeSetType|stdClass $value
     * @return AttributeSetTypeCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof AttributeSetType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AttributeSetType
     */
    protected function mapper()
    {
        return function(int $index): ?AttributeSetType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AttributeSetTypeModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}