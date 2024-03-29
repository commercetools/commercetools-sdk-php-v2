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
 * @extends ChannelUpdateActionCollection<ChannelChangeKeyAction>
 * @method ChannelChangeKeyAction current()
 * @method ChannelChangeKeyAction end()
 * @method ChannelChangeKeyAction at($offset)
 */
class ChannelChangeKeyActionCollection extends ChannelUpdateActionCollection
{
    /**
     * @psalm-assert ChannelChangeKeyAction $value
     * @psalm-param ChannelChangeKeyAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChannelChangeKeyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChannelChangeKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChannelChangeKeyAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ChannelChangeKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChannelChangeKeyAction $data */
                $data = ChannelChangeKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
