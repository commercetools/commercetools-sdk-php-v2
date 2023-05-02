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
 * @extends MessageCollection<AssociateRoleNameChangedMessage>
 * @method AssociateRoleNameChangedMessage current()
 * @method AssociateRoleNameChangedMessage end()
 * @method AssociateRoleNameChangedMessage at($offset)
 */
class AssociateRoleNameChangedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert AssociateRoleNameChangedMessage $value
     * @psalm-param AssociateRoleNameChangedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssociateRoleNameChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof AssociateRoleNameChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AssociateRoleNameChangedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?AssociateRoleNameChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AssociateRoleNameChangedMessage $data */
                $data = AssociateRoleNameChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
