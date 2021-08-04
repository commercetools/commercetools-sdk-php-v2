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
 * @extends MapperSequence<TrackingData>
 * @method TrackingData current()
 * @method TrackingData end()
 * @method TrackingData at($offset)
 */
class TrackingDataCollection extends MapperSequence
{
    /**
     * @psalm-assert TrackingData $value
     * @psalm-param TrackingData|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TrackingDataCollection
     */
    public function add($value)
    {
        if (!$value instanceof TrackingData) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TrackingData
     */
    protected function mapper()
    {
        return function (?int $index): ?TrackingData {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TrackingData $data */
                $data = TrackingDataModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
