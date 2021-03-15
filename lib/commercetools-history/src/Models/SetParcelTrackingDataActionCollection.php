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
 * @extends MapperSequence<SetParcelTrackingDataAction>
 * @method SetParcelTrackingDataAction current()
 * @method SetParcelTrackingDataAction at($offset)
 */
class SetParcelTrackingDataActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetParcelTrackingDataAction $value
     * @psalm-param SetParcelTrackingDataAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetParcelTrackingDataActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetParcelTrackingDataAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetParcelTrackingDataAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetParcelTrackingDataAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetParcelTrackingDataActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
