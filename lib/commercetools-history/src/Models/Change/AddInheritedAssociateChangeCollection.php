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
 * @extends ChangeCollection<AddInheritedAssociateChange>
 * @method AddInheritedAssociateChange current()
 * @method AddInheritedAssociateChange end()
 * @method AddInheritedAssociateChange at($offset)
 */
class AddInheritedAssociateChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert AddInheritedAssociateChange $value
     * @psalm-param AddInheritedAssociateChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddInheritedAssociateChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddInheritedAssociateChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddInheritedAssociateChange
     */
    protected function mapper()
    {
        return function (?int $index): ?AddInheritedAssociateChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AddInheritedAssociateChange $data */
                $data = AddInheritedAssociateChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
