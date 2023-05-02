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
 * @extends MapperSequence<InheritedAssociateRoleAssignment>
 * @method InheritedAssociateRoleAssignment current()
 * @method InheritedAssociateRoleAssignment end()
 * @method InheritedAssociateRoleAssignment at($offset)
 */
class InheritedAssociateRoleAssignmentCollection extends MapperSequence
{
    /**
     * @psalm-assert InheritedAssociateRoleAssignment $value
     * @psalm-param InheritedAssociateRoleAssignment|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InheritedAssociateRoleAssignmentCollection
     */
    public function add($value)
    {
        if (!$value instanceof InheritedAssociateRoleAssignment) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InheritedAssociateRoleAssignment
     */
    protected function mapper()
    {
        return function (?int $index): ?InheritedAssociateRoleAssignment {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InheritedAssociateRoleAssignment $data */
                $data = InheritedAssociateRoleAssignmentModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
