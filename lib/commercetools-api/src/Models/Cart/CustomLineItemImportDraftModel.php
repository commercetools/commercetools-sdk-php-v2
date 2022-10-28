<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;
use Commercetools\Api\Models\Order\ItemStateCollection;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifierModel;
use Commercetools\Api\Models\TaxCategory\TaxRate;
use Commercetools\Api\Models\TaxCategory\TaxRateModel;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CustomLineItemImportDraftModel extends JsonObjectModel implements CustomLineItemImportDraft
{
    /**
     *
     * @var ?LocalizedString
     */
    protected $name;

    /**
     *
     * @var ?int
     */
    protected $quantity;

    /**
     *
     * @var ?Money
     */
    protected $money;

    /**
     *
     * @var ?string
     */
    protected $slug;

    /**
     *
     * @var ?ItemStateCollection
     */
    protected $state;

    /**
     *
     * @var ?TaxRate
     */
    protected $taxRate;

    /**
     *
     * @var ?TaxCategoryResourceIdentifier
     */
    protected $taxCategory;

    /**
     *
     * @var ?CustomFieldsDraft
     */
    protected $custom;

    /**
     *
     * @var ?ItemShippingDetailsDraft
     */
    protected $shippingDetails;

    /**
     *
     * @var ?string
     */
    protected $priceMode;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?LocalizedString $name = null,
        ?int $quantity = null,
        ?Money $money = null,
        ?string $slug = null,
        ?ItemStateCollection $state = null,
        ?TaxRate $taxRate = null,
        ?TaxCategoryResourceIdentifier $taxCategory = null,
        ?CustomFieldsDraft $custom = null,
        ?ItemShippingDetailsDraft $shippingDetails = null,
        ?string $priceMode = null
    ) {
        $this->name = $name;
        $this->quantity = $quantity;
        $this->money = $money;
        $this->slug = $slug;
        $this->state = $state;
        $this->taxRate = $taxRate;
        $this->taxCategory = $taxCategory;
        $this->custom = $custom;
        $this->shippingDetails = $shippingDetails;
        $this->priceMode = $priceMode;
    }

    /**
     *
     * @return null|LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }

            $this->name = LocalizedStringModel::of($data);
        }

        return $this->name;
    }

    /**
     * <p>The amount of a CustomLineItem in the cart.
     * Must be a positive integer.</p>
     *
     *
     * @return null|int
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->quantity = (int) $data;
        }

        return $this->quantity;
    }

    /**
     * <p>The cost to add to the cart. The amount can be negative.</p>
     *
     *
     * @return null|Money
     */
    public function getMoney()
    {
        if (is_null($this->money)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_MONEY);
            if (is_null($data)) {
                return null;
            }

            $this->money = MoneyModel::of($data);
        }

        return $this->money;
    }

    /**
     *
     * @return null|string
     */
    public function getSlug()
    {
        if (is_null($this->slug)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SLUG);
            if (is_null($data)) {
                return null;
            }
            $this->slug = (string) $data;
        }

        return $this->slug;
    }

    /**
     *
     * @return null|ItemStateCollection
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->state = ItemStateCollection::fromArray($data);
        }

        return $this->state;
    }

    /**
     *
     * @return null|TaxRate
     */
    public function getTaxRate()
    {
        if (is_null($this->taxRate)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TAX_RATE);
            if (is_null($data)) {
                return null;
            }

            $this->taxRate = TaxRateModel::of($data);
        }

        return $this->taxRate;
    }

    /**
     *
     * @return null|TaxCategoryResourceIdentifier
     */
    public function getTaxCategory()
    {
        if (is_null($this->taxCategory)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TAX_CATEGORY);
            if (is_null($data)) {
                return null;
            }

            $this->taxCategory = TaxCategoryResourceIdentifierModel::of($data);
        }

        return $this->taxCategory;
    }

    /**
     * <p>The custom fields.</p>
     *
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsDraftModel::of($data);
        }

        return $this->custom;
    }

    /**
     *
     * @return null|ItemShippingDetailsDraft
     */
    public function getShippingDetails()
    {
        if (is_null($this->shippingDetails)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SHIPPING_DETAILS);
            if (is_null($data)) {
                return null;
            }

            $this->shippingDetails = ItemShippingDetailsDraftModel::of($data);
        }

        return $this->shippingDetails;
    }

    /**
     * <ul>
     * <li>If <code>Standard</code>, Cart Discounts with a matching <a href="ctp:api:type:CartDiscountCustomLineItemsTarget">CartDiscountCustomLineItemsTarget</a>
     * are applied to the Custom Line Item.</li>
     * <li>If <code>External</code>, Cart Discounts are not considered on the Custom Line Item.</li>
     * </ul>
     *
     *
     * @return null|string
     */
    public function getPriceMode()
    {
        if (is_null($this->priceMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PRICE_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->priceMode = (string) $data;
        }

        return $this->priceMode;
    }


    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @param ?Money $money
     */
    public function setMoney(?Money $money): void
    {
        $this->money = $money;
    }

    /**
     * @param ?string $slug
     */
    public function setSlug(?string $slug): void
    {
        $this->slug = $slug;
    }

    /**
     * @param ?ItemStateCollection $state
     */
    public function setState(?ItemStateCollection $state): void
    {
        $this->state = $state;
    }

    /**
     * @param ?TaxRate $taxRate
     */
    public function setTaxRate(?TaxRate $taxRate): void
    {
        $this->taxRate = $taxRate;
    }

    /**
     * @param ?TaxCategoryResourceIdentifier $taxCategory
     */
    public function setTaxCategory(?TaxCategoryResourceIdentifier $taxCategory): void
    {
        $this->taxCategory = $taxCategory;
    }

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }

    /**
     * @param ?ItemShippingDetailsDraft $shippingDetails
     */
    public function setShippingDetails(?ItemShippingDetailsDraft $shippingDetails): void
    {
        $this->shippingDetails = $shippingDetails;
    }

    /**
     * @param ?string $priceMode
     */
    public function setPriceMode(?string $priceMode): void
    {
        $this->priceMode = $priceMode;
    }
}
