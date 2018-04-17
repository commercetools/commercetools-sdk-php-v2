<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Channel\ChannelReference;
use Commercetools\Types\State\StateReference;
use Commercetools\Types\Common\ResourceIdentifier;
use Commercetools\Types\Product\ProductReference;
use Commercetools\Types\Type\CustomFieldsDraft;
use Commercetools\Types\Customer\CustomerReference;

interface ReviewDraft extends JsonObject {
    const FIELD_KEY = 'key';
    const FIELD_UNIQUENESS_VALUE = 'uniquenessValue';
    const FIELD_LOCALE = 'locale';
    const FIELD_AUTHOR_NAME = 'authorName';
    const FIELD_TITLE = 'title';
    const FIELD_TEXT = 'text';
    const FIELD_TARGET = 'target';
    const FIELD_STATE = 'state';
    const FIELD_RATING = 'rating';
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
    public function getState();

    /**
     * @return int
     */
    public function getRating();

    /**
     * @return CustomerReference
     */
    public function getCustomer();

    /**
     * @return CustomFieldsDraft
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
     * @param mixed $state
     * @return $this
     */
    public function setState($state);

    /**
     * @param int $rating
     * @return $this
     */
    public function setRating(int $rating);

    /**
     * @param CustomerReference $customer
     * @return $this
     */
    public function setCustomer(CustomerReference $customer);

    /**
     * @param CustomFieldsDraft $custom
     * @return $this
     */
    public function setCustom(CustomFieldsDraft $custom);

    /**
     * @return ProductReference
     */
    public function getTargetAsProductReference();

    /**
     * @return ChannelReference
     */
    public function getTargetAsChannelReference();

    /**
     * @return ResourceIdentifier
     */
    public function getStateAsResourceIdentifier();

    /**
     * @return StateReference
     */
    public function getStateAsStateReference();

}
