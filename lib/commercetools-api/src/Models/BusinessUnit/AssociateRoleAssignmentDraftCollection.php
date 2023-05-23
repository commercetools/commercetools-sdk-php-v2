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
 * @extends MapperSequence<AssociateRoleAssignmentDraft>
 * @method AssociateRoleAssignmentDraft current()
 * @method AssociateRoleAssignmentDraft end()
 * @method AssociateRoleAssignmentDraft at($offset)
 */
class AssociateRoleAssignmentDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert AssociateRoleAssignmentDraft $value
     * @psalm-param AssociateRoleAssignmentDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssociateRoleAssignmentDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof AssociateRoleAssignmentDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AssociateRoleAssignmentDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?AssociateRoleAssignmentDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AssociateRoleAssignmentDraft $data */
                $data = AssociateRoleAssignmentDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
