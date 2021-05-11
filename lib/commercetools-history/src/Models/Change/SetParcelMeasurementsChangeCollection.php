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
 * @extends ChangeCollection<SetParcelMeasurementsChange>
 * @method SetParcelMeasurementsChange current()
 * @method SetParcelMeasurementsChange at($offset)
 */
class SetParcelMeasurementsChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetParcelMeasurementsChange $value
     * @psalm-param SetParcelMeasurementsChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetParcelMeasurementsChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetParcelMeasurementsChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetParcelMeasurementsChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetParcelMeasurementsChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetParcelMeasurementsChange $data */
                $data = SetParcelMeasurementsChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
