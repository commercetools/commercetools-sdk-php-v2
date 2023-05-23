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
 * @extends MessageCollection<AssociateRoleCreatedMessage>
 * @method AssociateRoleCreatedMessage current()
 * @method AssociateRoleCreatedMessage end()
 * @method AssociateRoleCreatedMessage at($offset)
 */
class AssociateRoleCreatedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert AssociateRoleCreatedMessage $value
     * @psalm-param AssociateRoleCreatedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssociateRoleCreatedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof AssociateRoleCreatedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AssociateRoleCreatedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?AssociateRoleCreatedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AssociateRoleCreatedMessage $data */
                $data = AssociateRoleCreatedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
