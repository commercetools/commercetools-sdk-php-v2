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
 * @extends MapperSequence<SetGeoLocationAction>
 * @method SetGeoLocationAction current()
 * @method SetGeoLocationAction at($offset)
 */
class SetGeoLocationActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetGeoLocationAction $value
     * @psalm-param SetGeoLocationAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetGeoLocationActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetGeoLocationAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetGeoLocationAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetGeoLocationAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetGeoLocationActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
