<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductSearchMatchingVariant>
 * @method ProductSearchMatchingVariant current()
 * @method ProductSearchMatchingVariant end()
 * @method ProductSearchMatchingVariant at($offset)
 */
class ProductSearchMatchingVariantCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductSearchMatchingVariant $value
     * @psalm-param ProductSearchMatchingVariant|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchMatchingVariantCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchMatchingVariant) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchMatchingVariant
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchMatchingVariant {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchMatchingVariant $data */
                $data = ProductSearchMatchingVariantModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
