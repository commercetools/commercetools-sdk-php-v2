<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Api\Models\RecurringOrder\RecurringOrderScopeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends RecurringOrderScopeCollection<AnyOrder>
 * @method AnyOrder current()
 * @method AnyOrder end()
 * @method AnyOrder at($offset)
 */
class AnyOrderCollection extends RecurringOrderScopeCollection
{
    /**
     * @psalm-assert AnyOrder $value
     * @psalm-param AnyOrder|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AnyOrderCollection
     */
    public function add($value)
    {
        if (!$value instanceof AnyOrder) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AnyOrder
     */
    protected function mapper()
    {
        return function (?int $index): ?AnyOrder {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AnyOrder $data */
                $data = AnyOrderModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
