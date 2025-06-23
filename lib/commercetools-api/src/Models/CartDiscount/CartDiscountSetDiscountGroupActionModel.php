<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\DiscountGroup\DiscountGroupResourceIdentifier;
use Commercetools\Api\Models\DiscountGroup\DiscountGroupResourceIdentifierModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CartDiscountSetDiscountGroupActionModel extends JsonObjectModel implements CartDiscountSetDiscountGroupAction
{
    public const DISCRIMINATOR_VALUE = 'setDiscountGroup';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?DiscountGroupResourceIdentifier
     */
    protected $discountGroup;

    /**
     *
     * @var ?string
     */
    protected $sortOrder;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?DiscountGroupResourceIdentifier $discountGroup = null,
        ?string $sortOrder = null,
        ?string $action = null
    ) {
        $this->discountGroup = $discountGroup;
        $this->sortOrder = $sortOrder;
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
     * <p>Reference to a DiscountGroup that the Cart Discount must belong to.
     * If empty, any existing value will be removed.</p>
     *
     *
     * @return null|DiscountGroupResourceIdentifier
     */
    public function getDiscountGroup()
    {
        if (is_null($this->discountGroup)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DISCOUNT_GROUP);
            if (is_null($data)) {
                return null;
            }

            $this->discountGroup = DiscountGroupResourceIdentifierModel::of($data);
        }

        return $this->discountGroup;
    }

    /**
     * <p>New value to set (between <code>0</code> and <code>1</code>) that determines the order in which the CartDiscounts are applied; a CartDiscount with a higher value is prioritized.</p>
     * <p>Required if <code>discountGroup</code> is absent. If <code>discountGroup</code> is set, the CartDiscount will use the sort order of the DiscountGroup.</p>
     *
     *
     * @return null|string
     */
    public function getSortOrder()
    {
        if (is_null($this->sortOrder)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SORT_ORDER);
            if (is_null($data)) {
                return null;
            }
            $this->sortOrder = (string) $data;
        }

        return $this->sortOrder;
    }


    /**
     * @param ?DiscountGroupResourceIdentifier $discountGroup
     */
    public function setDiscountGroup(?DiscountGroupResourceIdentifier $discountGroup): void
    {
        $this->discountGroup = $discountGroup;
    }

    /**
     * @param ?string $sortOrder
     */
    public function setSortOrder(?string $sortOrder): void
    {
        $this->sortOrder = $sortOrder;
    }
}
