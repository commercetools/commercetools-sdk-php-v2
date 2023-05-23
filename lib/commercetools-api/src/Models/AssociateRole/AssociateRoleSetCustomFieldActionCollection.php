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
 * @extends AssociateRoleUpdateActionCollection<AssociateRoleSetCustomFieldAction>
 * @method AssociateRoleSetCustomFieldAction current()
 * @method AssociateRoleSetCustomFieldAction end()
 * @method AssociateRoleSetCustomFieldAction at($offset)
 */
class AssociateRoleSetCustomFieldActionCollection extends AssociateRoleUpdateActionCollection
{
    /**
     * @psalm-assert AssociateRoleSetCustomFieldAction $value
     * @psalm-param AssociateRoleSetCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssociateRoleSetCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof AssociateRoleSetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AssociateRoleSetCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?AssociateRoleSetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AssociateRoleSetCustomFieldAction $data */
                $data = AssociateRoleSetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
