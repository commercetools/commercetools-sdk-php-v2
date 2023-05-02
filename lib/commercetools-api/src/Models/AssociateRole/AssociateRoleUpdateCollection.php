<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\AssociateRole;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<AssociateRoleUpdate>
 * @method AssociateRoleUpdate current()
 * @method AssociateRoleUpdate end()
 * @method AssociateRoleUpdate at($offset)
 */
class AssociateRoleUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert AssociateRoleUpdate $value
     * @psalm-param AssociateRoleUpdate|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssociateRoleUpdateCollection
     */
    public function add($value)
    {
        if (!$value instanceof AssociateRoleUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AssociateRoleUpdate
     */
    protected function mapper()
    {
        return function (?int $index): ?AssociateRoleUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AssociateRoleUpdate $data */
                $data = AssociateRoleUpdateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
