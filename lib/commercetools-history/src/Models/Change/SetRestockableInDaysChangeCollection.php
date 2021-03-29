<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<SetRestockableInDaysChange>
 * @method SetRestockableInDaysChange current()
 * @method SetRestockableInDaysChange at($offset)
 */
class SetRestockableInDaysChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetRestockableInDaysChange $value
     * @psalm-param SetRestockableInDaysChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetRestockableInDaysChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetRestockableInDaysChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetRestockableInDaysChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetRestockableInDaysChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetRestockableInDaysChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
