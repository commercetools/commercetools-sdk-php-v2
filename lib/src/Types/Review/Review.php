<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Types\State\StateReference;
use Commercetools\Types\Channel\ChannelReference;
use Commercetools\Types\Product\ProductReference;
use Commercetools\Types\Customer\CustomerReference;
use Commercetools\Types\Type\CustomFields;
use Commercetools\Builder\ReviewUpdateBuilder;
use Commercetools\Types\Common\Resource;

interface Review extends Resource
{
    const FIELD_KEY = 'key';
    const FIELD_UNIQUENESS_VALUE = 'uniquenessValue';
    const FIELD_LOCALE = 'locale';
    const FIELD_AUTHOR_NAME = 'authorName';
    const FIELD_TITLE = 'title';
    const FIELD_TEXT = 'text';
    const FIELD_TARGET = 'target';
    const FIELD_INCLUDED_IN_STATISTICS = 'includedInStatistics';
    const FIELD_RATING = 'rating';
    const FIELD_STATE = 'state';
    const FIELD_CUSTOMER = 'customer';
    const FIELD_CUSTOM = 'custom';

    /**
     * @return string
     */
    public function getKey();

    /**
     * @return string
     */
    public function getUniquenessValue();

    /**
     * @return string
     */
    public function getLocale();

    /**
     * @return string
     */
    public function getAuthorName();

    /**
     * @return string
     */
    public function getTitle();

    /**
     * @return string
     */
    public function getText();

    /**
     * @return mixed
     */
    public function getTarget();

    /**
     * @return mixed
     */
    public function getIncludedInStatistics();

    /**
     * @return int
     */
    public function getRating();

    /**
     * @return StateReference
     */
    public function getState();

    /**
     * @return CustomerReference
     */
    public function getCustomer();

    /**
     * @return CustomFields
     */
    public function getCustom();

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key);

    /**
     * @param string $uniquenessValue
     * @return $this
     */
    public function setUniquenessValue(string $uniquenessValue);

    /**
     * @param string $locale
     * @return $this
     */
    public function setLocale(string $locale);

    /**
     * @param string $authorName
     * @return $this
     */
    public function setAuthorName(string $authorName);

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle(string $title);

    /**
     * @param string $text
     * @return $this
     */
    public function setText(string $text);

    /**
     * @param mixed $target
     * @return $this
     */
    public function setTarget($target);

    /**
     * @param mixed $includedInStatistics
     * @return $this
     */
    public function setIncludedInStatistics($includedInStatistics);

    /**
     * @param int $rating
     * @return $this
     */
    public function setRating(int $rating);

    /**
     * @param StateReference $state
     * @return $this
     */
    public function setState(StateReference $state);

    /**
     * @param CustomerReference $customer
     * @return $this
     */
    public function setCustomer(CustomerReference $customer);

    /**
     * @param CustomFields $custom
     * @return $this
     */
    public function setCustom(CustomFields $custom);

    /**
     * @return ProductReference
     */
    public function getTargetAsProductReference();

    /**
     * @return ChannelReference
     */
    public function getTargetAsChannelReference();

    /**
     * @return ReviewUpdateBuilder
     */
    public function update();
}
