<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Common;

use Shared\Base\MapperSequence;
use Shared\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductKeyReference>
 * @method ProductKeyReference current()
 * @method ProductKeyReference at($offset)
 */
class ProductKeyReferenceCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductKeyReference $value
     * @psalm-param ProductKeyReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductKeyReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductKeyReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductKeyReference
     */
    protected function mapper()
    {
        return function (int $index): ?ProductKeyReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductKeyReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
