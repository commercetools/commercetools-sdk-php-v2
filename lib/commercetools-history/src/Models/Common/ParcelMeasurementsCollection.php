<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ParcelMeasurements>
 * @method ParcelMeasurements current()
 * @method ParcelMeasurements at($offset)
 */
class ParcelMeasurementsCollection extends MapperSequence
{
    /**
     * @psalm-assert ParcelMeasurements $value
     * @psalm-param ParcelMeasurements|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ParcelMeasurementsCollection
     */
    public function add($value)
    {
        if (!$value instanceof ParcelMeasurements) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ParcelMeasurements
     */
    protected function mapper()
    {
        return function (int $index): ?ParcelMeasurements {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ParcelMeasurements $data */
                $data = ParcelMeasurementsModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
