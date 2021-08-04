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
 * @extends LabelCollection<LocalizedLabel>
 * @method LocalizedLabel current()
 * @method LocalizedLabel end()
 * @method LocalizedLabel at($offset)
 */
class LocalizedLabelCollection extends LabelCollection
{
    /**
     * @psalm-assert LocalizedLabel $value
     * @psalm-param LocalizedLabel|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return LocalizedLabelCollection
     */
    public function add($value)
    {
        if (!$value instanceof LocalizedLabel) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?LocalizedLabel
     */
    protected function mapper()
    {
        return function (?int $index): ?LocalizedLabel {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var LocalizedLabel $data */
                $data = LocalizedLabelModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
