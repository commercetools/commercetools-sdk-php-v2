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
 * @extends MessageCollection<AssociateRoleBuyerAssignableChangedMessage>
 * @method AssociateRoleBuyerAssignableChangedMessage current()
 * @method AssociateRoleBuyerAssignableChangedMessage end()
 * @method AssociateRoleBuyerAssignableChangedMessage at($offset)
 */
class AssociateRoleBuyerAssignableChangedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert AssociateRoleBuyerAssignableChangedMessage $value
     * @psalm-param AssociateRoleBuyerAssignableChangedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssociateRoleBuyerAssignableChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof AssociateRoleBuyerAssignableChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AssociateRoleBuyerAssignableChangedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?AssociateRoleBuyerAssignableChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AssociateRoleBuyerAssignableChangedMessage $data */
                $data = AssociateRoleBuyerAssignableChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
