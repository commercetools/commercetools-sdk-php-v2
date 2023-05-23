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
 * @extends MessagePayloadCollection<AssociateRolePermissionAddedMessagePayload>
 * @method AssociateRolePermissionAddedMessagePayload current()
 * @method AssociateRolePermissionAddedMessagePayload end()
 * @method AssociateRolePermissionAddedMessagePayload at($offset)
 */
class AssociateRolePermissionAddedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert AssociateRolePermissionAddedMessagePayload $value
     * @psalm-param AssociateRolePermissionAddedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssociateRolePermissionAddedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof AssociateRolePermissionAddedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AssociateRolePermissionAddedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?AssociateRolePermissionAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AssociateRolePermissionAddedMessagePayload $data */
                $data = AssociateRolePermissionAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
