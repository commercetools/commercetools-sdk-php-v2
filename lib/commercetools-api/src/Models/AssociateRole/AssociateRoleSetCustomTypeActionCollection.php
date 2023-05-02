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
 * @extends AssociateRoleUpdateActionCollection<AssociateRoleSetCustomTypeAction>
 * @method AssociateRoleSetCustomTypeAction current()
 * @method AssociateRoleSetCustomTypeAction end()
 * @method AssociateRoleSetCustomTypeAction at($offset)
 */
class AssociateRoleSetCustomTypeActionCollection extends AssociateRoleUpdateActionCollection
{
    /**
     * @psalm-assert AssociateRoleSetCustomTypeAction $value
     * @psalm-param AssociateRoleSetCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssociateRoleSetCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof AssociateRoleSetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AssociateRoleSetCustomTypeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?AssociateRoleSetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AssociateRoleSetCustomTypeAction $data */
                $data = AssociateRoleSetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
