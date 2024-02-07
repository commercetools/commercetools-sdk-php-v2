<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\DiscountCode\DiscountCode;
use Commercetools\Api\Models\DiscountCode\DiscountCodeModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class DiscountCodeCreatedMessagePayloadModel extends JsonObjectModel implements DiscountCodeCreatedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'DiscountCodeCreated';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?DiscountCode
     */
    protected $discountCode;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?DiscountCode $discountCode = null,
        ?string $type = null
    ) {
        $this->discountCode = $discountCode;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
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
     * <p>The <a href="ctp:api:type:DiscountCode">Discount Code</a> that was created.</p>
     *
     *
     * @return null|DiscountCode
     */
    public function getDiscountCode()
    {
        if (is_null($this->discountCode)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DISCOUNT_CODE);
            if (is_null($data)) {
                return null;
            }

            $this->discountCode = DiscountCodeModel::of($data);
        }

        return $this->discountCode;
    }


    /**
     * @param ?DiscountCode $discountCode
     */
    public function setDiscountCode(?DiscountCode $discountCode): void
    {
        $this->discountCode = $discountCode;
    }
}
