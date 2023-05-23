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
 * @extends MessagePayloadCollection<AssociateRoleCreatedMessagePayload>
 * @method AssociateRoleCreatedMessagePayload current()
 * @method AssociateRoleCreatedMessagePayload end()
 * @method AssociateRoleCreatedMessagePayload at($offset)
 */
class AssociateRoleCreatedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert AssociateRoleCreatedMessagePayload $value
     * @psalm-param AssociateRoleCreatedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssociateRoleCreatedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof AssociateRoleCreatedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AssociateRoleCreatedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?AssociateRoleCreatedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AssociateRoleCreatedMessagePayload $data */
                $data = AssociateRoleCreatedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
