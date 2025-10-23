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
 * @extends ChangeCollection<ChangeTopLevelUnitChange>
 * @method ChangeTopLevelUnitChange current()
 * @method ChangeTopLevelUnitChange end()
 * @method ChangeTopLevelUnitChange at($offset)
 */
class ChangeTopLevelUnitChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeTopLevelUnitChange $value
     * @psalm-param ChangeTopLevelUnitChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeTopLevelUnitChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeTopLevelUnitChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeTopLevelUnitChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeTopLevelUnitChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeTopLevelUnitChange $data */
                $data = ChangeTopLevelUnitChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
