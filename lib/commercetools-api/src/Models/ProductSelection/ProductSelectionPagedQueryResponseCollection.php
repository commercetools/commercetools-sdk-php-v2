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
 * @extends MapperSequence<ProductSelectionPagedQueryResponse>
 * @method ProductSelectionPagedQueryResponse current()
 * @method ProductSelectionPagedQueryResponse end()
 * @method ProductSelectionPagedQueryResponse at($offset)
 */
class ProductSelectionPagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductSelectionPagedQueryResponse $value
     * @psalm-param ProductSelectionPagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSelectionPagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSelectionPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSelectionPagedQueryResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSelectionPagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSelectionPagedQueryResponse $data */
                $data = ProductSelectionPagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
