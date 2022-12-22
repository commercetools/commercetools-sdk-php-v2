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
 * @extends ErrorObjectCollection<DuplicatePriceKeyError>
 * @method DuplicatePriceKeyError current()
 * @method DuplicatePriceKeyError end()
 * @method DuplicatePriceKeyError at($offset)
 */
class DuplicatePriceKeyErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert DuplicatePriceKeyError $value
     * @psalm-param DuplicatePriceKeyError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DuplicatePriceKeyErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof DuplicatePriceKeyError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DuplicatePriceKeyError
     */
    protected function mapper()
    {
        return function (?int $index): ?DuplicatePriceKeyError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DuplicatePriceKeyError $data */
                $data = DuplicatePriceKeyErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
