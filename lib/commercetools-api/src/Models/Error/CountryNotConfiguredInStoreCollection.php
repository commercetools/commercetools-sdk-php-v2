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
 * @extends ErrorObjectCollection<CountryNotConfiguredInStore>
 * @method CountryNotConfiguredInStore current()
 * @method CountryNotConfiguredInStore end()
 * @method CountryNotConfiguredInStore at($offset)
 */
class CountryNotConfiguredInStoreCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert CountryNotConfiguredInStore $value
     * @psalm-param CountryNotConfiguredInStore|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CountryNotConfiguredInStoreCollection
     */
    public function add($value)
    {
        if (!$value instanceof CountryNotConfiguredInStore) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CountryNotConfiguredInStore
     */
    protected function mapper()
    {
        return function (?int $index): ?CountryNotConfiguredInStore {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CountryNotConfiguredInStore $data */
                $data = CountryNotConfiguredInStoreModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
