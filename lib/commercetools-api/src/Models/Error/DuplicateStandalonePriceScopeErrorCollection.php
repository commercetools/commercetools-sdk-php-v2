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
 * @extends ErrorObjectCollection<DuplicateStandalonePriceScopeError>
 * @method DuplicateStandalonePriceScopeError current()
 * @method DuplicateStandalonePriceScopeError end()
 * @method DuplicateStandalonePriceScopeError at($offset)
 */
class DuplicateStandalonePriceScopeErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert DuplicateStandalonePriceScopeError $value
     * @psalm-param DuplicateStandalonePriceScopeError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DuplicateStandalonePriceScopeErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof DuplicateStandalonePriceScopeError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DuplicateStandalonePriceScopeError
     */
    protected function mapper()
    {
        return function (?int $index): ?DuplicateStandalonePriceScopeError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DuplicateStandalonePriceScopeError $data */
                $data = DuplicateStandalonePriceScopeErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
