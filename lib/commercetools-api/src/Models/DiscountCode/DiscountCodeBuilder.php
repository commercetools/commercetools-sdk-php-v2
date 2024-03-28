<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Api\Models\CartDiscount\CartDiscountReferenceCollection;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\BaseResourceBuilder;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByBuilder;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByBuilder;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\Common\ReferenceCollection;
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
 * @implements Builder<DiscountCode>
 */
final class DiscountCodeBuilder implements Builder
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

     * @var ?string
     */
    private $key;

    /**

     * @var null|LastModifiedBy|LastModifiedByBuilder
     */
    private $lastModifiedBy;

    /**

     * @var null|CreatedBy|CreatedByBuilder
     */
    private $createdBy;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $name;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $description;

    /**

     * @var ?string
     */
    private $code;

    /**

     * @var ?CartDiscountReferenceCollection
     */
    private $cartDiscounts;

    /**

     * @var ?string
     */
    private $cartPredicate;

    /**

     * @var ?bool
     */
    private $isActive;

    /**

     * @var ?ReferenceCollection
     */
    private $references;

    /**

     * @var ?int
     */
    private $maxApplications;

    /**

     * @var ?int
     */
    private $maxApplicationsPerCustomer;

    /**

     * @var null|CustomFields|CustomFieldsBuilder
     */
    private $custom;

    /**

     * @var ?array
     */
    private $groups;

    /**

     * @var ?DateTimeImmutable
     */
    private $validFrom;

    /**

     * @var ?DateTimeImmutable
     */
    private $validUntil;

    /**

     * @var ?int
     */
    private $applicationVersion;

    /**
     * <p>Unique identifier of the DiscountCode.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Current version of the DiscountCode.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>Date and time (UTC) the DiscountCode was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * <p>Date and time (UTC) the DiscountCode was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        return $this->lastModifiedAt;
    }

    /**
     * <p>User-defined unique identifier of the DiscountCode.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>IDs and references that last modified the DiscountCode.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        return $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy;
    }

    /**
     * <p>IDs and references that created the DiscountCode.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        return $this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy;
    }

    /**
     * <p>Name of the DiscountCode.</p>
     *

     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**
     * <p>Description of the DiscountCode.</p>
     *

     * @return null|LocalizedString
     */
    public function getDescription()
    {
        return $this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description;
    }

    /**
     * <p>User-defined unique identifier of the DiscountCode <a href="/../api/projects/carts#add-discountcode">added to the Cart</a> to apply the related <a href="ctp:api:type:CartDiscount">CartDiscounts</a>.</p>
     *

     * @return null|string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * <p>Reference to CartDiscounts that can be applied to the Cart once the DiscountCode is applied.</p>
     *

     * @return null|CartDiscountReferenceCollection
     */
    public function getCartDiscounts()
    {
        return $this->cartDiscounts;
    }

    /**
     * <p>DiscountCode can only be applied to Carts that match this predicate.</p>
     *

     * @return null|string
     */
    public function getCartPredicate()
    {
        return $this->cartPredicate;
    }

    /**
     * <p>Indicates if the DiscountCode is active and can be applied to the Cart.</p>
     *

     * @return null|bool
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * <p>Array generated from the Cart predicate.
     * It contains the references of all the resources that are addressed in the predicate.</p>
     *

     * @return null|ReferenceCollection
     */
    public function getReferences()
    {
        return $this->references;
    }

    /**
     * <p>Number of times the DiscountCode can be applied.
     * DiscountCode application is counted at the time of Order creation or edit. However, Order cancellation or deletion does not decrement the count.</p>
     *

     * @return null|int
     */
    public function getMaxApplications()
    {
        return $this->maxApplications;
    }

    /**
     * <p>Number of times the DiscountCode can be applied per Customer (anonymous Carts are not supported).
     * DiscountCode application is counted at the time of Order creation or edit. However, Order cancellation or deletion does not decrement the count.</p>
     *

     * @return null|int
     */
    public function getMaxApplicationsPerCustomer()
    {
        return $this->maxApplicationsPerCustomer;
    }

    /**
     * <p>Custom Fields of the DiscountCode.</p>
     *

     * @return null|CustomFields
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * <p>Groups to which the DiscountCode belongs to.</p>
     *

     * @return null|array
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * <p>Date and time (UTC) from which the DiscountCode is effective.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * <p>Date and time (UTC) until which the DiscountCode is effective.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
     * <p>Used and managed by the API and must not be used in customer logic.
     * The value can change at any time due to internal and external factors.</p>
     *

     * @return null|int
     */
    public function getApplicationVersion()
    {
        return $this->applicationVersion;
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
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

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
     * @param ?LocalizedString $name
     * @return $this
     */
    public function withName(?LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param ?LocalizedString $description
     * @return $this
     */
    public function withDescription(?LocalizedString $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @param ?string $code
     * @return $this
     */
    public function withCode(?string $code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @param ?CartDiscountReferenceCollection $cartDiscounts
     * @return $this
     */
    public function withCartDiscounts(?CartDiscountReferenceCollection $cartDiscounts)
    {
        $this->cartDiscounts = $cartDiscounts;

        return $this;
    }

    /**
     * @param ?string $cartPredicate
     * @return $this
     */
    public function withCartPredicate(?string $cartPredicate)
    {
        $this->cartPredicate = $cartPredicate;

        return $this;
    }

    /**
     * @param ?bool $isActive
     * @return $this
     */
    public function withIsActive(?bool $isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * @param ?ReferenceCollection $references
     * @return $this
     */
    public function withReferences(?ReferenceCollection $references)
    {
        $this->references = $references;

        return $this;
    }

    /**
     * @param ?int $maxApplications
     * @return $this
     */
    public function withMaxApplications(?int $maxApplications)
    {
        $this->maxApplications = $maxApplications;

        return $this;
    }

    /**
     * @param ?int $maxApplicationsPerCustomer
     * @return $this
     */
    public function withMaxApplicationsPerCustomer(?int $maxApplicationsPerCustomer)
    {
        $this->maxApplicationsPerCustomer = $maxApplicationsPerCustomer;

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
     * @param ?array $groups
     * @return $this
     */
    public function withGroups(?array $groups)
    {
        $this->groups = $groups;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $validFrom
     * @return $this
     */
    public function withValidFrom(?DateTimeImmutable $validFrom)
    {
        $this->validFrom = $validFrom;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $validUntil
     * @return $this
     */
    public function withValidUntil(?DateTimeImmutable $validUntil)
    {
        $this->validUntil = $validUntil;

        return $this;
    }

    /**
     * @param ?int $applicationVersion
     * @return $this
     */
    public function withApplicationVersion(?int $applicationVersion)
    {
        $this->applicationVersion = $applicationVersion;

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
     * @deprecated use withName() instead
     * @return $this
     */
    public function withNameBuilder(?LocalizedStringBuilder $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @deprecated use withDescription() instead
     * @return $this
     */
    public function withDescriptionBuilder(?LocalizedStringBuilder $description)
    {
        $this->description = $description;

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

    public function build(): DiscountCode
    {
        return new DiscountCodeModel(
            $this->id,
            $this->version,
            $this->createdAt,
            $this->lastModifiedAt,
            $this->key,
            $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy,
            $this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy,
            $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name,
            $this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description,
            $this->code,
            $this->cartDiscounts,
            $this->cartPredicate,
            $this->isActive,
            $this->references,
            $this->maxApplications,
            $this->maxApplicationsPerCustomer,
            $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom,
            $this->groups,
            $this->validFrom,
            $this->validUntil,
            $this->applicationVersion
        );
    }

    public static function of(): DiscountCodeBuilder
    {
        return new self();
    }
}
