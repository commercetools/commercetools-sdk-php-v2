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
 * @extends MapperSequence<OrderSearchRequest>
 * @method OrderSearchRequest current()
 * @method OrderSearchRequest end()
 * @method OrderSearchRequest at($offset)
 */
class OrderSearchRequestCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderSearchRequest $value
     * @psalm-param OrderSearchRequest|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSearchRequestCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSearchRequest) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSearchRequest
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderSearchRequest {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSearchRequest $data */
                $data = OrderSearchRequestModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
