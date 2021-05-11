<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Channel;

use Commercetools\Api\Models\Common\ReferenceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ReferenceCollection<ChannelReference>
 * @method ChannelReference current()
 * @method ChannelReference at($offset)
 */
class ChannelReferenceCollection extends ReferenceCollection
{
    /**
     * @psalm-assert ChannelReference $value
     * @psalm-param ChannelReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChannelReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChannelReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChannelReference
     */
    protected function mapper()
    {
        return function (int $index): ?ChannelReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChannelReference $data */
                $data = ChannelReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
