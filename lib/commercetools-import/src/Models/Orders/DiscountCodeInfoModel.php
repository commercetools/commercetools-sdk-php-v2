<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\DiscountCodeKeyReference;
use Commercetools\Import\Models\Common\DiscountCodeKeyReferenceModel;
use stdClass;

/**
 * @internal
 */
final class DiscountCodeInfoModel extends JsonObjectModel implements DiscountCodeInfo
{
    /**
     * @var ?DiscountCodeKeyReference
     */
    protected $discountCode;

    /**
     * @var ?string
     */
    protected $state;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?DiscountCodeKeyReference $discountCode = null,
        ?string $state = null
    ) {
        $this->discountCode = $discountCode;
        $this->state = $state;
    }

    /**
     * <p>References a discount code by its key.</p>
     *
     * @return null|DiscountCodeKeyReference
     */
    public function getDiscountCode()
    {
        if (is_null($this->discountCode)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DISCOUNT_CODE);
            if (is_null($data)) {
                return null;
            }

            $this->discountCode = DiscountCodeKeyReferenceModel::of($data);
        }

        return $this->discountCode;
    }

    /**
     * <p>Maps to <code>DiscountCodeInfo.state</code></p>
     *
     * @return null|string
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->state = (string) $data;
        }

        return $this->state;
    }


    /**
     * @param ?DiscountCodeKeyReference $discountCode
     */
    public function setDiscountCode(?DiscountCodeKeyReference $discountCode): void
    {
        $this->discountCode = $discountCode;
    }

    /**
     * @param ?string $state
     */
    public function setState(?string $state): void
    {
        $this->state = $state;
    }
}
