<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\AssociateRole;

use Commercetools\Api\Models\Common\BaseResourceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends BaseResourceCollection<AssociateRole>
 * @method AssociateRole current()
 * @method AssociateRole end()
 * @method AssociateRole at($offset)
 */
class AssociateRoleCollection extends BaseResourceCollection
{
    /**
     * @psalm-assert AssociateRole $value
     * @psalm-param AssociateRole|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssociateRoleCollection
     */
    public function add($value)
    {
        if (!$value instanceof AssociateRole) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AssociateRole
     */
    protected function mapper()
    {
        return function (?int $index): ?AssociateRole {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AssociateRole $data */
                $data = AssociateRoleModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
