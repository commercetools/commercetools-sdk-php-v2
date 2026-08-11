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
 * @extends MessageCollection<VariantDeletedMessage>
 * @method VariantDeletedMessage current()
 * @method VariantDeletedMessage end()
 * @method VariantDeletedMessage at($offset)
 */
class VariantDeletedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert VariantDeletedMessage $value
     * @psalm-param VariantDeletedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantDeletedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantDeletedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantDeletedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantDeletedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantDeletedMessage $data */
                $data = VariantDeletedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
