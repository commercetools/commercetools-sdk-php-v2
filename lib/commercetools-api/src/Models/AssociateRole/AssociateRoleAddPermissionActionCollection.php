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
 * @extends AssociateRoleUpdateActionCollection<AssociateRoleAddPermissionAction>
 * @method AssociateRoleAddPermissionAction current()
 * @method AssociateRoleAddPermissionAction end()
 * @method AssociateRoleAddPermissionAction at($offset)
 */
class AssociateRoleAddPermissionActionCollection extends AssociateRoleUpdateActionCollection
{
    /**
     * @psalm-assert AssociateRoleAddPermissionAction $value
     * @psalm-param AssociateRoleAddPermissionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssociateRoleAddPermissionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof AssociateRoleAddPermissionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AssociateRoleAddPermissionAction
     */
    protected function mapper()
    {
        return function (?int $index): ?AssociateRoleAddPermissionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AssociateRoleAddPermissionAction $data */
                $data = AssociateRoleAddPermissionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
