<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\OrderPatches;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ParcelTrackingData>
 * @method ParcelTrackingData current()
 * @method ParcelTrackingData at($offset)
 */
class ParcelTrackingDataCollection extends MapperSequence
{
    /**
     * @psalm-assert ParcelTrackingData $value
     * @psalm-param ParcelTrackingData|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ParcelTrackingDataCollection
     */
    public function add($value)
    {
        if (!$value instanceof ParcelTrackingData) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ParcelTrackingData
     */
    protected function mapper()
    {
        return function (?int $index): ?ParcelTrackingData {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ParcelTrackingData $data */
                $data = ParcelTrackingDataModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
