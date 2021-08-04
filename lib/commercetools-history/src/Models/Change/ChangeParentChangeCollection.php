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
 * @extends ChangeCollection<ChangeParentChange>
 * @method ChangeParentChange current()
 * @method ChangeParentChange end()
 * @method ChangeParentChange at($offset)
 */
class ChangeParentChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeParentChange $value
     * @psalm-param ChangeParentChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeParentChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeParentChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeParentChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeParentChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeParentChange $data */
                $data = ChangeParentChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
