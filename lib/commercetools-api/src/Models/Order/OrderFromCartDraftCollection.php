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
 * @extends MapperSequence<OrderFromCartDraft>
 * @method OrderFromCartDraft current()
 * @method OrderFromCartDraft end()
 * @method OrderFromCartDraft at($offset)
 */
class OrderFromCartDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderFromCartDraft $value
     * @psalm-param OrderFromCartDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderFromCartDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderFromCartDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderFromCartDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderFromCartDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderFromCartDraft $data */
                $data = OrderFromCartDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
