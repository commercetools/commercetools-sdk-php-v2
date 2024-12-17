<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of PatternComponent
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method PatternComponent current()
 * @method PatternComponent end()
 * @method PatternComponent at($offset)
 */
class PatternComponentCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PatternComponentCollection
     */
    public function add($value)
    {
        if (!$value instanceof PatternComponent) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?T
     */
    protected function mapper()
    {
        return function (?int $index): ?PatternComponent {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = PatternComponentModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
