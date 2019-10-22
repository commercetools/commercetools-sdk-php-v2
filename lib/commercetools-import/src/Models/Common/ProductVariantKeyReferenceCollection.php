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
 * @extends MapperSequence<ProductVariantKeyReference>
 *
 * @method ProductVariantKeyReference current()
 * @method ProductVariantKeyReference at($offset)
 */
class ProductVariantKeyReferenceCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductVariantKeyReference $value
     * @psalm-param ProductVariantKeyReference|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductVariantKeyReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductVariantKeyReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductVariantKeyReference
     */
    protected function mapper()
    {
        return function (int $index): ?ProductVariantKeyReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductVariantKeyReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
