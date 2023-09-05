<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\History\Models\Change\ChangeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ChangeCollection<RemoveInheritedAssociateChange>
 * @method RemoveInheritedAssociateChange current()
 * @method RemoveInheritedAssociateChange end()
 * @method RemoveInheritedAssociateChange at($offset)
 */
class RemoveInheritedAssociateChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert RemoveInheritedAssociateChange $value
     * @psalm-param RemoveInheritedAssociateChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveInheritedAssociateChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveInheritedAssociateChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveInheritedAssociateChange
     */
    protected function mapper()
    {
        return function (?int $index): ?RemoveInheritedAssociateChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RemoveInheritedAssociateChange $data */
                $data = RemoveInheritedAssociateChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
