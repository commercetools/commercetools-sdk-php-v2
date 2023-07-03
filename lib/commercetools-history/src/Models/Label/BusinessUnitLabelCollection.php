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
 * @extends LabelCollection<BusinessUnitLabel>
 * @method BusinessUnitLabel current()
 * @method BusinessUnitLabel end()
 * @method BusinessUnitLabel at($offset)
 */
class BusinessUnitLabelCollection extends LabelCollection
{
    /**
     * @psalm-assert BusinessUnitLabel $value
     * @psalm-param BusinessUnitLabel|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitLabelCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitLabel) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitLabel
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitLabel {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitLabel $data */
                $data = BusinessUnitLabelModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
