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
 * @extends ChangeCollection<RemoveFromCategoryChange>
 * @method RemoveFromCategoryChange current()
 * @method RemoveFromCategoryChange at($offset)
 */
class RemoveFromCategoryChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert RemoveFromCategoryChange $value
     * @psalm-param RemoveFromCategoryChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveFromCategoryChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveFromCategoryChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveFromCategoryChange
     */
    protected function mapper()
    {
        return function (int $index): ?RemoveFromCategoryChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RemoveFromCategoryChange $data */
                $data = RemoveFromCategoryChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
