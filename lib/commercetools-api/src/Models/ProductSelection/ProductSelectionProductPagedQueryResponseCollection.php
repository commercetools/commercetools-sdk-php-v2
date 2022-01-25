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
 * @extends MapperSequence<ProductSelectionProductPagedQueryResponse>
 * @method ProductSelectionProductPagedQueryResponse current()
 * @method ProductSelectionProductPagedQueryResponse end()
 * @method ProductSelectionProductPagedQueryResponse at($offset)
 */
class ProductSelectionProductPagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductSelectionProductPagedQueryResponse $value
     * @psalm-param ProductSelectionProductPagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSelectionProductPagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSelectionProductPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSelectionProductPagedQueryResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSelectionProductPagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSelectionProductPagedQueryResponse $data */
                $data = ProductSelectionProductPagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
