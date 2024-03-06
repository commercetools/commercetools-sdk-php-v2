<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductTailoring;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductTailoringPagedQueryResponse>
 * @method ProductTailoringPagedQueryResponse current()
 * @method ProductTailoringPagedQueryResponse end()
 * @method ProductTailoringPagedQueryResponse at($offset)
 */
class ProductTailoringPagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductTailoringPagedQueryResponse $value
     * @psalm-param ProductTailoringPagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringPagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringPagedQueryResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringPagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringPagedQueryResponse $data */
                $data = ProductTailoringPagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
