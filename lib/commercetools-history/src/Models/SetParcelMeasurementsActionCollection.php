<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<SetParcelMeasurementsAction>
 * @method SetParcelMeasurementsAction current()
 * @method SetParcelMeasurementsAction at($offset)
 */
class SetParcelMeasurementsActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetParcelMeasurementsAction $value
     * @psalm-param SetParcelMeasurementsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetParcelMeasurementsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetParcelMeasurementsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetParcelMeasurementsAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetParcelMeasurementsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetParcelMeasurementsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
