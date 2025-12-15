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
 * @extends LabelCollection<StandalonePriceLabel>
 * @method StandalonePriceLabel current()
 * @method StandalonePriceLabel end()
 * @method StandalonePriceLabel at($offset)
 */
class StandalonePriceLabelCollection extends LabelCollection
{
    /**
     * @psalm-assert StandalonePriceLabel $value
     * @psalm-param StandalonePriceLabel|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceLabelCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceLabel) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceLabel
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceLabel {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceLabel $data */
                $data = StandalonePriceLabelModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
