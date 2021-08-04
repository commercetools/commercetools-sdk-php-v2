<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\State;

use Commercetools\Api\Models\State\StateUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends StateUpdateActionCollection<StateSetTransitionsAction>
 * @method StateSetTransitionsAction current()
 * @method StateSetTransitionsAction at($offset)
 */
class StateSetTransitionsActionCollection extends StateUpdateActionCollection
{
    /**
     * @psalm-assert StateSetTransitionsAction $value
     * @psalm-param StateSetTransitionsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StateSetTransitionsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StateSetTransitionsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StateSetTransitionsAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StateSetTransitionsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StateSetTransitionsAction $data */
                $data = StateSetTransitionsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
