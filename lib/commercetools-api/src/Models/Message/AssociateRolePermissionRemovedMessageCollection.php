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
 * @extends MessageCollection<AssociateRolePermissionRemovedMessage>
 * @method AssociateRolePermissionRemovedMessage current()
 * @method AssociateRolePermissionRemovedMessage end()
 * @method AssociateRolePermissionRemovedMessage at($offset)
 */
class AssociateRolePermissionRemovedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert AssociateRolePermissionRemovedMessage $value
     * @psalm-param AssociateRolePermissionRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssociateRolePermissionRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof AssociateRolePermissionRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AssociateRolePermissionRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?AssociateRolePermissionRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AssociateRolePermissionRemovedMessage $data */
                $data = AssociateRolePermissionRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
