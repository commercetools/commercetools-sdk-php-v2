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
 * @extends ChannelUpdateActionCollection<ChannelSetGeoLocationAction>
 * @method ChannelSetGeoLocationAction current()
 * @method ChannelSetGeoLocationAction at($offset)
 */
class ChannelSetGeoLocationActionCollection extends ChannelUpdateActionCollection
{
    /**
     * @psalm-assert ChannelSetGeoLocationAction $value
     * @psalm-param ChannelSetGeoLocationAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChannelSetGeoLocationActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChannelSetGeoLocationAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChannelSetGeoLocationAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChannelSetGeoLocationAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChannelSetGeoLocationAction $data */
                $data = ChannelSetGeoLocationActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
