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
 * @extends ChangeCollection<AddToCategoryChange>
 * @method AddToCategoryChange current()
 * @method AddToCategoryChange at($offset)
 */
class AddToCategoryChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert AddToCategoryChange $value
     * @psalm-param AddToCategoryChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddToCategoryChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddToCategoryChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddToCategoryChange
     */
    protected function mapper()
    {
        return function (int $index): ?AddToCategoryChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AddToCategoryChange $data */
                $data = AddToCategoryChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
