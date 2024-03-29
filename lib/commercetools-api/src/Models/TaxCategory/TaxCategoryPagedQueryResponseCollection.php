<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<TaxCategoryPagedQueryResponse>
 * @method TaxCategoryPagedQueryResponse current()
 * @method TaxCategoryPagedQueryResponse end()
 * @method TaxCategoryPagedQueryResponse at($offset)
 */
class TaxCategoryPagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert TaxCategoryPagedQueryResponse $value
     * @psalm-param TaxCategoryPagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TaxCategoryPagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof TaxCategoryPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TaxCategoryPagedQueryResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?TaxCategoryPagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TaxCategoryPagedQueryResponse $data */
                $data = TaxCategoryPagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
