<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSelection;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductVariantSelectionType>
 * @method ProductVariantSelectionType current()
 * @method ProductVariantSelectionType end()
 * @method ProductVariantSelectionType at($offset)
 */
class ProductVariantSelectionTypeCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductVariantSelectionType $value
     * @psalm-param ProductVariantSelectionType|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductVariantSelectionTypeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductVariantSelectionType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductVariantSelectionType
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductVariantSelectionType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductVariantSelectionType $data */
                $data = ProductVariantSelectionTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
