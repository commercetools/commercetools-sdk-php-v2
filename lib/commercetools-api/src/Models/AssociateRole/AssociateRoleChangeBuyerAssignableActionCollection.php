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
 * @extends AssociateRoleUpdateActionCollection<AssociateRoleChangeBuyerAssignableAction>
 * @method AssociateRoleChangeBuyerAssignableAction current()
 * @method AssociateRoleChangeBuyerAssignableAction end()
 * @method AssociateRoleChangeBuyerAssignableAction at($offset)
 */
class AssociateRoleChangeBuyerAssignableActionCollection extends AssociateRoleUpdateActionCollection
{
    /**
     * @psalm-assert AssociateRoleChangeBuyerAssignableAction $value
     * @psalm-param AssociateRoleChangeBuyerAssignableAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssociateRoleChangeBuyerAssignableActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof AssociateRoleChangeBuyerAssignableAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AssociateRoleChangeBuyerAssignableAction
     */
    protected function mapper()
    {
        return function (?int $index): ?AssociateRoleChangeBuyerAssignableAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AssociateRoleChangeBuyerAssignableAction $data */
                $data = AssociateRoleChangeBuyerAssignableActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
