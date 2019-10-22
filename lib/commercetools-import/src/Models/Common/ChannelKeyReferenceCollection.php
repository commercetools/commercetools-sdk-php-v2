<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ChannelKeyReference>
 *
 * @method ChannelKeyReference current()
 * @method ChannelKeyReference at($offset)
 */
class ChannelKeyReferenceCollection extends MapperSequence
{
    /**
     * @psalm-assert ChannelKeyReference $value
     * @psalm-param ChannelKeyReference|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ChannelKeyReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChannelKeyReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChannelKeyReference
     */
    protected function mapper()
    {
        return function (int $index): ?ChannelKeyReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChannelKeyReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
