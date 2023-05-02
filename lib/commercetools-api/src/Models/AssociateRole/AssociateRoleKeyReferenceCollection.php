<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\AssociateRole;

use Commercetools\Api\Models\Common\KeyReferenceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends KeyReferenceCollection<AssociateRoleKeyReference>
 * @method AssociateRoleKeyReference current()
 * @method AssociateRoleKeyReference end()
 * @method AssociateRoleKeyReference at($offset)
 */
class AssociateRoleKeyReferenceCollection extends KeyReferenceCollection
{
    /**
     * @psalm-assert AssociateRoleKeyReference $value
     * @psalm-param AssociateRoleKeyReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssociateRoleKeyReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof AssociateRoleKeyReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AssociateRoleKeyReference
     */
    protected function mapper()
    {
        return function (?int $index): ?AssociateRoleKeyReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AssociateRoleKeyReference $data */
                $data = AssociateRoleKeyReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
