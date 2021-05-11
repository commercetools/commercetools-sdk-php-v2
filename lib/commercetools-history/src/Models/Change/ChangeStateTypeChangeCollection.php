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
 * @extends ChangeCollection<ChangeStateTypeChange>
 * @method ChangeStateTypeChange current()
 * @method ChangeStateTypeChange at($offset)
 */
class ChangeStateTypeChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeStateTypeChange $value
     * @psalm-param ChangeStateTypeChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeStateTypeChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeStateTypeChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeStateTypeChange
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeStateTypeChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeStateTypeChange $data */
                $data = ChangeStateTypeChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
