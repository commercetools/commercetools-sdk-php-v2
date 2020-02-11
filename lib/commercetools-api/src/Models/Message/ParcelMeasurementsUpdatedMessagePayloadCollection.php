<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ParcelMeasurementsUpdatedMessagePayload>
 * @method ParcelMeasurementsUpdatedMessagePayload current()
 * @method ParcelMeasurementsUpdatedMessagePayload at($offset)
 */
class ParcelMeasurementsUpdatedMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert ParcelMeasurementsUpdatedMessagePayload $value
     * @psalm-param ParcelMeasurementsUpdatedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ParcelMeasurementsUpdatedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ParcelMeasurementsUpdatedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ParcelMeasurementsUpdatedMessagePayload
     */
    protected function mapper()
    {
        return function (int $index): ?ParcelMeasurementsUpdatedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ParcelMeasurementsUpdatedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
