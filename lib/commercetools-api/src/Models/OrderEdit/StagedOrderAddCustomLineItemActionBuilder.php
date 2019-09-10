<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Cart\ExternalTaxRateDraft;
use Commercetools\Api\Models\Cart\ExternalTaxRateDraftBuilder;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionBuilder;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifierBuilder;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;

/**
 * @implements Builder<StagedOrderAddCustomLineItemAction>
 */
final class StagedOrderAddCustomLineItemActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?ExternalTaxRateDraftBuilder|ExternalTaxRateDraft
     */
    protected $externalTaxRate;
    
    /**
     * @var ?int
     */
    protected $quantity;
    
    /**
     * @var ?MoneyBuilder|Money
     */
    protected $money;
    
    /**
     * @var ?CustomFieldsDraftBuilder|CustomFieldsDraft
     */
    protected $custom;
    
    /**
     * @var ?LocalizedStringBuilder|LocalizedString
     */
    protected $name;
    
    /**
     * @var ?string
     */
    protected $slug;
    
    /**
     * @var ?TaxCategoryResourceIdentifierBuilder|TaxCategoryResourceIdentifier
     */
    protected $taxCategory;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       return $this->action;
    }
    
    /**
     *
     * @return ExternalTaxRateDraft|null
     */
    final public function getExternalTaxRate()
    {
       return ($this->externalTaxRate instanceof ExternalTaxRateDraftBuilder ? $this->externalTaxRate->build() : $this->externalTaxRate);
    }
    
    /**
     *
     * @return int|null
     */
    final public function getQuantity()
    {
       return $this->quantity;
    }
    
    /**
     *
     * @return Money|null
     */
    final public function getMoney()
    {
       return ($this->money instanceof MoneyBuilder ? $this->money->build() : $this->money);
    }
    
    /**
     *
     * @return CustomFieldsDraft|null
     */
    final public function getCustom()
    {
       return ($this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom);
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getName()
    {
       return ($this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name);
    }
    
    /**
     *
     * @return string|null
     */
    final public function getSlug()
    {
       return $this->slug;
    }
    
    /**
     *
     * @return TaxCategoryResourceIdentifier|null
     */
    final public function getTaxCategory()
    {
       return ($this->taxCategory instanceof TaxCategoryResourceIdentifierBuilder ? $this->taxCategory->build() : $this->taxCategory);
    }
    /**
     * @return $this
     */
    final public function withAction(?string $action)
    {
        $this->action = $action;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate)
    {
        $this->externalTaxRate = $externalTaxRate;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withQuantity(?int $quantity)
    {
        $this->quantity = $quantity;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withMoney(?Money $money)
    {
        $this->money = $money;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustom(?CustomFieldsDraft $custom)
    {
        $this->custom = $custom;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withName(?LocalizedString $name)
    {
        $this->name = $name;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withSlug(?string $slug)
    {
        $this->slug = $slug;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTaxCategory(?TaxCategoryResourceIdentifier $taxCategory)
    {
        $this->taxCategory = $taxCategory;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withExternalTaxRateBuilder(?ExternalTaxRateDraftBuilder $externalTaxRate)
    {
        $this->externalTaxRate = $externalTaxRate;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withMoneyBuilder(?MoneyBuilder $money)
    {
        $this->money = $money;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustomBuilder(?CustomFieldsDraftBuilder $custom)
    {
        $this->custom = $custom;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withNameBuilder(?LocalizedStringBuilder $name)
    {
        $this->name = $name;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTaxCategoryBuilder(?TaxCategoryResourceIdentifierBuilder $taxCategory)
    {
        $this->taxCategory = $taxCategory;
        
        return $this;
    }
    
    public function build(): StagedOrderAddCustomLineItemAction {
        return new StagedOrderAddCustomLineItemActionModel(
            $this->action,
            ($this->externalTaxRate instanceof ExternalTaxRateDraftBuilder ? $this->externalTaxRate->build() : $this->externalTaxRate),
            $this->quantity,
            ($this->money instanceof MoneyBuilder ? $this->money->build() : $this->money),
            ($this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom),
            ($this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name),
            $this->slug,
            ($this->taxCategory instanceof TaxCategoryResourceIdentifierBuilder ? $this->taxCategory->build() : $this->taxCategory)
        );
    }
    
    public static function of(): StagedOrderAddCustomLineItemActionBuilder
    {
        return new self();
    }
}