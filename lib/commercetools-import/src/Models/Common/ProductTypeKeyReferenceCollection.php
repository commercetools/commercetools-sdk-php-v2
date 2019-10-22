<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductTypeKeyReference>
 *
 * @method ProductTypeKeyReference current()
 * @method ProductTypeKeyReference at($offset)
 */
class ProductTypeKeyReferenceCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductTypeKeyReference $value
     * @psalm-param ProductTypeKeyReference|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductTypeKeyReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTypeKeyReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTypeKeyReference
     */
    protected function mapper()
    {
        return function (int $index): ?ProductTypeKeyReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductTypeKeyReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
