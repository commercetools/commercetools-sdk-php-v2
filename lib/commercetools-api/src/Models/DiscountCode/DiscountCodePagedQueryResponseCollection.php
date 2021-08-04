<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<DiscountCodePagedQueryResponse>
 * @method DiscountCodePagedQueryResponse current()
 * @method DiscountCodePagedQueryResponse end()
 * @method DiscountCodePagedQueryResponse at($offset)
 */
class DiscountCodePagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert DiscountCodePagedQueryResponse $value
     * @psalm-param DiscountCodePagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountCodePagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountCodePagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountCodePagedQueryResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?DiscountCodePagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountCodePagedQueryResponse $data */
                $data = DiscountCodePagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
