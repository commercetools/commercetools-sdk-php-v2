<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Api\Models\Common\BaseResourceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends BaseResourceCollection<RecurringOrder>
 * @method RecurringOrder current()
 * @method RecurringOrder end()
 * @method RecurringOrder at($offset)
 */
class RecurringOrderCollection extends BaseResourceCollection
{
    /**
     * @psalm-assert RecurringOrder $value
     * @psalm-param RecurringOrder|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrder) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrder
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrder {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrder $data */
                $data = RecurringOrderModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
