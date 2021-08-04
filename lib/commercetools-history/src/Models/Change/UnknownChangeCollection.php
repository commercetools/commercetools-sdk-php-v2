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
 * @extends ChangeCollection<UnknownChange>
 * @method UnknownChange current()
 * @method UnknownChange at($offset)
 */
class UnknownChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert UnknownChange $value
     * @psalm-param UnknownChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return UnknownChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof UnknownChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?UnknownChange
     */
    protected function mapper()
    {
        return function (?int $index): ?UnknownChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var UnknownChange $data */
                $data = UnknownChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
