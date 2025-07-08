<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<RecurringOrderUpdate>
 * @method RecurringOrderUpdate current()
 * @method RecurringOrderUpdate end()
 * @method RecurringOrderUpdate at($offset)
 */
class RecurringOrderUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert RecurringOrderUpdate $value
     * @psalm-param RecurringOrderUpdate|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderUpdateCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderUpdate
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderUpdate $data */
                $data = RecurringOrderUpdateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
