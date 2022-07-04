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
 * @extends MapperSequence<OrderFromQuoteDraft>
 * @method OrderFromQuoteDraft current()
 * @method OrderFromQuoteDraft end()
 * @method OrderFromQuoteDraft at($offset)
 */
class OrderFromQuoteDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderFromQuoteDraft $value
     * @psalm-param OrderFromQuoteDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderFromQuoteDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderFromQuoteDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderFromQuoteDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderFromQuoteDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderFromQuoteDraft $data */
                $data = OrderFromQuoteDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
