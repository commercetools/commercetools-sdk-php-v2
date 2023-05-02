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
 * @extends MessagePayloadCollection<AssociateRoleDeletedMessagePayload>
 * @method AssociateRoleDeletedMessagePayload current()
 * @method AssociateRoleDeletedMessagePayload end()
 * @method AssociateRoleDeletedMessagePayload at($offset)
 */
class AssociateRoleDeletedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert AssociateRoleDeletedMessagePayload $value
     * @psalm-param AssociateRoleDeletedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssociateRoleDeletedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof AssociateRoleDeletedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AssociateRoleDeletedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?AssociateRoleDeletedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AssociateRoleDeletedMessagePayload $data */
                $data = AssociateRoleDeletedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
