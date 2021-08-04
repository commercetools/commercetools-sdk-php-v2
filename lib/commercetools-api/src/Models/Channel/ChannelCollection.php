<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Channel;

use Commercetools\Api\Models\Common\BaseResourceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends BaseResourceCollection<Channel>
 * @method Channel current()
 * @method Channel at($offset)
 */
class ChannelCollection extends BaseResourceCollection
{
    /**
     * @psalm-assert Channel $value
     * @psalm-param Channel|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChannelCollection
     */
    public function add($value)
    {
        if (!$value instanceof Channel) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Channel
     */
    protected function mapper()
    {
        return function (?int $index): ?Channel {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var Channel $data */
                $data = ChannelModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
