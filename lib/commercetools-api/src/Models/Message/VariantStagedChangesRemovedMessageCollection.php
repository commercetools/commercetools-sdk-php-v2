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
 * @extends MessageCollection<VariantStagedChangesRemovedMessage>
 * @method VariantStagedChangesRemovedMessage current()
 * @method VariantStagedChangesRemovedMessage end()
 * @method VariantStagedChangesRemovedMessage at($offset)
 */
class VariantStagedChangesRemovedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert VariantStagedChangesRemovedMessage $value
     * @psalm-param VariantStagedChangesRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantStagedChangesRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantStagedChangesRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantStagedChangesRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantStagedChangesRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantStagedChangesRemovedMessage $data */
                $data = VariantStagedChangesRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
