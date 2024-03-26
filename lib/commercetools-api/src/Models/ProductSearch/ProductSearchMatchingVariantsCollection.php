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
 * @extends MapperSequence<ProductSearchMatchingVariants>
 * @method ProductSearchMatchingVariants current()
 * @method ProductSearchMatchingVariants end()
 * @method ProductSearchMatchingVariants at($offset)
 */
class ProductSearchMatchingVariantsCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductSearchMatchingVariants $value
     * @psalm-param ProductSearchMatchingVariants|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchMatchingVariantsCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchMatchingVariants) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchMatchingVariants
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchMatchingVariants {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchMatchingVariants $data */
                $data = ProductSearchMatchingVariantsModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
