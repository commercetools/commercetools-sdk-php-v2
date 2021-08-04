<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Channel;

use Commercetools\Api\Models\Channel\ChannelUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ChannelUpdateActionCollection<ChannelSetAddressCustomTypeAction>
 * @method ChannelSetAddressCustomTypeAction current()
 * @method ChannelSetAddressCustomTypeAction end()
 * @method ChannelSetAddressCustomTypeAction at($offset)
 */
class ChannelSetAddressCustomTypeActionCollection extends ChannelUpdateActionCollection
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
        return function (?int $index): ?ChannelSetAddressCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChannelSetAddressCustomTypeAction $data */
                $data = ChannelSetAddressCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
