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
 * @extends ErrorObjectCollection<InvalidTokenError>
 * @method InvalidTokenError current()
 * @method InvalidTokenError at($offset)
 */
class InvalidTokenErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert InvalidTokenError $value
     * @psalm-param InvalidTokenError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InvalidTokenErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof InvalidTokenError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InvalidTokenError
     */
    protected function mapper()
    {
        return function (int $index): ?InvalidTokenError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InvalidTokenError $data */
                $data = InvalidTokenErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
