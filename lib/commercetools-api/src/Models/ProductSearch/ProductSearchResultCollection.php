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
 * @extends MapperSequence<ProductSearchResult>
 * @method ProductSearchResult current()
 * @method ProductSearchResult end()
 * @method ProductSearchResult at($offset)
 */
class ProductSearchResultCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductSearchResult $value
     * @psalm-param ProductSearchResult|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchResultCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchResult) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchResult
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchResult {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchResult $data */
                $data = ProductSearchResultModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
