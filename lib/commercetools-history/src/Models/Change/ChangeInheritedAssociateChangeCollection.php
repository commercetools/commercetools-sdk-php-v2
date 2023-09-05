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
 * @extends ChangeCollection<ChangeInheritedAssociateChange>
 * @method ChangeInheritedAssociateChange current()
 * @method ChangeInheritedAssociateChange end()
 * @method ChangeInheritedAssociateChange at($offset)
 */
class ChangeInheritedAssociateChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeInheritedAssociateChange $value
     * @psalm-param ChangeInheritedAssociateChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeInheritedAssociateChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeInheritedAssociateChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeInheritedAssociateChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeInheritedAssociateChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeInheritedAssociateChange $data */
                $data = ChangeInheritedAssociateChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
