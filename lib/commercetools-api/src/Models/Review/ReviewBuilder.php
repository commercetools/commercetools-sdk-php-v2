<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\BaseResourceBuilder;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByBuilder;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByBuilder;
use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Customer\CustomerReferenceBuilder;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\State\StateReferenceBuilder;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<Review>
 */
final class ReviewBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var ?int
     */
    private $version;

    /**

     * @var ?DateTimeImmutable
     */
    private $createdAt;

    /**

     * @var ?DateTimeImmutable
     */
    private $lastModifiedAt;

    /**

     * @var null|LastModifiedBy|LastModifiedByBuilder
     */
    private $lastModifiedBy;

    /**

     * @var null|CreatedBy|CreatedByBuilder
     */
    private $createdBy;

    /**

     * @var ?string
     */
    private $key;

    /**

     * @var ?string
     */
    private $uniquenessValue;

    /**

     * @var ?string
     */
    private $locale;

    /**

     * @var ?string
     */
    private $authorName;

    /**

     * @var ?string
     */
    private $title;

    /**

     * @var ?string
     */
    private $text;

    /**

     * @var ?JsonObject
     */
    private $target;

    /**

     * @var ?bool
     */
    private $includedInStatistics;

    /**

     * @var ?int
     */
    private $rating;

    /**

     * @var null|StateReference|StateReferenceBuilder
     */
    private $state;

    /**

     * @var null|CustomerReference|CustomerReferenceBuilder
     */
    private $customer;

    /**

     * @var null|CustomFields|CustomFieldsBuilder
     */
    private $custom;

    /**
     * <p>Unique identifier of the Review.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Current version of the Review.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>Date and time (UTC) the Review was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * <p>Date and time (UTC) the Review was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        return $this->lastModifiedAt;
    }

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/client-logging#events-tracked">events not tracked</a>.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        return $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy;
    }

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/client-logging#events-tracked">events not tracked</a>.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        return $this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy;
    }

    /**
     * <p>User-defined unique identifier of the Review.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Must be unique among Reviews. For example, if this value is set to Customer <code>id</code> + Product <code>id</code>, only one Review per Customer and per Product is allowed.</p>
     *

     * @return null|string
     */
    public function getUniquenessValue()
    {
        return $this->uniquenessValue;
    }

    /**
     * <p>Language in which the content of the Review is written.</p>
     *

     * @return null|string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * <p>Name of the author.</p>
     *

     * @return null|string
     */
    public function getAuthorName()
    {
        return $this->authorName;
    }

    /**
     * <p>Title of the Review.</p>
     *

     * @return null|string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * <p>Content of the Review.</p>
     *

     * @return null|string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * <p>Identifies the target of the Review. Can be a <a href="ctp:api:type:Product">Product</a> or a <a href="ctp:api:type:Channel">Channel</a>, specified as <a href="ctp:api:type:ProductReference">ProductReference</a> or <a href="ctp:api:type:ChannelReference">ChannelReference</a>, respectively.</p>
     *

     * @return null|JsonObject
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * <p>Indicates if this Review is taken into account in the ratings statistics of the target.
     * A Review is per default used in the statistics, unless the Review is in a state that does not have the <a href="ctp:api:type:StateRoleEnum">role</a> <code>ReviewIncludedInStatistics</code>.
     * If the role of a <a href="ctp:api:type:State">State</a> is modified after the calculation of this field, the calculation is not updated.</p>
     *

     * @return null|bool
     */
    public function getIncludedInStatistics()
    {
        return $this->includedInStatistics;
    }

    /**
     * <p>Rating of the Product or Channel.</p>
     *

     * @return null|int
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * <p>State of the Review. Used for approval processes, see <a href="/../tutorials/review-ratings#review-approval-process">Review approval process</a> for details.</p>
     *

     * @return null|StateReference
     */
    public function getState()
    {
        return $this->state instanceof StateReferenceBuilder ? $this->state->build() : $this->state;
    }

    /**
     * <p>Customer who created the Review.</p>
     *

     * @return null|CustomerReference
     */
    public function getCustomer()
    {
        return $this->customer instanceof CustomerReferenceBuilder ? $this->customer->build() : $this->customer;
    }

    /**
     * <p>Custom Fields of the Review.</p>
     *

     * @return null|CustomFields
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?int $version
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $createdAt
     * @return $this
     */
    public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     * @return $this
     */
    public function withLastModifiedAt(?DateTimeImmutable $lastModifiedAt)
    {
        $this->lastModifiedAt = $lastModifiedAt;

        return $this;
    }

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     * @return $this
     */
    public function withLastModifiedBy(?LastModifiedBy $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;

        return $this;
    }

    /**
     * @param ?CreatedBy $createdBy
     * @return $this
     */
    public function withCreatedBy(?CreatedBy $createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?string $uniquenessValue
     * @return $this
     */
    public function withUniquenessValue(?string $uniquenessValue)
    {
        $this->uniquenessValue = $uniquenessValue;

        return $this;
    }

    /**
     * @param ?string $locale
     * @return $this
     */
    public function withLocale(?string $locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * @param ?string $authorName
     * @return $this
     */
    public function withAuthorName(?string $authorName)
    {
        $this->authorName = $authorName;

        return $this;
    }

    /**
     * @param ?string $title
     * @return $this
     */
    public function withTitle(?string $title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @param ?string $text
     * @return $this
     */
    public function withText(?string $text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @param ?JsonObject $target
     * @return $this
     */
    public function withTarget(?JsonObject $target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * @param ?bool $includedInStatistics
     * @return $this
     */
    public function withIncludedInStatistics(?bool $includedInStatistics)
    {
        $this->includedInStatistics = $includedInStatistics;

        return $this;
    }

    /**
     * @param ?int $rating
     * @return $this
     */
    public function withRating(?int $rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * @param ?StateReference $state
     * @return $this
     */
    public function withState(?StateReference $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @param ?CustomerReference $customer
     * @return $this
     */
    public function withCustomer(?CustomerReference $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @param ?CustomFields $custom
     * @return $this
     */
    public function withCustom(?CustomFields $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @deprecated use withLastModifiedBy() instead
     * @return $this
     */
    public function withLastModifiedByBuilder(?LastModifiedByBuilder $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;

        return $this;
    }

    /**
     * @deprecated use withCreatedBy() instead
     * @return $this
     */
    public function withCreatedByBuilder(?CreatedByBuilder $createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * @deprecated use withState() instead
     * @return $this
     */
    public function withStateBuilder(?StateReferenceBuilder $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @deprecated use withCustomer() instead
     * @return $this
     */
    public function withCustomerBuilder(?CustomerReferenceBuilder $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @deprecated use withCustom() instead
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    public function build(): Review
    {
        return new ReviewModel(
            $this->id,
            $this->version,
            $this->createdAt,
            $this->lastModifiedAt,
            $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy,
            $this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy,
            $this->key,
            $this->uniquenessValue,
            $this->locale,
            $this->authorName,
            $this->title,
            $this->text,
            $this->target,
            $this->includedInStatistics,
            $this->rating,
            $this->state instanceof StateReferenceBuilder ? $this->state->build() : $this->state,
            $this->customer instanceof CustomerReferenceBuilder ? $this->customer->build() : $this->customer,
            $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom
        );
    }

    public static function of(): ReviewBuilder
    {
        return new self();
    }
}
