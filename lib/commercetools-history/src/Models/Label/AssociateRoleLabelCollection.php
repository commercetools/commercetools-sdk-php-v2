<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Label;

use Commercetools\History\Models\Label\LabelCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends LabelCollection<AssociateRoleLabel>
 * @method AssociateRoleLabel current()
 * @method AssociateRoleLabel end()
 * @method AssociateRoleLabel at($offset)
 */
class AssociateRoleLabelCollection extends LabelCollection
{
    /**
     * @psalm-assert AssociateRoleLabel $value
     * @psalm-param AssociateRoleLabel|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssociateRoleLabelCollection
     */
    public function add($value)
    {
        if (!$value instanceof AssociateRoleLabel) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AssociateRoleLabel
     */
    protected function mapper()
    {
        return function (?int $index): ?AssociateRoleLabel {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AssociateRoleLabel $data */
                $data = AssociateRoleLabelModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
