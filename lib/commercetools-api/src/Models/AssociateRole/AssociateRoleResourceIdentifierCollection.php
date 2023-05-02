<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\AssociateRole;

use Commercetools\Api\Models\Common\ResourceIdentifierCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ResourceIdentifierCollection<AssociateRoleResourceIdentifier>
 * @method AssociateRoleResourceIdentifier current()
 * @method AssociateRoleResourceIdentifier end()
 * @method AssociateRoleResourceIdentifier at($offset)
 */
class AssociateRoleResourceIdentifierCollection extends ResourceIdentifierCollection
{
    /**
     * @psalm-assert AssociateRoleResourceIdentifier $value
     * @psalm-param AssociateRoleResourceIdentifier|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssociateRoleResourceIdentifierCollection
     */
    public function add($value)
    {
        if (!$value instanceof AssociateRoleResourceIdentifier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AssociateRoleResourceIdentifier
     */
    protected function mapper()
    {
        return function (?int $index): ?AssociateRoleResourceIdentifier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AssociateRoleResourceIdentifier $data */
                $data = AssociateRoleResourceIdentifierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
