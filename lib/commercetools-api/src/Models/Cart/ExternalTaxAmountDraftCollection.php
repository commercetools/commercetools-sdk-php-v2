<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ExternalTaxAmountDraft>
 * @method ExternalTaxAmountDraft current()
 * @method ExternalTaxAmountDraft at($offset)
 */
class ExternalTaxAmountDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ExternalTaxAmountDraft $value
     * @psalm-param ExternalTaxAmountDraft|stdClass $value
     * @return ExternalTaxAmountDraftCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ExternalTaxAmountDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ExternalTaxAmountDraft
     */
    protected function mapper()
    {
        return function(int $index): ?ExternalTaxAmountDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ExternalTaxAmountDraftModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}