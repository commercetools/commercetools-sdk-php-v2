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
 * @extends MessagePayloadCollection<AssociateRoleNameChangedMessagePayload>
 * @method AssociateRoleNameChangedMessagePayload current()
 * @method AssociateRoleNameChangedMessagePayload end()
 * @method AssociateRoleNameChangedMessagePayload at($offset)
 */
class AssociateRoleNameChangedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert AssociateRoleNameChangedMessagePayload $value
     * @psalm-param AssociateRoleNameChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssociateRoleNameChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof AssociateRoleNameChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AssociateRoleNameChangedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?AssociateRoleNameChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AssociateRoleNameChangedMessagePayload $data */
                $data = AssociateRoleNameChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
