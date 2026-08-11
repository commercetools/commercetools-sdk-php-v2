<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessageCollection<VariantKeySetMessage>
 * @method VariantKeySetMessage current()
 * @method VariantKeySetMessage end()
 * @method VariantKeySetMessage at($offset)
 */
class VariantKeySetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert VariantKeySetMessage $value
     * @psalm-param VariantKeySetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantKeySetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantKeySetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantKeySetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantKeySetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantKeySetMessage $data */
                $data = VariantKeySetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
