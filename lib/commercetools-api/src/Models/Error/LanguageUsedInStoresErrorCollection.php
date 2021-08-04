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
 * @extends ErrorObjectCollection<LanguageUsedInStoresError>
 * @method LanguageUsedInStoresError current()
 * @method LanguageUsedInStoresError at($offset)
 */
class LanguageUsedInStoresErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert LanguageUsedInStoresError $value
     * @psalm-param LanguageUsedInStoresError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return LanguageUsedInStoresErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof LanguageUsedInStoresError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?LanguageUsedInStoresError
     */
    protected function mapper()
    {
        return function (?int $index): ?LanguageUsedInStoresError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var LanguageUsedInStoresError $data */
                $data = LanguageUsedInStoresErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
