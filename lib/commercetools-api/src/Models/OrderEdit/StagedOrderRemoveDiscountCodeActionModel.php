<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\DiscountCode\DiscountCodeReference;
use Commercetools\Api\Models\DiscountCode\DiscountCodeReferenceModel;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StagedOrderRemoveDiscountCodeActionModel extends JsonObjectModel implements StagedOrderRemoveDiscountCodeAction
{
    public const DISCRIMINATOR_VALUE = 'removeDiscountCode';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?DiscountCodeReference
     */
    protected $discountCode;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?DiscountCodeReference $discountCode = null,
        ?string $action = null
    ) {
        $this->discountCode = $discountCode;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to a <a href="ctp:api:type:DiscountCode">DiscountCode</a>.</p>
     *
     *
     * @return null|DiscountCodeReference
     */
    public function getDiscountCode()
    {
        if (is_null($this->discountCode)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DISCOUNT_CODE);
            if (is_null($data)) {
                return null;
            }

            $this->discountCode = DiscountCodeReferenceModel::of($data);
        }

        return $this->discountCode;
    }


    /**
     * @param ?DiscountCodeReference $discountCode
     */
    public function setDiscountCode(?DiscountCodeReference $discountCode): void
    {
        $this->discountCode = $discountCode;
    }
}
