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
 * @extends AssociateRoleUpdateActionCollection<AssociateRoleRemovePermissionAction>
 * @method AssociateRoleRemovePermissionAction current()
 * @method AssociateRoleRemovePermissionAction end()
 * @method AssociateRoleRemovePermissionAction at($offset)
 */
class AssociateRoleRemovePermissionActionCollection extends AssociateRoleUpdateActionCollection
{
    /**
     * @psalm-assert AssociateRoleRemovePermissionAction $value
     * @psalm-param AssociateRoleRemovePermissionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssociateRoleRemovePermissionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof AssociateRoleRemovePermissionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AssociateRoleRemovePermissionAction
     */
    protected function mapper()
    {
        return function (?int $index): ?AssociateRoleRemovePermissionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AssociateRoleRemovePermissionAction $data */
                $data = AssociateRoleRemovePermissionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
