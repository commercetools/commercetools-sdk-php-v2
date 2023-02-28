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
 * @extends ErrorObjectCollection<CountryNotConfiguredInStoreError>
 * @method CountryNotConfiguredInStoreError current()
 * @method CountryNotConfiguredInStoreError end()
 * @method CountryNotConfiguredInStoreError at($offset)
 */
class CountryNotConfiguredInStoreErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert CountryNotConfiguredInStoreError $value
     * @psalm-param CountryNotConfiguredInStoreError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CountryNotConfiguredInStoreErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof CountryNotConfiguredInStoreError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CountryNotConfiguredInStoreError
     */
    protected function mapper()
    {
        return function (?int $index): ?CountryNotConfiguredInStoreError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CountryNotConfiguredInStoreError $data */
                $data = CountryNotConfiguredInStoreErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
