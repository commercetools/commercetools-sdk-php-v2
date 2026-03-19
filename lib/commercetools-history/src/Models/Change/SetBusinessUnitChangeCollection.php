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
 * @extends ChangeCollection<SetBusinessUnitChange>
 * @method SetBusinessUnitChange current()
 * @method SetBusinessUnitChange end()
 * @method SetBusinessUnitChange at($offset)
 */
class SetBusinessUnitChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetBusinessUnitChange $value
     * @psalm-param SetBusinessUnitChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetBusinessUnitChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetBusinessUnitChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetBusinessUnitChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetBusinessUnitChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetBusinessUnitChange $data */
                $data = SetBusinessUnitChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
