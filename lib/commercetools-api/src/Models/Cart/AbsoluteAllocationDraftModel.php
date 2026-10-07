<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\HighPrecisionMoneyDraft;
use Commercetools\Api\Models\Common\HighPrecisionMoneyDraftModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class AbsoluteAllocationDraftModel extends JsonObjectModel implements AbsoluteAllocationDraft
{
    public const DISCRIMINATOR_VALUE = 'Absolute';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?HighPrecisionMoneyDraft
     */
    protected $amount;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?HighPrecisionMoneyDraft $amount = null,
        ?string $type = null
    ) {
        $this->amount = $amount;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     * <p>Type of the Allocation.</p>
     *
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>Amount of the Order total allocated to the Payment Method.</p>
     *
     *
     * @return null|HighPrecisionMoneyDraft
     */
    public function getAmount()
    {
        if (is_null($this->amount)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_AMOUNT);
            if (is_null($data)) {
                return null;
            }

            $this->amount = HighPrecisionMoneyDraftModel::of($data);
        }

        return $this->amount;
    }


    /**
     * @param ?HighPrecisionMoneyDraft $amount
     */
    public function setAmount(?HighPrecisionMoneyDraft $amount): void
    {
        $this->amount = $amount;
    }
}
