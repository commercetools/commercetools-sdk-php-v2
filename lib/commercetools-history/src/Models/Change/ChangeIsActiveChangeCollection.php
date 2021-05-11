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
 * @extends ChangeCollection<ChangeIsActiveChange>
 * @method ChangeIsActiveChange current()
 * @method ChangeIsActiveChange at($offset)
 */
class ChangeIsActiveChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeIsActiveChange $value
     * @psalm-param ChangeIsActiveChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeIsActiveChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeIsActiveChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeIsActiveChange
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeIsActiveChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeIsActiveChange $data */
                $data = ChangeIsActiveChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
