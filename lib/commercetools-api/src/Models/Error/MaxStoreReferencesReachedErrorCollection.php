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
 * @extends ErrorObjectCollection<MaxStoreReferencesReachedError>
 * @method MaxStoreReferencesReachedError current()
 * @method MaxStoreReferencesReachedError end()
 * @method MaxStoreReferencesReachedError at($offset)
 */
class MaxStoreReferencesReachedErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert MaxStoreReferencesReachedError $value
     * @psalm-param MaxStoreReferencesReachedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MaxStoreReferencesReachedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof MaxStoreReferencesReachedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MaxStoreReferencesReachedError
     */
    protected function mapper()
    {
        return function (?int $index): ?MaxStoreReferencesReachedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MaxStoreReferencesReachedError $data */
                $data = MaxStoreReferencesReachedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
