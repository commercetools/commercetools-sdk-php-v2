<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Label;

use Commercetools\History\Models\Label\LabelCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends LabelCollection<StringLabel>
 * @method StringLabel current()
 * @method StringLabel end()
 * @method StringLabel at($offset)
 */
class StringLabelCollection extends LabelCollection
{
    /**
     * @psalm-assert StringLabel $value
     * @psalm-param StringLabel|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StringLabelCollection
     */
    public function add($value)
    {
        if (!$value instanceof StringLabel) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StringLabel
     */
    protected function mapper()
    {
        return function (?int $index): ?StringLabel {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StringLabel $data */
                $data = StringLabelModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
