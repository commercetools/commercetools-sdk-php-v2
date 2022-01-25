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
 * @extends MapperSequence<ProductsInStorePagedQueryResponse>
 * @method ProductsInStorePagedQueryResponse current()
 * @method ProductsInStorePagedQueryResponse end()
 * @method ProductsInStorePagedQueryResponse at($offset)
 */
class ProductsInStorePagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductsInStorePagedQueryResponse $value
     * @psalm-param ProductsInStorePagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductsInStorePagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductsInStorePagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductsInStorePagedQueryResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductsInStorePagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductsInStorePagedQueryResponse $data */
                $data = ProductsInStorePagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
