<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Product\ProductReference;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface Review extends BaseResource
{
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_KEY = 'key';
    public const FIELD_UNIQUENESS_VALUE = 'uniquenessValue';
    public const FIELD_LOCALE = 'locale';
    public const FIELD_AUTHOR_NAME = 'authorName';
    public const FIELD_TITLE = 'title';
    public const FIELD_TEXT = 'text';
    public const FIELD_TARGET = 'target';
    public const FIELD_INCLUDED_IN_STATISTICS = 'includedInStatistics';
    public const FIELD_RATING = 'rating';
    public const FIELD_STATE = 'state';
    public const FIELD_CUSTOMER = 'customer';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>The unique ID of the review.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * <p>The current version of the review.</p>
     *
     * @return null|int
     */
    public function getVersion();

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>Present on resources updated after 1/02/2019 except for events not tracked.</p>
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>Present on resources created after 1/02/2019 except for events not tracked.</p>
     *
     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * <p>User-specific unique identifier for the review.</p>
     *
     * @return null|string
     */
    public function getKey();

    /**
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
     * <p>Indicates if this review is taken into account in the ratings statistics of the target.
     * A review is per default used in the statistics, unless the review is in a state that does not have the role <code>ReviewIncludedInStatistics</code>.
     * If the role of a State is modified after the calculation of this field, the calculation is not updated.</p>
     *
     * @return null|bool
     */
    public function getIncludedInStatistics();

    /**
     * <p>Number between -100 and 100 included.</p>
     *
     * @return null|int
     */
    public function getRating();

    /**
     * @return null|StateReference
     */
    public function getState();

    /**
     * <p>The customer who created the review.</p>
     *
     * @return null|CustomerReference
     */
    public function getCustomer();

    /**
     * @return null|CustomFields
     */
    public function getCustom();

    public function setId(?string $id): void;

    public function setVersion(?int $version): void;

    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;

    public function setCreatedBy(?CreatedBy $createdBy): void;

    public function setKey(?string $key): void;

    public function setUniquenessValue(?string $uniquenessValue): void;

    public function setLocale(?string $locale): void;

    public function setAuthorName(?string $authorName): void;

    public function setTitle(?string $title): void;

    public function setText(?string $text): void;

    public function setTarget(?JsonObject $target): void;

    public function setIncludedInStatistics(?bool $includedInStatistics): void;

    public function setRating(?int $rating): void;

    public function setState(?StateReference $state): void;

    public function setCustomer(?CustomerReference $customer): void;

    public function setCustom(?CustomFields $custom): void;
}
