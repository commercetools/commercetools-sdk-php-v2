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
 * @extends ErrorObjectCollection<InvalidFieldError>
 * @method InvalidFieldError current()
 * @method InvalidFieldError at($offset)
 */
class InvalidFieldErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert InvalidFieldError $value
     * @psalm-param InvalidFieldError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InvalidFieldErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof InvalidFieldError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InvalidFieldError
     */
    protected function mapper()
    {
        return function (int $index): ?InvalidFieldError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InvalidFieldError $data */
                $data = InvalidFieldErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
