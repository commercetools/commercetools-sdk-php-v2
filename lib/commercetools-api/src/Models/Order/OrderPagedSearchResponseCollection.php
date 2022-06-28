<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<OrderPagedSearchResponse>
 * @method OrderPagedSearchResponse current()
 * @method OrderPagedSearchResponse end()
 * @method OrderPagedSearchResponse at($offset)
 */
class OrderPagedSearchResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderPagedSearchResponse $value
     * @psalm-param OrderPagedSearchResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderPagedSearchResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderPagedSearchResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderPagedSearchResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderPagedSearchResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderPagedSearchResponse $data */
                $data = OrderPagedSearchResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
