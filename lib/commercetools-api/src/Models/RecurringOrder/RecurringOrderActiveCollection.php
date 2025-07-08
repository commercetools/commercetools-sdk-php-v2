<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Api\Models\RecurringOrder\RecurringOrderStateDraftCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends RecurringOrderStateDraftCollection<RecurringOrderActive>
 * @method RecurringOrderActive current()
 * @method RecurringOrderActive end()
 * @method RecurringOrderActive at($offset)
 */
class RecurringOrderActiveCollection extends RecurringOrderStateDraftCollection
{
    /**
     * @psalm-assert RecurringOrderActive $value
     * @psalm-param RecurringOrderActive|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderActiveCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderActive) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderActive
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderActive {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderActive $data */
                $data = RecurringOrderActiveModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
