<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\AssociateRole;

use Commercetools\Api\Models\AssociateRole\AssociateRoleUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends AssociateRoleUpdateActionCollection<AssociateRoleSetNameAction>
 * @method AssociateRoleSetNameAction current()
 * @method AssociateRoleSetNameAction end()
 * @method AssociateRoleSetNameAction at($offset)
 */
class AssociateRoleSetNameActionCollection extends AssociateRoleUpdateActionCollection
{
    /**
     * @psalm-assert AssociateRoleSetNameAction $value
     * @psalm-param AssociateRoleSetNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssociateRoleSetNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof AssociateRoleSetNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AssociateRoleSetNameAction
     */
    protected function mapper()
    {
        return function (?int $index): ?AssociateRoleSetNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AssociateRoleSetNameAction $data */
                $data = AssociateRoleSetNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
