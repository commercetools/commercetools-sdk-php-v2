<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<MessagesConfigurationDraft>
 * @method MessagesConfigurationDraft current()
 * @method MessagesConfigurationDraft end()
 * @method MessagesConfigurationDraft at($offset)
 */
class MessagesConfigurationDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert MessagesConfigurationDraft $value
     * @psalm-param MessagesConfigurationDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MessagesConfigurationDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof MessagesConfigurationDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MessagesConfigurationDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?MessagesConfigurationDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MessagesConfigurationDraft $data */
                $data = MessagesConfigurationDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
