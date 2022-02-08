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
 * @extends MapperSequence<MessagesConfiguration>
 * @method MessagesConfiguration current()
 * @method MessagesConfiguration end()
 * @method MessagesConfiguration at($offset)
 */
class MessagesConfigurationCollection extends MapperSequence
{
    /**
     * @psalm-assert MessagesConfiguration $value
     * @psalm-param MessagesConfiguration|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MessagesConfigurationCollection
     */
    public function add($value)
    {
        if (!$value instanceof MessagesConfiguration) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MessagesConfiguration
     */
    protected function mapper()
    {
        return function (?int $index): ?MessagesConfiguration {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MessagesConfiguration $data */
                $data = MessagesConfigurationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
