<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\AssociateRole;

use Commercetools\Api\Models\Common\ReferenceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ReferenceCollection<AssociateRoleReference>
 * @method AssociateRoleReference current()
 * @method AssociateRoleReference end()
 * @method AssociateRoleReference at($offset)
 */
class AssociateRoleReferenceCollection extends ReferenceCollection
{
    /**
     * @psalm-assert AssociateRoleReference $value
     * @psalm-param AssociateRoleReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssociateRoleReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof AssociateRoleReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AssociateRoleReference
     */
    protected function mapper()
    {
        return function (?int $index): ?AssociateRoleReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AssociateRoleReference $data */
                $data = AssociateRoleReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
