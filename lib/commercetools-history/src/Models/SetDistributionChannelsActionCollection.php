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
 * @extends MapperSequence<SetDistributionChannelsAction>
 * @method SetDistributionChannelsAction current()
 * @method SetDistributionChannelsAction at($offset)
 */
class SetDistributionChannelsActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetDistributionChannelsAction $value
     * @psalm-param SetDistributionChannelsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetDistributionChannelsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetDistributionChannelsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetDistributionChannelsAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetDistributionChannelsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetDistributionChannelsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
