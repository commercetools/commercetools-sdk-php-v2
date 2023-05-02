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
 * @extends MessagePayloadCollection<AssociateRoleBuyerAssignableChangedMessagePayload>
 * @method AssociateRoleBuyerAssignableChangedMessagePayload current()
 * @method AssociateRoleBuyerAssignableChangedMessagePayload end()
 * @method AssociateRoleBuyerAssignableChangedMessagePayload at($offset)
 */
class AssociateRoleBuyerAssignableChangedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert AssociateRoleBuyerAssignableChangedMessagePayload $value
     * @psalm-param AssociateRoleBuyerAssignableChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssociateRoleBuyerAssignableChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof AssociateRoleBuyerAssignableChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AssociateRoleBuyerAssignableChangedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?AssociateRoleBuyerAssignableChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AssociateRoleBuyerAssignableChangedMessagePayload $data */
                $data = AssociateRoleBuyerAssignableChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
