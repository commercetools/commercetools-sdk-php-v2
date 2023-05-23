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
 * @extends MessagePayloadCollection<AssociateRolePermissionsSetMessagePayload>
 * @method AssociateRolePermissionsSetMessagePayload current()
 * @method AssociateRolePermissionsSetMessagePayload end()
 * @method AssociateRolePermissionsSetMessagePayload at($offset)
 */
class AssociateRolePermissionsSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert AssociateRolePermissionsSetMessagePayload $value
     * @psalm-param AssociateRolePermissionsSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssociateRolePermissionsSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof AssociateRolePermissionsSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AssociateRolePermissionsSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?AssociateRolePermissionsSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AssociateRolePermissionsSetMessagePayload $data */
                $data = AssociateRolePermissionsSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
