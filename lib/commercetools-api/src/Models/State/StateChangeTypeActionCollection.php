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
 * @extends StateUpdateActionCollection<StateChangeTypeAction>
 * @method StateChangeTypeAction current()
 * @method StateChangeTypeAction at($offset)
 */
class StateChangeTypeActionCollection extends StateUpdateActionCollection
{
    /**
     * @psalm-assert StateChangeTypeAction $value
     * @psalm-param StateChangeTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StateChangeTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StateChangeTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StateChangeTypeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StateChangeTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StateChangeTypeAction $data */
                $data = StateChangeTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
