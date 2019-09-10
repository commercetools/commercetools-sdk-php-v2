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
 * @extends MapperSequence<ProductRevertedStagedChangesMessagePayload>
 * @method ProductRevertedStagedChangesMessagePayload current()
 * @method ProductRevertedStagedChangesMessagePayload at($offset)
 */
class ProductRevertedStagedChangesMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductRevertedStagedChangesMessagePayload $value
     * @psalm-param ProductRevertedStagedChangesMessagePayload|stdClass $value
     * @return ProductRevertedStagedChangesMessagePayloadCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ProductRevertedStagedChangesMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductRevertedStagedChangesMessagePayload
     */
    protected function mapper()
    {
        return function(int $index): ?ProductRevertedStagedChangesMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductRevertedStagedChangesMessagePayloadModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}