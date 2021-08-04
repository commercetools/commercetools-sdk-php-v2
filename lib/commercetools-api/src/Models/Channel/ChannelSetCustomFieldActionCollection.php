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
 * @extends ChannelUpdateActionCollection<ChannelSetCustomFieldAction>
 * @method ChannelSetCustomFieldAction current()
 * @method ChannelSetCustomFieldAction at($offset)
 */
class ChannelSetCustomFieldActionCollection extends ChannelUpdateActionCollection
{
    /**
     * @psalm-assert ChannelSetCustomFieldAction $value
     * @psalm-param ChannelSetCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChannelSetCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChannelSetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChannelSetCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ChannelSetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChannelSetCustomFieldAction $data */
                $data = ChannelSetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
