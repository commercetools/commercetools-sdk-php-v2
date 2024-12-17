<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\History\Models\ChangeValue\ChangeTargetChangeValueCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ChangeTargetChangeValueCollection<ChangeTargetPatternChangeValue>
 * @method ChangeTargetPatternChangeValue current()
 * @method ChangeTargetPatternChangeValue end()
 * @method ChangeTargetPatternChangeValue at($offset)
 */
class ChangeTargetPatternChangeValueCollection extends ChangeTargetChangeValueCollection
{
    /**
     * @psalm-assert ChangeTargetPatternChangeValue $value
     * @psalm-param ChangeTargetPatternChangeValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeTargetPatternChangeValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeTargetPatternChangeValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeTargetPatternChangeValue
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeTargetPatternChangeValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeTargetPatternChangeValue $data */
                $data = ChangeTargetPatternChangeValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
