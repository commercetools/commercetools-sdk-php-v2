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
 * @template T of AssociateRoleUpdateAction
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method AssociateRoleUpdateAction current()
 * @method AssociateRoleUpdateAction end()
 * @method AssociateRoleUpdateAction at($offset)
 */
class AssociateRoleUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssociateRoleUpdateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof AssociateRoleUpdateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?T
     */
    protected function mapper()
    {
        return function (?int $index): ?AssociateRoleUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = AssociateRoleUpdateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
