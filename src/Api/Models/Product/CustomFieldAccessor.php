<?php


namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringCollection;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyCollection;
use Commercetools\Api\Models\Common\MoneyModel;
use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceModel;
use Commercetools\Api\Models\ProductType\AttributeLocalizedEnumValue;
use Commercetools\Api\Models\ProductType\AttributeLocalizedEnumValueCollection;
use Commercetools\Api\Models\ProductType\AttributeLocalizedEnumValueModel;
use Commercetools\Api\Models\ProductType\AttributePlainEnumValue;
use Commercetools\Api\Models\ProductType\AttributePlainEnumValueCollection;
use Commercetools\Api\Models\ProductType\AttributePlainEnumValueModel;
use Commercetools\Api\Models\Type\CustomFieldEnumValue;
use Commercetools\Api\Models\Type\CustomFieldEnumValueCollection;
use Commercetools\Api\Models\Type\CustomFieldEnumValueModel;
use Commercetools\Api\Models\Type\CustomFieldLocalizedEnumValue;
use Commercetools\Api\Models\Type\CustomFieldLocalizedEnumValueCollection;
use Commercetools\Api\Models\Type\CustomFieldLocalizedEnumValueModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

class CustomFieldAccessor
{
    /**
     * @var mixed
     */
    private $value;

    /**
     * @param mixed $value
     */
    private function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @psalm-return list<mixed>|array<string, mixed>|\stdClass
     * @return mixed
     */
    public function getValue()
    {
        /**
         * @psalm-var list<mixed>|array<string, mixed>|\stdClass $value
         */
        $value = $this->value;
        return $value;
    }

    /**
     * @psalm-return callable(mixed): self
     */
    public static function of()
    {
        return function ($value): CustomFieldAccessor {
            return new static($value);
        };
    }

    public function getValueAsEnum(): CustomFieldEnumValue
    {
        /**
         * @psalm-var array<string, mixed>|\stdClass $value
         */
        $value = $this->value;
        return CustomFieldEnumValueModel::of($value);
    }

    public function getValueAsLocalizedEnum(): CustomFieldLocalizedEnumValue
    {
        /**
         * @psalm-var array<string, mixed>|\stdClass $value
         */
        $value = $this->value;
        return CustomFieldLocalizedEnumValueModel::of($value);
    }

    public function getValueAsString(): string
    {
        return (string)$this->value;
    }

    public function getValueAsInt(): int
    {
        return (int)$this->value;
    }

    public function getValueAsFloat(): float
    {
        return (float)$this->value;
    }

    public function getValueAsBool(): bool
    {
        return (bool)$this->value;
    }

    public function getValueAsDateTime(): ?DateTimeImmutable
    {
        $value = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, (string)$this->value);
        return $value ? $value : null;
    }

    public function getValueAsTime(): ?DateTimeImmutable
    {
        $value = DateTimeImmutable::createFromFormat(MapperFactory::TIME_FORMAT, (string)$this->value);
        return $value ? $value : null;
    }

    public function getValueAsDate(): ?DateTimeImmutable
    {
        $value = DateTimeImmutable::createFromFormat(MapperFactory::DATE_FORMAT, (string)$this->value);
        return $value ? $value : null;
    }

    public function getValueAsMoney(): Money
    {
        /**
         * @psalm-var array<string, mixed>|\stdClass $value
         */
        $value = $this->value;
        return MoneyModel::of($value);
    }

    public function getValueAsReference(): Reference
    {
        /**
         * @psalm-var array<string, mixed>|\stdClass $value
         */
        $value = $this->value;
        $refClass = ReferenceModel::resolveDiscriminatorClass($value);
        return $refClass::of($value);
    }

    public function getValueAsLocalizedString(): LocalizedString
    {
        /**
         * @psalm-var array<string, string>|\stdClass $value
         */
        $value = $this->value;
        return LocalizedStringModel::of($value);
    }

    public function getValueAsEnumSet(): CustomFieldEnumValueCollection
    {
        /**
         * @psalm-var list<mixed> $value
         */
        $value = $this->value;
        return CustomFieldEnumValueCollection::fromArray($value);
    }

    public function getValueAsLocalizedEnumSet(): CustomFieldLocalizedEnumValueCollection
    {
        /**
         * @psalm-var list<mixed> $value
         */
        $value = $this->value;
        return CustomFieldLocalizedEnumValueCollection::fromArray($value);
    }

    public function getValueAsStringSet(): array
    {
        /**
         * @psalm-var list<string> $value
         */
        $value = $this->value;
        return $value;
    }

    public function getValueAsIntSet(): array
    {
        /**
         * @psalm-var list<mixed> $value
         */
        $value = $this->value;
        return array_map(function ($value) {
            return (int)$value;
        }, $value);
    }

    public function getValueAsFloatSet(): array
    {
        /**
         * @psalm-var list<mixed> $value
         */
        $value = $this->value;
        return array_map(function ($value) {
            return (float)$value;
        }, $value);
    }

    public function getValueAsBoolSet(): array
    {
        /**
         * @psalm-var list<bool> $value
         */
        $value = $this->value;
        return $value;
    }

    public function getValueAsDateTimeSet(): DateTimeImmutableCollection
    {
        /**
         * @psalm-var list<mixed> $value
         */
        $value = $this->value;
        return DateTimeImmutableCollection::fromArray($value);
    }

    public function getValueAsTimeSet(): DateTimeImmutableCollection
    {
        /**
         * @psalm-var list<mixed> $value
         */
        $value = $this->value;
        return DateTimeImmutableCollection::fromArray($value);
    }

    public function getValueAsDateSet(): DateTimeImmutableCollection
    {
        /**
         * @psalm-var list<mixed> $value
         */
        $value = $this->value;
        return DateTimeImmutableCollection::fromArray($value);
    }

    public function getValueAsMoneySet(): MoneyCollection
    {
        /**
         * @psalm-var list<mixed> $value
         */
        $value = $this->value;
        return MoneyCollection::fromArray($value);
    }

    public function getValueAsLocalizedStringSet(): LocalizedStringCollection
    {
        /**
         * @psalm-var list<mixed> $value
         */
        $value = $this->value;
        return LocalizedStringCollection::fromArray($value);
    }
}
