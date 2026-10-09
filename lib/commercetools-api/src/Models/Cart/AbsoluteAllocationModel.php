<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\HighPrecisionMoney;
use Commercetools\Api\Models\Common\HighPrecisionMoneyModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class AbsoluteAllocationModel extends JsonObjectModel implements AbsoluteAllocation
{
    public const DISCRIMINATOR_VALUE = 'Absolute';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?HighPrecisionMoney
     */
    protected $amount;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?HighPrecisionMoney $amount = null,
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
     * @return null|HighPrecisionMoney
     */
    public function getAmount()
    {
        if (is_null($this->amount)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_AMOUNT);
            if (is_null($data)) {
                return null;
            }

            $this->amount = HighPrecisionMoneyModel::of($data);
        }

        return $this->amount;
    }


    /**
     * @param ?HighPrecisionMoney $amount
     */
    public function setAmount(?HighPrecisionMoney $amount): void
    {
        $this->amount = $amount;
    }
}
