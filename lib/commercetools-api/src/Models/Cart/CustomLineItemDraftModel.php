<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifierModel;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsModel;

final class CustomLineItemDraftModel extends JsonObjectModel implements CustomLineItemDraft
{
    
    public function __construct(
        ExternalTaxRateDraft $externalTaxRate = null,
        int $quantity = null,
        ItemShippingDetailsDraft $shippingDetails = null,
        Money $money = null,
        CustomFields $custom = null,
        LocalizedString $name = null,
        string $slug = null,
        TaxCategoryResourceIdentifier $taxCategory = null
    ) {
        $this->externalTaxRate = $externalTaxRate;
        $this->quantity = $quantity;
        $this->shippingDetails = $shippingDetails;
        $this->money = $money;
        $this->custom = $custom;
        $this->name = $name;
        $this->slug = $slug;
        $this->taxCategory = $taxCategory;
        
    }

    /**
     * @var ?ExternalTaxRateDraft
     */
    protected $externalTaxRate;
    
    /**
     * @var ?int
     */
    protected $quantity;
    
    /**
     * @var ?ItemShippingDetailsDraft
     */
    protected $shippingDetails;
    
    /**
     * @var ?Money
     */
    protected $money;
    
    /**
     * @var ?CustomFields
     */
    protected $custom;
    
    /**
     * @var ?LocalizedString
     */
    protected $name;
    
    /**
     * @var ?string
     */
    protected $slug;
    
    /**
     * @var ?TaxCategoryResourceIdentifier
     */
    protected $taxCategory;

    /**
     *
     * @return ExternalTaxRateDraft|null
     */
    final public function getExternalTaxRate()
    {
       if (is_null($this->externalTaxRate)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CustomLineItemDraft::FIELD_EXTERNAL_TAX_RATE);
           if (is_null($data)) {
               return null;
           }
           
           $this->externalTaxRate = ExternalTaxRateDraftModel::of($data);
       }
       return $this->externalTaxRate;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getQuantity()
    {
       if (is_null($this->quantity)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(CustomLineItemDraft::FIELD_QUANTITY);
           if (is_null($data)) {
               return null;
           }
           $this->quantity = (int)$data;
       }
       return $this->quantity;
    }
    
    /**
     *
     * @return ItemShippingDetailsDraft|null
     */
    final public function getShippingDetails()
    {
       if (is_null($this->shippingDetails)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CustomLineItemDraft::FIELD_SHIPPING_DETAILS);
           if (is_null($data)) {
               return null;
           }
           
           $this->shippingDetails = ItemShippingDetailsDraftModel::of($data);
       }
       return $this->shippingDetails;
    }
    
    /**
     *
     * @return Money|null
     */
    final public function getMoney()
    {
       if (is_null($this->money)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CustomLineItemDraft::FIELD_MONEY);
           if (is_null($data)) {
               return null;
           }
           
           $this->money = MoneyModel::of($data);
       }
       return $this->money;
    }
    
    /**
     *
     * @return CustomFields|null
     */
    final public function getCustom()
    {
       if (is_null($this->custom)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CustomLineItemDraft::FIELD_CUSTOM);
           if (is_null($data)) {
               return null;
           }
           
           $this->custom = CustomFieldsModel::of($data);
       }
       return $this->custom;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getName()
    {
       if (is_null($this->name)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CustomLineItemDraft::FIELD_NAME);
           if (is_null($data)) {
               return null;
           }
           
           $this->name = LocalizedStringModel::of($data);
       }
       return $this->name;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getSlug()
    {
       if (is_null($this->slug)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomLineItemDraft::FIELD_SLUG);
           if (is_null($data)) {
               return null;
           }
           $this->slug = (string)$data;
       }
       return $this->slug;
    }
    
    /**
     *
     * @return TaxCategoryResourceIdentifier|null
     */
    final public function getTaxCategory()
    {
       if (is_null($this->taxCategory)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CustomLineItemDraft::FIELD_TAX_CATEGORY);
           if (is_null($data)) {
               return null;
           }
           
           $this->taxCategory = TaxCategoryResourceIdentifierModel::of($data);
       }
       return $this->taxCategory;
    }
    final public function setExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate): void
    {
        $this->externalTaxRate = $externalTaxRate;
    }
    
    final public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }
    
    final public function setShippingDetails(?ItemShippingDetailsDraft $shippingDetails): void
    {
        $this->shippingDetails = $shippingDetails;
    }
    
    final public function setMoney(?Money $money): void
    {
        $this->money = $money;
    }
    
    final public function setCustom(?CustomFields $custom): void
    {
        $this->custom = $custom;
    }
    
    final public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }
    
    final public function setSlug(?string $slug): void
    {
        $this->slug = $slug;
    }
    
    final public function setTaxCategory(?TaxCategoryResourceIdentifier $taxCategory): void
    {
        $this->taxCategory = $taxCategory;
    }
    
}