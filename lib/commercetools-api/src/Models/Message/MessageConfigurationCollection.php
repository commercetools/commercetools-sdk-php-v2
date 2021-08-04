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
 * @extends MapperSequence<MessageConfiguration>
 * @method MessageConfiguration current()
 * @method MessageConfiguration at($offset)
 */
class MessageConfigurationCollection extends MapperSequence
{
    /**
     * @psalm-assert MessageConfiguration $value
     * @psalm-param MessageConfiguration|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MessageConfigurationCollection
     */
    public function add($value)
    {
        if (!$value instanceof MessageConfiguration) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MessageConfiguration
     */
    protected function mapper()
    {
        return function (?int $index): ?MessageConfiguration {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MessageConfiguration $data */
                $data = MessageConfigurationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
