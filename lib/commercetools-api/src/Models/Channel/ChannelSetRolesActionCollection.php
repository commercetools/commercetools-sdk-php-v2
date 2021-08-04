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
 * @extends ChannelUpdateActionCollection<ChannelSetRolesAction>
 * @method ChannelSetRolesAction current()
 * @method ChannelSetRolesAction end()
 * @method ChannelSetRolesAction at($offset)
 */
class ChannelSetRolesActionCollection extends ChannelUpdateActionCollection
{
    /**
     * @psalm-assert ChannelSetRolesAction $value
     * @psalm-param ChannelSetRolesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChannelSetRolesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChannelSetRolesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChannelSetRolesAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ChannelSetRolesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChannelSetRolesAction $data */
                $data = ChannelSetRolesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
