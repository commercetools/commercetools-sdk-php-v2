<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Channel;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ChannelUpdateAction>
 * @method ChannelUpdateAction current()
 * @method ChannelUpdateAction at($offset)
 */
class ChannelUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChannelUpdateAction $value
     * @psalm-param ChannelUpdateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChannelUpdateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChannelUpdateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChannelUpdateAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChannelUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChannelUpdateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
