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
 * @extends MapperSequence<ProductPagedQueryResponse>
 * @method ProductPagedQueryResponse current()
 * @method ProductPagedQueryResponse at($offset)
 */
class ProductPagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductPagedQueryResponse $value
     * @psalm-param ProductPagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductPagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductPagedQueryResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductPagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductPagedQueryResponse $data */
                $data = ProductPagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
