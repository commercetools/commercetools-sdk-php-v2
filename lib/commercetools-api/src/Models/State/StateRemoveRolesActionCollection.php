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
 * @extends StateUpdateActionCollection<StateRemoveRolesAction>
 * @method StateRemoveRolesAction current()
 * @method StateRemoveRolesAction at($offset)
 */
class StateRemoveRolesActionCollection extends StateUpdateActionCollection
{
    /**
     * @psalm-assert StateRemoveRolesAction $value
     * @psalm-param StateRemoveRolesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StateRemoveRolesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StateRemoveRolesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StateRemoveRolesAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StateRemoveRolesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StateRemoveRolesAction $data */
                $data = StateRemoveRolesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
