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
 * @extends ChangeCollection<RemovePropertyChange>
 * @method RemovePropertyChange current()
 * @method RemovePropertyChange end()
 * @method RemovePropertyChange at($offset)
 */
class RemovePropertyChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert RemovePropertyChange $value
     * @psalm-param RemovePropertyChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemovePropertyChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemovePropertyChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemovePropertyChange
     */
    protected function mapper()
    {
        return function (?int $index): ?RemovePropertyChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RemovePropertyChange $data */
                $data = RemovePropertyChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
