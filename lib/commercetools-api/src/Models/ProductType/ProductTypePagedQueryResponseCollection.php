<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductTypePagedQueryResponse>
 * @method ProductTypePagedQueryResponse current()
 * @method ProductTypePagedQueryResponse at($offset)
 */
class ProductTypePagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductTypePagedQueryResponse $value
     * @psalm-param ProductTypePagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTypePagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTypePagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTypePagedQueryResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTypePagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTypePagedQueryResponse $data */
                $data = ProductTypePagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
