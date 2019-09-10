<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductSlugChangedMessagePayload>
 * @method ProductSlugChangedMessagePayload current()
 * @method ProductSlugChangedMessagePayload at($offset)
 */
class ProductSlugChangedMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductSlugChangedMessagePayload $value
     * @psalm-param ProductSlugChangedMessagePayload|stdClass $value
     * @return ProductSlugChangedMessagePayloadCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ProductSlugChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSlugChangedMessagePayload
     */
    protected function mapper()
    {
        return function(int $index): ?ProductSlugChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductSlugChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}