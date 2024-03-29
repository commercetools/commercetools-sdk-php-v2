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
 * @extends ChannelUpdateActionCollection<ChannelRemoveRolesAction>
 * @method ChannelRemoveRolesAction current()
 * @method ChannelRemoveRolesAction end()
 * @method ChannelRemoveRolesAction at($offset)
 */
class ChannelRemoveRolesActionCollection extends ChannelUpdateActionCollection
{
    /**
     * @psalm-assert ChannelRemoveRolesAction $value
     * @psalm-param ChannelRemoveRolesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChannelRemoveRolesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChannelRemoveRolesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChannelRemoveRolesAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ChannelRemoveRolesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChannelRemoveRolesAction $data */
                $data = ChannelRemoveRolesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
