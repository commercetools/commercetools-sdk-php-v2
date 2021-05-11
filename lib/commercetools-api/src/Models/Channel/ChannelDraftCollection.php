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
 * @extends MapperSequence<ChannelDraft>
 * @method ChannelDraft current()
 * @method ChannelDraft at($offset)
 */
class ChannelDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ChannelDraft $value
     * @psalm-param ChannelDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChannelDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChannelDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChannelDraft
     */
    protected function mapper()
    {
        return function (int $index): ?ChannelDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChannelDraft $data */
                $data = ChannelDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
