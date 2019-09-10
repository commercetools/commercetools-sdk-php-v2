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
 * @extends MapperSequence<ChannelUpdate>
 *
 * @method ChannelUpdate current()
 * @method ChannelUpdate at($offset)
 */
class ChannelUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert ChannelUpdate $value
     * @psalm-param ChannelUpdate|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ChannelUpdateCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChannelUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChannelUpdate
     */
    protected function mapper()
    {
        return function (int $index): ?ChannelUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChannelUpdateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
