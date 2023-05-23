<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessageCollection<AssociateRolePermissionsSetMessage>
 * @method AssociateRolePermissionsSetMessage current()
 * @method AssociateRolePermissionsSetMessage end()
 * @method AssociateRolePermissionsSetMessage at($offset)
 */
class AssociateRolePermissionsSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert AssociateRolePermissionsSetMessage $value
     * @psalm-param AssociateRolePermissionsSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssociateRolePermissionsSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof AssociateRolePermissionsSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AssociateRolePermissionsSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?AssociateRolePermissionsSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AssociateRolePermissionsSetMessage $data */
                $data = AssociateRolePermissionsSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
