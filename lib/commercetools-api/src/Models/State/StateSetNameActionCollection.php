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
 * @extends StateUpdateActionCollection<StateSetNameAction>
 * @method StateSetNameAction current()
 * @method StateSetNameAction at($offset)
 */
class StateSetNameActionCollection extends StateUpdateActionCollection
{
    /**
     * @psalm-assert StateSetNameAction $value
     * @psalm-param StateSetNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StateSetNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StateSetNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StateSetNameAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StateSetNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StateSetNameAction $data */
                $data = StateSetNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
