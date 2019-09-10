<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Review;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Customer\CustomerResourceIdentifier;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifierModel;
use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Api\Models\State\StateResourceIdentifierModel;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;

final class ReviewDraftModel extends JsonObjectModel implements ReviewDraft
{
    
    public function __construct(
        string $uniquenessValue = null,
        string $authorName = null,
        CustomFieldsDraft $custom = null,
        int $rating = null,
        StateResourceIdentifier $state = null,
        string $text = null,
        string $title = null,
        string $locale = null,
        string $key = null,
        CustomerResourceIdentifier $customer = null,
        JsonObject $target = null
    ) {
        $this->uniquenessValue = $uniquenessValue;
        $this->authorName = $authorName;
        $this->custom = $custom;
        $this->rating = $rating;
        $this->state = $state;
        $this->text = $text;
        $this->title = $title;
        $this->locale = $locale;
        $this->key = $key;
        $this->customer = $customer;
        $this->target = $target;
        
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
     * @var ?CustomFieldsDraft
     */
    protected $custom;
    
    /**
     * @var ?int
     */
    protected $rating;
    
    /**
     * @var ?StateResourceIdentifier
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
     * @var ?CustomerResourceIdentifier
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
       if (is_null($this->uniquenessValue)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ReviewDraft::FIELD_UNIQUENESS_VALUE);
           if (is_null($data)) {
               return null;
           }
           $this->uniquenessValue = (string)$data;
       }
       return $this->uniquenessValue;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getAuthorName()
    {
       if (is_null($this->authorName)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ReviewDraft::FIELD_AUTHOR_NAME);
           if (is_null($data)) {
               return null;
           }
           $this->authorName = (string)$data;
       }
       return $this->authorName;
    }
    
    /**
     *
     * @return CustomFieldsDraft|null
     */
    final public function getCustom()
    {
       if (is_null($this->custom)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ReviewDraft::FIELD_CUSTOM);
           if (is_null($data)) {
               return null;
           }
           
           $this->custom = CustomFieldsDraftModel::of($data);
       }
       return $this->custom;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getRating()
    {
       if (is_null($this->rating)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(ReviewDraft::FIELD_RATING);
           if (is_null($data)) {
               return null;
           }
           $this->rating = (int)$data;
       }
       return $this->rating;
    }
    
    /**
     *
     * @return StateResourceIdentifier|null
     */
    final public function getState()
    {
       if (is_null($this->state)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ReviewDraft::FIELD_STATE);
           if (is_null($data)) {
               return null;
           }
           
           $this->state = StateResourceIdentifierModel::of($data);
       }
       return $this->state;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getText()
    {
       if (is_null($this->text)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ReviewDraft::FIELD_TEXT);
           if (is_null($data)) {
               return null;
           }
           $this->text = (string)$data;
       }
       return $this->text;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getTitle()
    {
       if (is_null($this->title)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ReviewDraft::FIELD_TITLE);
           if (is_null($data)) {
               return null;
           }
           $this->title = (string)$data;
       }
       return $this->title;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getLocale()
    {
       if (is_null($this->locale)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ReviewDraft::FIELD_LOCALE);
           if (is_null($data)) {
               return null;
           }
           $this->locale = (string)$data;
       }
       return $this->locale;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getKey()
    {
       if (is_null($this->key)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ReviewDraft::FIELD_KEY);
           if (is_null($data)) {
               return null;
           }
           $this->key = (string)$data;
       }
       return $this->key;
    }
    
    /**
     *
     * @return CustomerResourceIdentifier|null
     */
    final public function getCustomer()
    {
       if (is_null($this->customer)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ReviewDraft::FIELD_CUSTOMER);
           if (is_null($data)) {
               return null;
           }
           
           $this->customer = CustomerResourceIdentifierModel::of($data);
       }
       return $this->customer;
    }
    
    /**
     *
     * @return JsonObject|null
     */
    final public function getTarget()
    {
       if (is_null($this->target)) {
           /** @psalm-var ?stdClass $data */
           $data = $this->raw(ReviewDraft::FIELD_TARGET);
           if (is_null($data)) {
               return null;
           }
           $this->target = JsonObjectModel::of($data);
       }
       return $this->target;
    }
    final public function setUniquenessValue(?string $uniquenessValue): void
    {
        $this->uniquenessValue = $uniquenessValue;
    }
    
    final public function setAuthorName(?string $authorName): void
    {
        $this->authorName = $authorName;
    }
    
    final public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }
    
    final public function setRating(?int $rating): void
    {
        $this->rating = $rating;
    }
    
    final public function setState(?StateResourceIdentifier $state): void
    {
        $this->state = $state;
    }
    
    final public function setText(?string $text): void
    {
        $this->text = $text;
    }
    
    final public function setTitle(?string $title): void
    {
        $this->title = $title;
    }
    
    final public function setLocale(?string $locale): void
    {
        $this->locale = $locale;
    }
    
    final public function setKey(?string $key): void
    {
        $this->key = $key;
    }
    
    final public function setCustomer(?CustomerResourceIdentifier $customer): void
    {
        $this->customer = $customer;
    }
    
    final public function setTarget(?JsonObject $target): void
    {
        $this->target = $target;
    }
    
}