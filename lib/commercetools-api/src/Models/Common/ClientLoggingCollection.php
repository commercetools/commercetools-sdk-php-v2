<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ClientLogging>
 * @method ClientLogging current()
 * @method ClientLogging at($offset)
 */
class ClientLoggingCollection extends MapperSequence
{
    /**
     * @psalm-assert ClientLogging $value
     * @psalm-param ClientLogging|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ClientLoggingCollection
     */
    public function add($value)
    {
        if (!$value instanceof ClientLogging) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ClientLogging
     */
    protected function mapper()
    {
        return function (int $index): ?ClientLogging {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ClientLoggingModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
