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
 * @extends AssociateRoleUpdateActionCollection<AssociateRoleSetPermissionsAction>
 * @method AssociateRoleSetPermissionsAction current()
 * @method AssociateRoleSetPermissionsAction end()
 * @method AssociateRoleSetPermissionsAction at($offset)
 */
class AssociateRoleSetPermissionsActionCollection extends AssociateRoleUpdateActionCollection
{
    /**
     * @psalm-assert AssociateRoleSetPermissionsAction $value
     * @psalm-param AssociateRoleSetPermissionsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssociateRoleSetPermissionsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof AssociateRoleSetPermissionsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AssociateRoleSetPermissionsAction
     */
    protected function mapper()
    {
        return function (?int $index): ?AssociateRoleSetPermissionsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AssociateRoleSetPermissionsAction $data */
                $data = AssociateRoleSetPermissionsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
