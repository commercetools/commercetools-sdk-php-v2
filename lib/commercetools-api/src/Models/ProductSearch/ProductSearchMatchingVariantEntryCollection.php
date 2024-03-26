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
 * @extends MapperSequence<ProductSearchMatchingVariantEntry>
 * @method ProductSearchMatchingVariantEntry current()
 * @method ProductSearchMatchingVariantEntry end()
 * @method ProductSearchMatchingVariantEntry at($offset)
 */
class ProductSearchMatchingVariantEntryCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductSearchMatchingVariantEntry $value
     * @psalm-param ProductSearchMatchingVariantEntry|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchMatchingVariantEntryCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchMatchingVariantEntry) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchMatchingVariantEntry
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchMatchingVariantEntry {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchMatchingVariantEntry $data */
                $data = ProductSearchMatchingVariantEntryModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
