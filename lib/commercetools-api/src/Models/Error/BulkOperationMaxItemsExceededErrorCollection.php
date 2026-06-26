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
 * @extends ErrorObjectCollection<BulkOperationMaxItemsExceededError>
 * @method BulkOperationMaxItemsExceededError current()
 * @method BulkOperationMaxItemsExceededError end()
 * @method BulkOperationMaxItemsExceededError at($offset)
 */
class BulkOperationMaxItemsExceededErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert BulkOperationMaxItemsExceededError $value
     * @psalm-param BulkOperationMaxItemsExceededError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BulkOperationMaxItemsExceededErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof BulkOperationMaxItemsExceededError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BulkOperationMaxItemsExceededError
     */
    protected function mapper()
    {
        return function (?int $index): ?BulkOperationMaxItemsExceededError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BulkOperationMaxItemsExceededError $data */
                $data = BulkOperationMaxItemsExceededErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
