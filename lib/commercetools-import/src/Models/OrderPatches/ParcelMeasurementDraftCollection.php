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
 * @extends MapperSequence<ParcelMeasurementDraft>
 * @method ParcelMeasurementDraft current()
 * @method ParcelMeasurementDraft end()
 * @method ParcelMeasurementDraft at($offset)
 */
class ParcelMeasurementDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ParcelMeasurementDraft $value
     * @psalm-param ParcelMeasurementDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ParcelMeasurementDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof ParcelMeasurementDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ParcelMeasurementDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?ParcelMeasurementDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ParcelMeasurementDraft $data */
                $data = ParcelMeasurementDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
