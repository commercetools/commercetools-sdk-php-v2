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
 * @extends MapperSequence<AssociateRoleDraft>
 * @method AssociateRoleDraft current()
 * @method AssociateRoleDraft end()
 * @method AssociateRoleDraft at($offset)
 */
class AssociateRoleDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert AssociateRoleDraft $value
     * @psalm-param AssociateRoleDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssociateRoleDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof AssociateRoleDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AssociateRoleDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?AssociateRoleDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AssociateRoleDraft $data */
                $data = AssociateRoleDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
