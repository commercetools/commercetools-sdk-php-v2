<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\DiscountCodes;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\CartDiscountKeyReferenceCollection;
use Commercetools\Import\Models\Common\ImportResource;
use Commercetools\Import\Models\Common\ImportResourceBuilder;
use Commercetools\Import\Models\Common\LocalizedString;
use Commercetools\Import\Models\Common\LocalizedStringBuilder;
use Commercetools\Import\Models\Customfields\Custom;
use Commercetools\Import\Models\Customfields\CustomBuilder;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<DiscountCodeImport>
 */
final class DiscountCodeImportBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

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

     * @var ?CartDiscountKeyReferenceCollection
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

     * @var ?int
     */
    private $maxApplications;

    /**

     * @var ?int
     */
    private $maxApplicationsPerCustomer;

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

     * @var null|Custom|CustomBuilder
     */
    private $custom;

    /**
     * <p>User-defined unique identifier. If a <a href="ctp:api:type:DiscountCode">DiscountCode</a> with this <code>key</code> exists, it is updated with the imported data.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Maps to <code>DiscountCode.name</code>.</p>
     *

     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**
     * <p>Maps to <code>DiscountCode.description</code>.</p>
     *

     * @return null|LocalizedString
     */
    public function getDescription()
    {
        return $this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description;
    }

    /**
     * <p>Maps to <code>DiscountCode.code</code>. This value cannot be updated. Attempting to update this value will result in an <a href="/import-export/error#invalidfieldsupdateerror">InvalidFieldsUpdate</a> error.</p>
     *

     * @return null|string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * <p>Maps to <code>DiscountCode.cartDiscounts</code>. If the referenced <a href="ctp:api:type:CartDiscount">CartDiscounts</a> do not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced CartDiscounts are created.</p>
     *

     * @return null|CartDiscountKeyReferenceCollection
     */
    public function getCartDiscounts()
    {
        return $this->cartDiscounts;
    }

    /**
     * <p>Maps to <code>DiscountCode.cartPredicate</code>.</p>
     *

     * @return null|string
     */
    public function getCartPredicate()
    {
        return $this->cartPredicate;
    }

    /**
     * <p>Maps to <code>DiscountCode.isActive</code>.</p>
     *

     * @return null|bool
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * <p>Maps to <code>DiscountCode.maxApplications</code>.</p>
     *

     * @return null|int
     */
    public function getMaxApplications()
    {
        return $this->maxApplications;
    }

    /**
     * <p>Maps to <code>DiscountCode.maxApplicationsPerCustomer</code>.</p>
     *

     * @return null|int
     */
    public function getMaxApplicationsPerCustomer()
    {
        return $this->maxApplicationsPerCustomer;
    }

    /**
     * <p>Maps to <code>DiscountCode.groups</code>.</p>
     *

     * @return null|array
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * <p>Maps to <code>DiscountCode.validFrom</code>.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * <p>Maps to <code>DiscountCode.validUntil</code>.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
     * <p>Maps to <code>DiscountCode.custom</code>.</p>
     *

     * @return null|Custom
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomBuilder ? $this->custom->build() : $this->custom;
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
     * @param ?CartDiscountKeyReferenceCollection $cartDiscounts
     * @return $this
     */
    public function withCartDiscounts(?CartDiscountKeyReferenceCollection $cartDiscounts)
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
     * @param ?Custom $custom
     * @return $this
     */
    public function withCustom(?Custom $custom)
    {
        $this->custom = $custom;

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
    public function withCustomBuilder(?CustomBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    public function build(): DiscountCodeImport
    {
        return new DiscountCodeImportModel(
            $this->key,
            $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name,
            $this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description,
            $this->code,
            $this->cartDiscounts,
            $this->cartPredicate,
            $this->isActive,
            $this->maxApplications,
            $this->maxApplicationsPerCustomer,
            $this->groups,
            $this->validFrom,
            $this->validUntil,
            $this->custom instanceof CustomBuilder ? $this->custom->build() : $this->custom
        );
    }

    public static function of(): DiscountCodeImportBuilder
    {
        return new self();
    }
}
