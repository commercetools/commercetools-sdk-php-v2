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
     * <p>Unique identifier of the Review.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Current version of the Review.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>Date and time (UTC) the Review was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>Date and time (UTC) the Review was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>IDs and references that last modified the Review.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>IDs and references that created the Review.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * <p>User-defined unique identifier of the Review.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Must be unique among Reviews. For example, if this value is set to Customer <code>id</code> + Product <code>id</code>, only one Review per Customer and per Product is allowed.</p>
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
     * <p>Identifies the target of the Review. Can be a <a href="ctp:api:type:Product">Product</a> or a <a href="ctp:api:type:Channel">Channel</a>, specified as <a href="ctp:api:type:ProductReference">ProductReference</a> or <a href="ctp:api:type:ChannelReference">ChannelReference</a>, respectively.</p>
     *

     * @return null|mixed
     */
    public function getTarget();

    /**
     * <p>Indicates if this Review is taken into account in the ratings statistics of the target.
     * A Review is per default used in the statistics, unless the Review is in a state that does not have the <a href="ctp:api:type:StateRoleEnum">role</a> <code>ReviewIncludedInStatistics</code>.
     * If the role of a <a href="ctp:api:type:State">State</a> is modified after the calculation of this field, the calculation is not updated.</p>
     *

     * @return null|bool
     */
    public function getIncludedInStatistics();

    /**
     * <p>Rating of the Product or Channel.</p>
     *

     * @return null|int
     */
    public function getRating();

    /**
     * <p>State of the Review. Used for approval processes, see <a href="/../tutorials/review-ratings#review-approval-process">Review approval process</a> for details.</p>
     *

     * @return null|StateReference
     */
    public function getState();

    /**
     * <p>Customer who created the Review.</p>
     *

     * @return null|CustomerReference
     */
    public function getCustomer();

    /**
     * <p>Custom Fields of the Review.</p>
     *

     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     */
    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;

    /**
     * @param ?CreatedBy $createdBy
     */
    public function setCreatedBy(?CreatedBy $createdBy): void;

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
     * @param ?bool $includedInStatistics
     */
    public function setIncludedInStatistics(?bool $includedInStatistics): void;

    /**
     * @param ?int $rating
     */
    public function setRating(?int $rating): void;

    /**
     * @param ?StateReference $state
     */
    public function setState(?StateReference $state): void;

    /**
     * @param ?CustomerReference $customer
     */
    public function setCustomer(?CustomerReference $customer): void;

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void;
}
