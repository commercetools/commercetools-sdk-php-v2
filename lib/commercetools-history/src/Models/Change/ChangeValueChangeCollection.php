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
 * @extends ChangeCollection<ChangeValueChange>
 * @method ChangeValueChange current()
 * @method ChangeValueChange at($offset)
 */
class ChangeValueChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeValueChange $value
     * @psalm-param ChangeValueChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeValueChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeValueChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeValueChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeValueChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeValueChange $data */
                $data = ChangeValueChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
