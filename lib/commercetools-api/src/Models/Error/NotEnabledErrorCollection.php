<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Error\ErrorObjectCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ErrorObjectCollection<NotEnabledError>
 * @method NotEnabledError current()
 * @method NotEnabledError at($offset)
 */
class NotEnabledErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert NotEnabledError $value
     * @psalm-param NotEnabledError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return NotEnabledErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof NotEnabledError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?NotEnabledError
     */
    protected function mapper()
    {
        return function (?int $index): ?NotEnabledError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var NotEnabledError $data */
                $data = NotEnabledErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
