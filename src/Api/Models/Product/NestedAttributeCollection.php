<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\MapperArraySequence;
use Commercetools\Exception\InvalidArgumentException;

/**
 * @extends MapperArraySequence<NestedAttribute, array<int, \stdClass>>
 * @method NestedAttribute current()
 * @method NestedAttribute end()
 * @method NestedAttribute at($offset)
 */
class NestedAttributeCollection extends MapperArraySequence
{
    /**
     * @psalm-assert NestedAttribute $value
     * @psalm-param NestedAttribute|array<int, \stdClass> $value
     * @throws InvalidArgumentException
     *
     * @return NestedAttributeCollection
     */
    public function add($value)
    {
        if (!$value instanceof NestedAttribute) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?NestedAttribute
     */
    protected function mapper()
    {
        return function (int $index): ?NestedAttribute {
            $data = $this->get($index);
            if (is_array($data)) {
                $data = NestedAttribute::fromArray($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
