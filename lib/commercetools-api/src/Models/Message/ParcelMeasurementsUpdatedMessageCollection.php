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
 * @extends MapperSequence<ParcelMeasurementsUpdatedMessage>
 *
 * @method ParcelMeasurementsUpdatedMessage current()
 * @method ParcelMeasurementsUpdatedMessage at($offset)
 */
class ParcelMeasurementsUpdatedMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert ParcelMeasurementsUpdatedMessage $value
     * @psalm-param ParcelMeasurementsUpdatedMessage|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ParcelMeasurementsUpdatedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ParcelMeasurementsUpdatedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ParcelMeasurementsUpdatedMessage
     */
    protected function mapper()
    {
        return function (int $index): ?ParcelMeasurementsUpdatedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ParcelMeasurementsUpdatedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
