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
 * @extends ChangeCollection<ChangeSortOrderChange>
 * @method ChangeSortOrderChange current()
 * @method ChangeSortOrderChange at($offset)
 */
class ChangeSortOrderChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeSortOrderChange $value
     * @psalm-param ChangeSortOrderChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeSortOrderChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeSortOrderChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeSortOrderChange
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeSortOrderChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeSortOrderChange $data */
                $data = ChangeSortOrderChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
