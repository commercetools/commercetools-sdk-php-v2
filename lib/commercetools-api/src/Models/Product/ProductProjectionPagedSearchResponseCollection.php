<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductProjectionPagedSearchResponse>
 * @method ProductProjectionPagedSearchResponse current()
 * @method ProductProjectionPagedSearchResponse at($offset)
 */
class ProductProjectionPagedSearchResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductProjectionPagedSearchResponse $value
     * @psalm-param ProductProjectionPagedSearchResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductProjectionPagedSearchResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductProjectionPagedSearchResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductProjectionPagedSearchResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductProjectionPagedSearchResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductProjectionPagedSearchResponse $data */
                $data = ProductProjectionPagedSearchResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
