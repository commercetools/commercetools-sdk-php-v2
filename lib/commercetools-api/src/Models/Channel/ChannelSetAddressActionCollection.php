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
 * @extends MapperSequence<ChannelSetAddressAction>
 * @method ChannelSetAddressAction current()
 * @method ChannelSetAddressAction at($offset)
 */
class ChannelSetAddressActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChannelSetAddressAction $value
     * @psalm-param ChannelSetAddressAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChannelSetAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChannelSetAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChannelSetAddressAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChannelSetAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChannelSetAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
