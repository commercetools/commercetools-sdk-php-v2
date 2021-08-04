<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<Variant>
 * @method Variant current()
 * @method Variant at($offset)
 */
class VariantCollection extends MapperSequence
{
    /**
     * @psalm-assert Variant $value
     * @psalm-param Variant|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantCollection
     */
    public function add($value)
    {
        if (!$value instanceof Variant) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Variant
     */
    protected function mapper()
    {
        return function (?int $index): ?Variant {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var Variant $data */
                $data = VariantModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
