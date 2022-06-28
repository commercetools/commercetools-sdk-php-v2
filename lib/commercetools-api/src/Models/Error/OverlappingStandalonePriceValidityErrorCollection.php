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
 * @extends ErrorObjectCollection<OverlappingStandalonePriceValidityError>
 * @method OverlappingStandalonePriceValidityError current()
 * @method OverlappingStandalonePriceValidityError end()
 * @method OverlappingStandalonePriceValidityError at($offset)
 */
class OverlappingStandalonePriceValidityErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert OverlappingStandalonePriceValidityError $value
     * @psalm-param OverlappingStandalonePriceValidityError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OverlappingStandalonePriceValidityErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof OverlappingStandalonePriceValidityError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OverlappingStandalonePriceValidityError
     */
    protected function mapper()
    {
        return function (?int $index): ?OverlappingStandalonePriceValidityError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OverlappingStandalonePriceValidityError $data */
                $data = OverlappingStandalonePriceValidityErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
