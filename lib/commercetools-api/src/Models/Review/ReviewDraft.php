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
     * <p>User-defined unique identifier for the Review.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>If set, this value must be unique among Reviews.
     * For example, if you want to have only one Review per Customer and per Product, you can set the value to Customer <code>id</code> + Product <code>id</code>.</p>
     *

     * @return null|string
     */
    public function getUniquenessValue();

    /**
     * <p>Language in which the content of the Review is written.</p>
     *

     * @return null|string
     */
    public function getLocale();

    /**
     * <p>Name of the author.</p>
     *

     * @return null|string
     */
    public function getAuthorName();

    /**
     * <p>Title of the Review.</p>
     *

     * @return null|string
     */
    public function getTitle();

    /**
     * <p>Content of the Review.</p>
     *

     * @return null|string
     */
    public function getText();

    /**
     * <p>Identifies the target of the Review. Can be a <a href="ctp:api:type:Product">Product</a> or a <a href="ctp:api:type:Channel">Channel</a>, specified as <a href="ctp:api:type:ProductResourceIdentifier">ProductResourceIdentifier</a> or <a href="ctp:api:type:ChannelResourceIdentifier">ChannelResourceIdentifier</a>, respectively.</p>
     *

     * @return null|mixed
     */
    public function getTarget();

    /**
     * <p>State of the Review. Used for approval processes, see <a href="/../tutorials/review-ratings#review-approval-process">Review approval process</a> for details.</p>
     *

     * @return null|StateResourceIdentifier
     */
    public function getState();

    /**
     * <p>Rating of the targeted Product or Channel.
     * This rating can represent the number of stars, a percentage, or a like (+1)/dislike (-1).
     * A rating is used in the ratings statistics of the targeted object, unless the Review is in a State that does not have the role <code>ReviewIncludedInStatistics</code>.</p>
     *

     * @return null|int
     */
    public function getRating();

    /**
     * <p>Customer who created the Review.</p>
     *

     * @return null|CustomerResourceIdentifier
     */
    public function getCustomer();

    /**
     * <p>Custom Fields for the Review.</p>
     *

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
