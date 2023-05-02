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
 * @extends MessageCollection<AssociateRolePermissionAddedMessage>
 * @method AssociateRolePermissionAddedMessage current()
 * @method AssociateRolePermissionAddedMessage end()
 * @method AssociateRolePermissionAddedMessage at($offset)
 */
class AssociateRolePermissionAddedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert AssociateRolePermissionAddedMessage $value
     * @psalm-param AssociateRolePermissionAddedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssociateRolePermissionAddedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof AssociateRolePermissionAddedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AssociateRolePermissionAddedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?AssociateRolePermissionAddedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AssociateRolePermissionAddedMessage $data */
                $data = AssociateRolePermissionAddedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
