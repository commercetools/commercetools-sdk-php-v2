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
 * @extends MessageCollection<AssociateRoleDeletedMessage>
 * @method AssociateRoleDeletedMessage current()
 * @method AssociateRoleDeletedMessage end()
 * @method AssociateRoleDeletedMessage at($offset)
 */
class AssociateRoleDeletedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert AssociateRoleDeletedMessage $value
     * @psalm-param AssociateRoleDeletedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssociateRoleDeletedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof AssociateRoleDeletedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AssociateRoleDeletedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?AssociateRoleDeletedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AssociateRoleDeletedMessage $data */
                $data = AssociateRoleDeletedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
