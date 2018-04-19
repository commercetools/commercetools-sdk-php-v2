<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Channel\ChannelReference;
use Commercetools\Types\State\StateReference;
use Commercetools\Types\Common\ResourceIdentifier;
use Commercetools\Types\Product\ProductReference;
use Commercetools\Types\Type\CustomFieldsDraft;
use Commercetools\Types\Customer\CustomerReference;

class ReviewDraftModel extends JsonObjectModel implements ReviewDraft
{
    /**
     * @var string
     */
    protected $key;
    /**
     * @var string
     */
    protected $uniquenessValue;
    /**
     * @var string
     */
    protected $locale;
    /**
     * @var string
     */
    protected $authorName;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $text;
    /**
     * @var mixed
     */
    protected $target;
    /**
     * @var mixed
     */
    protected $state;
    /**
     * @var int
     */
    protected $rating;
    /**
     * @var CustomerReference
     */
    protected $customer;
    /**
     * @var CustomFieldsDraft
     */
    protected $custom;

    /**
     * @return string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            $value = $this->raw(ReviewDraft::FIELD_KEY);
            $value = (string)$value;
            $this->key = $value;
        }
        return $this->key;
    }
    /**
     * @return string
     */
    public function getUniquenessValue()
    {
        if (is_null($this->uniquenessValue)) {
            $value = $this->raw(ReviewDraft::FIELD_UNIQUENESS_VALUE);
            $value = (string)$value;
            $this->uniquenessValue = $value;
        }
        return $this->uniquenessValue;
    }
    /**
     * @return string
     */
    public function getLocale()
    {
        if (is_null($this->locale)) {
            $value = $this->raw(ReviewDraft::FIELD_LOCALE);
            $value = (string)$value;
            $this->locale = $value;
        }
        return $this->locale;
    }
    /**
     * @return string
     */
    public function getAuthorName()
    {
        if (is_null($this->authorName)) {
            $value = $this->raw(ReviewDraft::FIELD_AUTHOR_NAME);
            $value = (string)$value;
            $this->authorName = $value;
        }
        return $this->authorName;
    }
    /**
     * @return string
     */
    public function getTitle()
    {
        if (is_null($this->title)) {
            $value = $this->raw(ReviewDraft::FIELD_TITLE);
            $value = (string)$value;
            $this->title = $value;
        }
        return $this->title;
    }
    /**
     * @return string
     */
    public function getText()
    {
        if (is_null($this->text)) {
            $value = $this->raw(ReviewDraft::FIELD_TEXT);
            $value = (string)$value;
            $this->text = $value;
        }
        return $this->text;
    }
    /**
     * @return mixed
     */
    public function getTarget()
    {
        if (is_null($this->target)) {
            $value = $this->raw(ReviewDraft::FIELD_TARGET);
            $this->target = $value;
        }
        return $this->target;
    }
    /**
     * @return mixed
     */
    public function getState()
    {
        if (is_null($this->state)) {
            $value = $this->raw(ReviewDraft::FIELD_STATE);
            $this->state = $value;
        }
        return $this->state;
    }
    /**
     * @return int
     */
    public function getRating()
    {
        if (is_null($this->rating)) {
            $value = $this->raw(ReviewDraft::FIELD_RATING);
            $value = (int)$value;
            $this->rating = $value;
        }
        return $this->rating;
    }
    /**
     * @return CustomerReference
     */
    public function getCustomer()
    {
        if (is_null($this->customer)) {
            $value = $this->raw(ReviewDraft::FIELD_CUSTOMER);
            if (is_null($value)) {
                return $this->mapData(CustomerReference::class, null);
            }
            $value = $this->mapData(CustomerReference::class, $value);

            $this->customer = $value;
        }
        return $this->customer;
    }
    /**
     * @return CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            $value = $this->raw(ReviewDraft::FIELD_CUSTOM);
            if (is_null($value)) {
                return $this->mapData(CustomFieldsDraft::class, null);
            }
            $value = $this->mapData(CustomFieldsDraft::class, $value);

            $this->custom = $value;
        }
        return $this->custom;
    }

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key)
    {
        $this->key = (string)$key;

        return $this;
    }
    /**
     * @param string $uniquenessValue
     * @return $this
     */
    public function setUniquenessValue(string $uniquenessValue)
    {
        $this->uniquenessValue = (string)$uniquenessValue;

        return $this;
    }
    /**
     * @param string $locale
     * @return $this
     */
    public function setLocale(string $locale)
    {
        $this->locale = (string)$locale;

        return $this;
    }
    /**
     * @param string $authorName
     * @return $this
     */
    public function setAuthorName(string $authorName)
    {
        $this->authorName = (string)$authorName;

        return $this;
    }
    /**
     * @param string $title
     * @return $this
     */
    public function setTitle(string $title)
    {
        $this->title = (string)$title;

        return $this;
    }
    /**
     * @param string $text
     * @return $this
     */
    public function setText(string $text)
    {
        $this->text = (string)$text;

        return $this;
    }
    /**
     * @param $target
     * @return $this
     */
    public function setTarget($target)
    {
        $this->target = $target;

        return $this;
    }
    /**
     * @param $state
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }
    /**
     * @param int $rating
     * @return $this
     */
    public function setRating(int $rating)
    {
        $this->rating = (int)$rating;

        return $this;
    }
    /**
     * @param CustomerReference $customer
     * @return $this
     */
    public function setCustomer(CustomerReference $customer)
    {
        $this->customer = $customer;

        return $this;
    }
    /**
     * @param CustomFieldsDraft $custom
     * @return $this
     */
    public function setCustom(CustomFieldsDraft $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @return ProductReference
     */
    public function getTargetAsProductReference()
    {
        if (is_null($this->target)) {
            $value = $this->raw(ReviewDraft::FIELD_TARGET);
            if (is_null($value)) {
                return $this->mapData(ProductReference::class, null);
            }
            $value = $this->mapData(ProductReference::class, $value);

            $this->target = $value;
        }
        return $this->target;
    }

    /**
     * @return ChannelReference
     */
    public function getTargetAsChannelReference()
    {
        if (is_null($this->target)) {
            $value = $this->raw(ReviewDraft::FIELD_TARGET);
            if (is_null($value)) {
                return $this->mapData(ChannelReference::class, null);
            }
            $value = $this->mapData(ChannelReference::class, $value);

            $this->target = $value;
        }
        return $this->target;
    }

    /**
     * @return ResourceIdentifier
     */
    public function getStateAsResourceIdentifier()
    {
        if (is_null($this->state)) {
            $value = $this->raw(ReviewDraft::FIELD_STATE);
            if (is_null($value)) {
                return $this->mapData(ResourceIdentifier::class, null);
            }
            $value = $this->mapData(ResourceIdentifier::class, $value);

            $this->state = $value;
        }
        return $this->state;
    }

    /**
     * @return StateReference
     */
    public function getStateAsStateReference()
    {
        if (is_null($this->state)) {
            $value = $this->raw(ReviewDraft::FIELD_STATE);
            if (is_null($value)) {
                return $this->mapData(StateReference::class, null);
            }
            $value = $this->mapData(StateReference::class, $value);

            $this->state = $value;
        }
        return $this->state;
    }

}
