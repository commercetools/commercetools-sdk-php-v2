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
 * @extends MessageCollection<AssociateRoleNameSetMessage>
 * @method AssociateRoleNameSetMessage current()
 * @method AssociateRoleNameSetMessage end()
 * @method AssociateRoleNameSetMessage at($offset)
 */
class AssociateRoleNameSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert AssociateRoleNameSetMessage $value
     * @psalm-param AssociateRoleNameSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssociateRoleNameSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof AssociateRoleNameSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AssociateRoleNameSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?AssociateRoleNameSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AssociateRoleNameSetMessage $data */
                $data = AssociateRoleNameSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
