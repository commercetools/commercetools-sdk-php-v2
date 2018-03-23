<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Types\Common\ResourceModel;

use Commercetools\Types\State\StateReference;
use Commercetools\Types\Customer\CustomerReference;
use Commercetools\Types\Type\CustomFields;
use Commercetools\Builder\ReviewUpdateBuilder;
use Commercetools\Types\Common\Resource;

class ReviewModel extends ResourceModel implements Review {
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
    protected $includedInStatistics;
    /**
     * @var int
     */
    protected $rating;
    /**
     * @var StateReference
     */
    protected $state;
    /**
     * @var CustomerReference
     */
    protected $customer;
    /**
     * @var CustomFields
     */
    protected $custom;

    /**
     * @return string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            $value = $this->raw(Review::FIELD_KEY);
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
            $value = $this->raw(Review::FIELD_UNIQUENESS_VALUE);
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
            $value = $this->raw(Review::FIELD_LOCALE);
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
            $value = $this->raw(Review::FIELD_AUTHOR_NAME);
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
            $value = $this->raw(Review::FIELD_TITLE);
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
            $value = $this->raw(Review::FIELD_TEXT);
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
            $value = $this->raw(Review::FIELD_TARGET);
            $this->target = $value;
        }
        return $this->target;
    }
    /**
     * @return mixed
     */
    public function getIncludedInStatistics()
    {
        if (is_null($this->includedInStatistics)) {
            $value = $this->raw(Review::FIELD_INCLUDED_IN_STATISTICS);
            $this->includedInStatistics = $value;
        }
        return $this->includedInStatistics;
    }
    /**
     * @return int
     */
    public function getRating()
    {
        if (is_null($this->rating)) {
            $value = $this->raw(Review::FIELD_RATING);
            $value = (int)$value;
            $this->rating = $value;
        }
        return $this->rating;
    }
    /**
     * @return StateReference
     */
    public function getState()
    {
        if (is_null($this->state)) {
            $value = $this->raw(Review::FIELD_STATE);
            if (is_null($value)) {
                return $this->mapData(StateReference::class, null);
            }
            $value = $this->mapData(StateReference::class, $value);

            $this->state = $value;
        }
        return $this->state;
    }
    /**
     * @return CustomerReference
     */
    public function getCustomer()
    {
        if (is_null($this->customer)) {
            $value = $this->raw(Review::FIELD_CUSTOMER);
            if (is_null($value)) {
                return $this->mapData(CustomerReference::class, null);
            }
            $value = $this->mapData(CustomerReference::class, $value);

            $this->customer = $value;
        }
        return $this->customer;
    }
    /**
     * @return CustomFields
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            $value = $this->raw(Review::FIELD_CUSTOM);
            if (is_null($value)) {
                return $this->mapData(CustomFields::class, null);
            }
            $value = $this->mapData(CustomFields::class, $value);

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
     * @param $includedInStatistics
     * @return $this
     */
    public function setIncludedInStatistics($includedInStatistics)
    {
        $this->includedInStatistics = $includedInStatistics;

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
     * @param StateReference $state
     * @return $this
     */
    public function setState(StateReference $state)
    {
        $this->state = $state;

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
     * @param CustomFields $custom
     * @return $this
     */
    public function setCustom(CustomFields $custom)
    {
        $this->custom = $custom;

        return $this;
    }


    /**
     * @return ReviewUpdateBuilder
     */
    public function update()
    {
        $builder = new ReviewUpdateBuilder();
        $builder->setMapper($this->getMapper());
        $builder->with($this);
        return $builder;
    }
}
