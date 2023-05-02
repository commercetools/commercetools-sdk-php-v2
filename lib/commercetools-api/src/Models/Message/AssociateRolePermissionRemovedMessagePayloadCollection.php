<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessagePayloadCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessagePayloadCollection<AssociateRolePermissionRemovedMessagePayload>
 * @method AssociateRolePermissionRemovedMessagePayload current()
 * @method AssociateRolePermissionRemovedMessagePayload end()
 * @method AssociateRolePermissionRemovedMessagePayload at($offset)
 */
class AssociateRolePermissionRemovedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert AssociateRolePermissionRemovedMessagePayload $value
     * @psalm-param AssociateRolePermissionRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssociateRolePermissionRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof AssociateRolePermissionRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AssociateRolePermissionRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?AssociateRolePermissionRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AssociateRolePermissionRemovedMessagePayload $data */
                $data = AssociateRolePermissionRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
