<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\Errors\ErrorObjectCollection;
use stdClass;

/**
 * @extends ErrorObjectCollection<ContentionError>
 * @method ContentionError current()
 * @method ContentionError end()
 * @method ContentionError at($offset)
 */
class ContentionErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert ContentionError $value
     * @psalm-param ContentionError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ContentionErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof ContentionError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ContentionError
     */
    protected function mapper()
    {
        return function (?int $index): ?ContentionError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ContentionError $data */
                $data = ContentionErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
