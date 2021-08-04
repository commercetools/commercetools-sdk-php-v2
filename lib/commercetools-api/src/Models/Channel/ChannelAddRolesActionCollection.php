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
 * @extends ChannelUpdateActionCollection<ChannelAddRolesAction>
 * @method ChannelAddRolesAction current()
 * @method ChannelAddRolesAction end()
 * @method ChannelAddRolesAction at($offset)
 */
class ChannelAddRolesActionCollection extends ChannelUpdateActionCollection
{
    /**
     * @psalm-assert ChannelAddRolesAction $value
     * @psalm-param ChannelAddRolesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChannelAddRolesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChannelAddRolesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChannelAddRolesAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ChannelAddRolesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChannelAddRolesAction $data */
                $data = ChannelAddRolesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
