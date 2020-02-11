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
 * @extends MapperSequence<ChannelSetCustomFieldAction>
 * @method ChannelSetCustomFieldAction current()
 * @method ChannelSetCustomFieldAction at($offset)
 */
class ChannelSetCustomFieldActionCollection extends MapperSequence
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
        return function (int $index): ?ChannelSetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChannelSetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
