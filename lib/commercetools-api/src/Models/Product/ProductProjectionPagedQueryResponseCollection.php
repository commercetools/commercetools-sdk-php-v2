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
 * @extends MapperSequence<ProductProjectionPagedQueryResponse>
 * @method ProductProjectionPagedQueryResponse current()
 * @method ProductProjectionPagedQueryResponse at($offset)
 */
class ProductProjectionPagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductProjectionPagedQueryResponse $value
     * @psalm-param ProductProjectionPagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductProjectionPagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductProjectionPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductProjectionPagedQueryResponse
     */
    protected function mapper()
    {
        return function (int $index): ?ProductProjectionPagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductProjectionPagedQueryResponse $data */
                $data = ProductProjectionPagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
