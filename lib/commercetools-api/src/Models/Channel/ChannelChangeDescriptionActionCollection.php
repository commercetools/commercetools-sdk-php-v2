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
 * @extends ChannelUpdateActionCollection<ChannelChangeDescriptionAction>
 * @method ChannelChangeDescriptionAction current()
 * @method ChannelChangeDescriptionAction at($offset)
 */
class ChannelChangeDescriptionActionCollection extends ChannelUpdateActionCollection
{
    /**
     * @psalm-assert ChannelChangeDescriptionAction $value
     * @psalm-param ChannelChangeDescriptionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChannelChangeDescriptionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChannelChangeDescriptionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChannelChangeDescriptionAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChannelChangeDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChannelChangeDescriptionAction $data */
                $data = ChannelChangeDescriptionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
