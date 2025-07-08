<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Api\Models\RecurringOrder\RecurringOrderUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends RecurringOrderUpdateActionCollection<RecurringOrderSetOrderSkipConfigurationAction>
 * @method RecurringOrderSetOrderSkipConfigurationAction current()
 * @method RecurringOrderSetOrderSkipConfigurationAction end()
 * @method RecurringOrderSetOrderSkipConfigurationAction at($offset)
 */
class RecurringOrderSetOrderSkipConfigurationActionCollection extends RecurringOrderUpdateActionCollection
{
    /**
     * @psalm-assert RecurringOrderSetOrderSkipConfigurationAction $value
     * @psalm-param RecurringOrderSetOrderSkipConfigurationAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderSetOrderSkipConfigurationActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderSetOrderSkipConfigurationAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderSetOrderSkipConfigurationAction
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderSetOrderSkipConfigurationAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderSetOrderSkipConfigurationAction $data */
                $data = RecurringOrderSetOrderSkipConfigurationActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
