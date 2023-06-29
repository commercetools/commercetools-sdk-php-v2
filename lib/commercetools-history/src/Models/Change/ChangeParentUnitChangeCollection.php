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
 * @extends ChangeCollection<ChangeParentUnitChange>
 * @method ChangeParentUnitChange current()
 * @method ChangeParentUnitChange end()
 * @method ChangeParentUnitChange at($offset)
 */
class ChangeParentUnitChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeParentUnitChange $value
     * @psalm-param ChangeParentUnitChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeParentUnitChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeParentUnitChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeParentUnitChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeParentUnitChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeParentUnitChange $data */
                $data = ChangeParentUnitChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
