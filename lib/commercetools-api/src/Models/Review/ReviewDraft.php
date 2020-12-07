<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifier;
use Commercetools\Api\Models\Product\ProductResourceIdentifier;
use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ReviewDraft extends JsonObject
{
    public const FIELD_KEY = 'key';
    public const FIELD_UNIQUENESS_VALUE = 'uniquenessValue';
    public const FIELD_LOCALE = 'locale';
    public const FIELD_AUTHOR_NAME = 'authorName';
    public const FIELD_TITLE = 'title';
    public const FIELD_TEXT = 'text';
    public const FIELD_TARGET = 'target';
    public const FIELD_STATE = 'state';
    public const FIELD_RATING = 'rating';
    public const FIELD_CUSTOMER = 'customer';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>User-specific unique identifier for the review.</p>
     *
     * @return null|string
     */
    public function getKey();

    /**
     * <p>If set, this value must be unique among reviews.
     * For example, if you want to have only one review per customer and per product, you can set the value to <code>customer's id</code> and <code>product's id</code>.</p>
     *
     * @return null|string
     */
    public function getUniquenessValue();

    /**
     * @return null|string
     */
    public function getLocale();

    /**
     * @return null|string
     */
    public function getAuthorName();

    /**
     * @return null|string
     */
    public function getTitle();

    /**
     * @return null|string
     */
    public function getText();

    /**
     * <p>Identifies the target of the review.
     * Can be a Product or a Channel</p>
     *
     * @return null|mixed
     */
    public function getTarget();

    /**
     * @return null|StateResourceIdentifier
     */
    public function getState();

    /**
     * <p>Number between -100 and 100 included.
     * Rating of the targeted object, like a product.
     * This rating can represent the number of stars, or a percentage, or a like (+1)/dislike (-1)
     * A rating is used in the ratings statistics of the targeted object, unless the review is in a state that does not have the role <code>ReviewIncludedInStatistics</code>.</p>
     *
     * @return null|int
     */
    public function getRating();

    /**
     * <p>The customer who created the review.</p>
     *
     * @return null|CustomerResourceIdentifier
     */
    public function getCustomer();

    /**
     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?string $uniquenessValue
     */
    public function setUniquenessValue(?string $uniquenessValue): void;

    /**
     * @param ?string $locale
     */
    public function setLocale(?string $locale): void;

    /**
     * @param ?string $authorName
     */
    public function setAuthorName(?string $authorName): void;

    /**
     * @param ?string $title
     */
    public function setTitle(?string $title): void;

    /**
     * @param ?string $text
     */
    public function setText(?string $text): void;

    /**
     * @param ?JsonObject $target
     */
    public function setTarget(?JsonObject $target): void;

    /**
     * @param ?StateResourceIdentifier $state
     */
    public function setState(?StateResourceIdentifier $state): void;

    /**
     * @param ?int $rating
     */
    public function setRating(?int $rating): void;

    /**
     * @param ?CustomerResourceIdentifier $customer
     */
    public function setCustomer(?CustomerResourceIdentifier $customer): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;
}
