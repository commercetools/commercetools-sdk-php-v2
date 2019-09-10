<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Review;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifier;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifierBuilder;
use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Api\Models\State\StateResourceIdentifierBuilder;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;

/**
 * @implements Builder<ReviewDraft>
 */
final class ReviewDraftBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $uniquenessValue;
    
    /**
     * @var ?string
     */
    protected $authorName;
    
    /**
     * @var ?CustomFieldsDraftBuilder|CustomFieldsDraft
     */
    protected $custom;
    
    /**
     * @var ?int
     */
    protected $rating;
    
    /**
     * @var ?StateResourceIdentifierBuilder|StateResourceIdentifier
     */
    protected $state;
    
    /**
     * @var ?string
     */
    protected $text;
    
    /**
     * @var ?string
     */
    protected $title;
    
    /**
     * @var ?string
     */
    protected $locale;
    
    /**
     * @var ?string
     */
    protected $key;
    
    /**
     * @var ?CustomerResourceIdentifierBuilder|CustomerResourceIdentifier
     */
    protected $customer;
    
    /**
     * @var ?JsonObject
     */
    protected $target;

    /**
     *
     * @return string|null
     */
    final public function getUniquenessValue()
    {
       return $this->uniquenessValue;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getAuthorName()
    {
       return $this->authorName;
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
     * @return int|null
     */
    final public function getRating()
    {
       return $this->rating;
    }
    
    /**
     *
     * @return StateResourceIdentifier|null
     */
    final public function getState()
    {
       return ($this->state instanceof StateResourceIdentifierBuilder ? $this->state->build() : $this->state);
    }
    
    /**
     *
     * @return string|null
     */
    final public function getText()
    {
       return $this->text;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getTitle()
    {
       return $this->title;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getLocale()
    {
       return $this->locale;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getKey()
    {
       return $this->key;
    }
    
    /**
     *
     * @return CustomerResourceIdentifier|null
     */
    final public function getCustomer()
    {
       return ($this->customer instanceof CustomerResourceIdentifierBuilder ? $this->customer->build() : $this->customer);
    }
    
    /**
     *
     * @return JsonObject|null
     */
    final public function getTarget()
    {
       return $this->target;
    }
    /**
     * @return $this
     */
    final public function withUniquenessValue(?string $uniquenessValue)
    {
        $this->uniquenessValue = $uniquenessValue;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAuthorName(?string $authorName)
    {
        $this->authorName = $authorName;
        
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
    final public function withRating(?int $rating)
    {
        $this->rating = $rating;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withState(?StateResourceIdentifier $state)
    {
        $this->state = $state;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withText(?string $text)
    {
        $this->text = $text;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTitle(?string $title)
    {
        $this->title = $title;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withLocale(?string $locale)
    {
        $this->locale = $locale;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withKey(?string $key)
    {
        $this->key = $key;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustomer(?CustomerResourceIdentifier $customer)
    {
        $this->customer = $customer;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTarget(?JsonObject $target)
    {
        $this->target = $target;
        
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
    final public function withStateBuilder(?StateResourceIdentifierBuilder $state)
    {
        $this->state = $state;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustomerBuilder(?CustomerResourceIdentifierBuilder $customer)
    {
        $this->customer = $customer;
        
        return $this;
    }
    
    public function build(): ReviewDraft {
        return new ReviewDraftModel(
            $this->uniquenessValue,
            $this->authorName,
            ($this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom),
            $this->rating,
            ($this->state instanceof StateResourceIdentifierBuilder ? $this->state->build() : $this->state),
            $this->text,
            $this->title,
            $this->locale,
            $this->key,
            ($this->customer instanceof CustomerResourceIdentifierBuilder ? $this->customer->build() : $this->customer),
            $this->target
        );
    }
    
    public static function of(): ReviewDraftBuilder
    {
        return new self();
    }
}