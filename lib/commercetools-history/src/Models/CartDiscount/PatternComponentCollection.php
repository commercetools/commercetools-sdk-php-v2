<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\CartDiscount;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<PatternComponent>
 * @method PatternComponent current()
 * @method PatternComponent end()
 * @method PatternComponent at($offset)
 */
class PatternComponentCollection extends MapperSequence
{
    /**
     * @psalm-assert PatternComponent $value
     * @psalm-param PatternComponent|stdClass $value
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
     * @psalm-return callable(int):?PatternComponent
     */
    protected function mapper()
    {
        return function (?int $index): ?PatternComponent {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PatternComponent $data */
                $data = PatternComponentModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
