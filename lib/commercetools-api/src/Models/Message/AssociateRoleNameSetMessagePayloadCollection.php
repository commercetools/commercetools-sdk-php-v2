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
 * @extends MessagePayloadCollection<AssociateRoleNameSetMessagePayload>
 * @method AssociateRoleNameSetMessagePayload current()
 * @method AssociateRoleNameSetMessagePayload end()
 * @method AssociateRoleNameSetMessagePayload at($offset)
 */
class AssociateRoleNameSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert AssociateRoleNameSetMessagePayload $value
     * @psalm-param AssociateRoleNameSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssociateRoleNameSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof AssociateRoleNameSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AssociateRoleNameSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?AssociateRoleNameSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AssociateRoleNameSetMessagePayload $data */
                $data = AssociateRoleNameSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
