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
 * @extends ChannelUpdateActionCollection<ChannelChangeNameAction>
 * @method ChannelChangeNameAction current()
 * @method ChannelChangeNameAction at($offset)
 */
class ChannelChangeNameActionCollection extends ChannelUpdateActionCollection
{
    /**
     * @psalm-assert ChannelChangeNameAction $value
     * @psalm-param ChannelChangeNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChannelChangeNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChannelChangeNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChannelChangeNameAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ChannelChangeNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChannelChangeNameAction $data */
                $data = ChannelChangeNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
