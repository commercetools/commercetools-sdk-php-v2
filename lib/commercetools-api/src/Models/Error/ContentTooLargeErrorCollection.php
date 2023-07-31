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
 * @extends ErrorObjectCollection<ContentTooLargeError>
 * @method ContentTooLargeError current()
 * @method ContentTooLargeError end()
 * @method ContentTooLargeError at($offset)
 */
class ContentTooLargeErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert ContentTooLargeError $value
     * @psalm-param ContentTooLargeError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ContentTooLargeErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof ContentTooLargeError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ContentTooLargeError
     */
    protected function mapper()
    {
        return function (?int $index): ?ContentTooLargeError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ContentTooLargeError $data */
                $data = ContentTooLargeErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
