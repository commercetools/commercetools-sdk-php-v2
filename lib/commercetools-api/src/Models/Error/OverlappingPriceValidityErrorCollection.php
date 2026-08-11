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
 * @extends ErrorObjectCollection<OverlappingPriceValidityError>
 * @method OverlappingPriceValidityError current()
 * @method OverlappingPriceValidityError end()
 * @method OverlappingPriceValidityError at($offset)
 */
class OverlappingPriceValidityErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert OverlappingPriceValidityError $value
     * @psalm-param OverlappingPriceValidityError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OverlappingPriceValidityErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof OverlappingPriceValidityError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OverlappingPriceValidityError
     */
    protected function mapper()
    {
        return function (?int $index): ?OverlappingPriceValidityError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OverlappingPriceValidityError $data */
                $data = OverlappingPriceValidityErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
