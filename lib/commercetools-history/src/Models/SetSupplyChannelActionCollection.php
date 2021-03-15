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
 * @extends MapperSequence<SetSupplyChannelAction>
 * @method SetSupplyChannelAction current()
 * @method SetSupplyChannelAction at($offset)
 */
class SetSupplyChannelActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetSupplyChannelAction $value
     * @psalm-param SetSupplyChannelAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetSupplyChannelActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetSupplyChannelAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetSupplyChannelAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetSupplyChannelAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetSupplyChannelActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
