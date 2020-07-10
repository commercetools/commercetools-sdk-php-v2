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
 * @extends MapperSequence<ProductVariantPatch>
 * @method ProductVariantPatch current()
 * @method ProductVariantPatch at($offset)
 */
class ProductVariantPatchCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductVariantPatch $value
     * @psalm-param ProductVariantPatch|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductVariantPatchCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductVariantPatch) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductVariantPatch
     */
    protected function mapper()
    {
        return function (int $index): ?ProductVariantPatch {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductVariantPatchModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
