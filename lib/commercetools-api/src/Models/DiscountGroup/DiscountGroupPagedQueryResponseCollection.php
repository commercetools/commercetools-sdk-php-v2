<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountGroup;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<DiscountGroupPagedQueryResponse>
 * @method DiscountGroupPagedQueryResponse current()
 * @method DiscountGroupPagedQueryResponse end()
 * @method DiscountGroupPagedQueryResponse at($offset)
 */
class DiscountGroupPagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert DiscountGroupPagedQueryResponse $value
     * @psalm-param DiscountGroupPagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountGroupPagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountGroupPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountGroupPagedQueryResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?DiscountGroupPagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountGroupPagedQueryResponse $data */
                $data = DiscountGroupPagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
