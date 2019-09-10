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
 * @extends MapperSequence<AttributeNumberType>
 * @method AttributeNumberType current()
 * @method AttributeNumberType at($offset)
 */
class AttributeNumberTypeCollection extends MapperSequence
{
    /**
     * @psalm-assert AttributeNumberType $value
     * @psalm-param AttributeNumberType|stdClass $value
     * @return AttributeNumberTypeCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof AttributeNumberType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AttributeNumberType
     */
    protected function mapper()
    {
        return function(int $index): ?AttributeNumberType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AttributeNumberTypeModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}