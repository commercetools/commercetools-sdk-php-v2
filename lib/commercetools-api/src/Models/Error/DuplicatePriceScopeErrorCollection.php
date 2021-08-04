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
 * @extends ErrorObjectCollection<DuplicatePriceScopeError>
 * @method DuplicatePriceScopeError current()
 * @method DuplicatePriceScopeError end()
 * @method DuplicatePriceScopeError at($offset)
 */
class DuplicatePriceScopeErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert DuplicatePriceScopeError $value
     * @psalm-param DuplicatePriceScopeError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DuplicatePriceScopeErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof DuplicatePriceScopeError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DuplicatePriceScopeError
     */
    protected function mapper()
    {
        return function (?int $index): ?DuplicatePriceScopeError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DuplicatePriceScopeError $data */
                $data = DuplicatePriceScopeErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
