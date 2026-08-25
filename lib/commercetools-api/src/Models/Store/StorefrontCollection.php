<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<Storefront>
 * @method Storefront current()
 * @method Storefront end()
 * @method Storefront at($offset)
 */
class StorefrontCollection extends MapperSequence
{
    /**
     * @psalm-assert Storefront $value
     * @psalm-param Storefront|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StorefrontCollection
     */
    public function add($value)
    {
        if (!$value instanceof Storefront) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Storefront
     */
    protected function mapper()
    {
        return function (?int $index): ?Storefront {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var Storefront $data */
                $data = StorefrontModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
