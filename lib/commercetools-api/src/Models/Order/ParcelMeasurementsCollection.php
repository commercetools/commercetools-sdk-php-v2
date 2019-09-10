<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

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
     * @return ParcelMeasurementsCollection
     * @throws InvalidArgumentException
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
        return function(int $index): ?ParcelMeasurements {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ParcelMeasurementsModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}