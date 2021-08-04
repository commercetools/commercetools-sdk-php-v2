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
 * @extends ChannelUpdateActionCollection<ChannelSetAddressCustomFieldAction>
 * @method ChannelSetAddressCustomFieldAction current()
 * @method ChannelSetAddressCustomFieldAction end()
 * @method ChannelSetAddressCustomFieldAction at($offset)
 */
class ChannelSetAddressCustomFieldActionCollection extends ChannelUpdateActionCollection
{
    /**
     * @psalm-assert ChannelSetAddressCustomFieldAction $value
     * @psalm-param ChannelSetAddressCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChannelSetAddressCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChannelSetAddressCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChannelSetAddressCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ChannelSetAddressCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChannelSetAddressCustomFieldAction $data */
                $data = ChannelSetAddressCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
