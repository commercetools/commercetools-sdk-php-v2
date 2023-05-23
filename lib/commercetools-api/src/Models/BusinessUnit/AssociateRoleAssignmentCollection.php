<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<AssociateRoleAssignment>
 * @method AssociateRoleAssignment current()
 * @method AssociateRoleAssignment end()
 * @method AssociateRoleAssignment at($offset)
 */
class AssociateRoleAssignmentCollection extends MapperSequence
{
    /**
     * @psalm-assert AssociateRoleAssignment $value
     * @psalm-param AssociateRoleAssignment|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssociateRoleAssignmentCollection
     */
    public function add($value)
    {
        if (!$value instanceof AssociateRoleAssignment) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AssociateRoleAssignment
     */
    protected function mapper()
    {
        return function (?int $index): ?AssociateRoleAssignment {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AssociateRoleAssignment $data */
                $data = AssociateRoleAssignmentModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
