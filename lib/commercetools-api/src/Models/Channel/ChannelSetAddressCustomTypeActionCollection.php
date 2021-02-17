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
 * @extends MapperSequence<ChannelSetAddressCustomTypeAction>
 * @method ChannelSetAddressCustomTypeAction current()
 * @method ChannelSetAddressCustomTypeAction at($offset)
 */
class ChannelSetAddressCustomTypeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChannelSetAddressCustomTypeAction $value
     * @psalm-param ChannelSetAddressCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChannelSetAddressCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChannelSetAddressCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChannelSetAddressCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChannelSetAddressCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChannelSetAddressCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
