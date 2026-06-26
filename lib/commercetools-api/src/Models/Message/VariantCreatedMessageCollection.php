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
 * @extends MessageCollection<VariantCreatedMessage>
 * @method VariantCreatedMessage current()
 * @method VariantCreatedMessage end()
 * @method VariantCreatedMessage at($offset)
 */
class VariantCreatedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert VariantCreatedMessage $value
     * @psalm-param VariantCreatedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantCreatedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantCreatedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantCreatedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantCreatedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantCreatedMessage $data */
                $data = VariantCreatedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
