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
 * @extends ChangeCollection<RemoveAssociateChange>
 * @method RemoveAssociateChange current()
 * @method RemoveAssociateChange end()
 * @method RemoveAssociateChange at($offset)
 */
class RemoveAssociateChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert RemoveAssociateChange $value
     * @psalm-param RemoveAssociateChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveAssociateChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveAssociateChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveAssociateChange
     */
    protected function mapper()
    {
        return function (?int $index): ?RemoveAssociateChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RemoveAssociateChange $data */
                $data = RemoveAssociateChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
