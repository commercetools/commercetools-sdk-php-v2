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
 * @extends LabelCollection<CustomObjectLabel>
 * @method CustomObjectLabel current()
 * @method CustomObjectLabel end()
 * @method CustomObjectLabel at($offset)
 */
class CustomObjectLabelCollection extends LabelCollection
{
    /**
     * @psalm-assert CustomObjectLabel $value
     * @psalm-param CustomObjectLabel|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomObjectLabelCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomObjectLabel) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomObjectLabel
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomObjectLabel {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomObjectLabel $data */
                $data = CustomObjectLabelModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
