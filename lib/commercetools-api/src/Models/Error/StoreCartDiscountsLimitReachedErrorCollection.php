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
 * @extends ErrorObjectCollection<StoreCartDiscountsLimitReachedError>
 * @method StoreCartDiscountsLimitReachedError current()
 * @method StoreCartDiscountsLimitReachedError end()
 * @method StoreCartDiscountsLimitReachedError at($offset)
 */
class StoreCartDiscountsLimitReachedErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert StoreCartDiscountsLimitReachedError $value
     * @psalm-param StoreCartDiscountsLimitReachedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreCartDiscountsLimitReachedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreCartDiscountsLimitReachedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreCartDiscountsLimitReachedError
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreCartDiscountsLimitReachedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreCartDiscountsLimitReachedError $data */
                $data = StoreCartDiscountsLimitReachedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
