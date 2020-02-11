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
 * @extends MapperSequence<ChannelResourceIdentifier>
 * @method ChannelResourceIdentifier current()
 * @method ChannelResourceIdentifier at($offset)
 */
class ChannelResourceIdentifierCollection extends MapperSequence
{
    /**
     * @psalm-assert ChannelResourceIdentifier $value
     * @psalm-param ChannelResourceIdentifier|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChannelResourceIdentifierCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChannelResourceIdentifier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChannelResourceIdentifier
     */
    protected function mapper()
    {
        return function (int $index): ?ChannelResourceIdentifier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChannelResourceIdentifierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
