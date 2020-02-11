<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<GenericError>
 * @method GenericError current()
 * @method GenericError at($offset)
 */
class GenericErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert GenericError $value
     * @psalm-param GenericError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GenericErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GenericError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GenericError
     */
    protected function mapper()
    {
        return function (int $index): ?GenericError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = GenericErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
