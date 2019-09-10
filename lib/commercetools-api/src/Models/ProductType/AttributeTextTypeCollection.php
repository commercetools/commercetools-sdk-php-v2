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
 * @extends MapperSequence<AttributeTextType>
 * @method AttributeTextType current()
 * @method AttributeTextType at($offset)
 */
class AttributeTextTypeCollection extends MapperSequence
{
    /**
     * @psalm-assert AttributeTextType $value
     * @psalm-param AttributeTextType|stdClass $value
     * @return AttributeTextTypeCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof AttributeTextType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AttributeTextType
     */
    protected function mapper()
    {
        return function(int $index): ?AttributeTextType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AttributeTextTypeModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}