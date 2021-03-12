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
 * @extends MapperSequence<SetSupplyChannelsAction>
 * @method SetSupplyChannelsAction current()
 * @method SetSupplyChannelsAction at($offset)
 */
class SetSupplyChannelsActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetSupplyChannelsAction $value
     * @psalm-param SetSupplyChannelsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetSupplyChannelsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetSupplyChannelsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetSupplyChannelsAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetSupplyChannelsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetSupplyChannelsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
