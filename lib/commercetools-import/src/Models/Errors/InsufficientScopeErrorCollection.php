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
 * @extends ErrorObjectCollection<InsufficientScopeError>
 * @method InsufficientScopeError current()
 * @method InsufficientScopeError at($offset)
 */
class InsufficientScopeErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert InsufficientScopeError $value
     * @psalm-param InsufficientScopeError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InsufficientScopeErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof InsufficientScopeError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InsufficientScopeError
     */
    protected function mapper()
    {
        return function (int $index): ?InsufficientScopeError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InsufficientScopeError $data */
                $data = InsufficientScopeErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
