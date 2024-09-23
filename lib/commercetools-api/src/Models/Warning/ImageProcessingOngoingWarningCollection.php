<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Warning;

use Commercetools\Api\Models\Warning\WarningObjectCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends WarningObjectCollection<ImageProcessingOngoingWarning>
 * @method ImageProcessingOngoingWarning current()
 * @method ImageProcessingOngoingWarning end()
 * @method ImageProcessingOngoingWarning at($offset)
 */
class ImageProcessingOngoingWarningCollection extends WarningObjectCollection
{
    /**
     * @psalm-assert ImageProcessingOngoingWarning $value
     * @psalm-param ImageProcessingOngoingWarning|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ImageProcessingOngoingWarningCollection
     */
    public function add($value)
    {
        if (!$value instanceof ImageProcessingOngoingWarning) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ImageProcessingOngoingWarning
     */
    protected function mapper()
    {
        return function (?int $index): ?ImageProcessingOngoingWarning {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ImageProcessingOngoingWarning $data */
                $data = ImageProcessingOngoingWarningModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
