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
 * @extends ChangeCollection<SetUnitTypeChange>
 * @method SetUnitTypeChange current()
 * @method SetUnitTypeChange end()
 * @method SetUnitTypeChange at($offset)
 */
class SetUnitTypeChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetUnitTypeChange $value
     * @psalm-param SetUnitTypeChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetUnitTypeChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetUnitTypeChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetUnitTypeChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetUnitTypeChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetUnitTypeChange $data */
                $data = SetUnitTypeChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
