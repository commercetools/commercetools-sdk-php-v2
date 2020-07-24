<?php

declare(strict_types=1);

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<Attribute>
 * @method Attribute current()
 * @method Attribute at($offset)
 */
class NestedAttribute extends MapperSequence
{
    /**
     * @psalm-assert Attribute $value
     * @psalm-param Attribute|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return NestedAttribute
     */
    public function add($value)
    {
        if (!$value instanceof Attribute) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Attribute
     */
    protected function mapper()
    {
        return function (int $index): ?Attribute {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AttributeModel::fromStdClass($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
