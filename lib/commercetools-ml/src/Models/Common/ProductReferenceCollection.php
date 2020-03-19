<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductReference>
 * @method ProductReference current()
 * @method ProductReference at($offset)
 */
class ProductReferenceCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductReference $value
     * @psalm-param ProductReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductReference
     */
    protected function mapper()
    {
        return function (int $index): ?ProductReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
