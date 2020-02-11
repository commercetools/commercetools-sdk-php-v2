<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<OrderSetParcelMeasurementsAction>
 * @method OrderSetParcelMeasurementsAction current()
 * @method OrderSetParcelMeasurementsAction at($offset)
 */
class OrderSetParcelMeasurementsActionCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderSetParcelMeasurementsAction $value
     * @psalm-param OrderSetParcelMeasurementsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSetParcelMeasurementsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetParcelMeasurementsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetParcelMeasurementsAction
     */
    protected function mapper()
    {
        return function (int $index): ?OrderSetParcelMeasurementsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderSetParcelMeasurementsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
