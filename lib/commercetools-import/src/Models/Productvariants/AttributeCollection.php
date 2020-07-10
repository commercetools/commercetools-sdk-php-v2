<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Productvariants;

use Shared\Base\MapperSequence;
use Shared\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<Attribute>
 * @method Attribute current()
 * @method Attribute at($offset)
 */
class AttributeCollection extends MapperSequence
{
    /**
     * @psalm-assert Attribute $value
     * @psalm-param Attribute|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributeCollection
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
                $data = AttributeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
