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
 * @extends ChannelUpdateActionCollection<ChannelSetCustomTypeAction>
 * @method ChannelSetCustomTypeAction current()
 * @method ChannelSetCustomTypeAction end()
 * @method ChannelSetCustomTypeAction at($offset)
 */
class ChannelSetCustomTypeActionCollection extends ChannelUpdateActionCollection
{
    /**
     * @psalm-assert ChannelSetCustomTypeAction $value
     * @psalm-param ChannelSetCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChannelSetCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChannelSetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChannelSetCustomTypeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ChannelSetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChannelSetCustomTypeAction $data */
                $data = ChannelSetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
