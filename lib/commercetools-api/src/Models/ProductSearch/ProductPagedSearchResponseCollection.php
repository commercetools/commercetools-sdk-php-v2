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
 * @extends MapperSequence<ProductPagedSearchResponse>
 * @method ProductPagedSearchResponse current()
 * @method ProductPagedSearchResponse end()
 * @method ProductPagedSearchResponse at($offset)
 */
class ProductPagedSearchResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductPagedSearchResponse $value
     * @psalm-param ProductPagedSearchResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductPagedSearchResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductPagedSearchResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductPagedSearchResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductPagedSearchResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductPagedSearchResponse $data */
                $data = ProductPagedSearchResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
