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
 * @extends ErrorObjectCollection<PriceChangedError>
 * @method PriceChangedError current()
 * @method PriceChangedError end()
 * @method PriceChangedError at($offset)
 */
class PriceChangedErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert PriceChangedError $value
     * @psalm-param PriceChangedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PriceChangedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof PriceChangedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PriceChangedError
     */
    protected function mapper()
    {
        return function (?int $index): ?PriceChangedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PriceChangedError $data */
                $data = PriceChangedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
