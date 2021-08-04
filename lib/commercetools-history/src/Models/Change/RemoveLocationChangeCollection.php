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
 * @extends ChangeCollection<RemoveLocationChange>
 * @method RemoveLocationChange current()
 * @method RemoveLocationChange end()
 * @method RemoveLocationChange at($offset)
 */
class RemoveLocationChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert RemoveLocationChange $value
     * @psalm-param RemoveLocationChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveLocationChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveLocationChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveLocationChange
     */
    protected function mapper()
    {
        return function (?int $index): ?RemoveLocationChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RemoveLocationChange $data */
                $data = RemoveLocationChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
