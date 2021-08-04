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
 * @extends ErrorObjectCollection<InvalidScopeError>
 * @method InvalidScopeError current()
 * @method InvalidScopeError at($offset)
 */
class InvalidScopeErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert InvalidScopeError $value
     * @psalm-param InvalidScopeError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InvalidScopeErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof InvalidScopeError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InvalidScopeError
     */
    protected function mapper()
    {
        return function (?int $index): ?InvalidScopeError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InvalidScopeError $data */
                $data = InvalidScopeErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
