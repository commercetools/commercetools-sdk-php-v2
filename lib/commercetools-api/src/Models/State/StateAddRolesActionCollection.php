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
 * @extends StateUpdateActionCollection<StateAddRolesAction>
 * @method StateAddRolesAction current()
 * @method StateAddRolesAction at($offset)
 */
class StateAddRolesActionCollection extends StateUpdateActionCollection
{
    /**
     * @psalm-assert StateAddRolesAction $value
     * @psalm-param StateAddRolesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StateAddRolesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StateAddRolesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StateAddRolesAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StateAddRolesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StateAddRolesAction $data */
                $data = StateAddRolesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
