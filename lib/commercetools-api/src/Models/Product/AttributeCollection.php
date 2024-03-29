<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<Attribute>
 * @method Attribute current()
 * @method Attribute end()
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
        return function (?int $index): ?Attribute {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var Attribute $data */
                $data = AttributeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
